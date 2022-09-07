<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Eligibles;
use App\Models\Guest;
use App\User;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;
use PDF;

class PersonalController extends Controller
{
    public function personal(){
        $user_id = Auth::user()->id;
        $eligible = Eligibles::where('user_id',$user_id)->first();
        return view('candidate.personal',compact('eligible'));
    }
    public function savePersonal(Request $request,$id){
        $request->validate([
            'cell_no'=>'required',
            'vaccination_certificate'=>'required|mimes:jpeg,png,jpg,pdf|max:2048',
            'vaccination_status'=>'required',
        ]);
        //Get Eligible User
        $eligible = Eligibles::where('id',$id)->first();
        if ($request->hasFile('vaccination_certificate')) {
            if(isset($eligible) && $eligible->vaccination_certificate){
                $preThumbnail = public_path('vaccination/'.$eligible->vaccination_certificate);
                if (File::exists($preThumbnail)) { // unlink or remove previous image from folder
                    unlink($preThumbnail);
                }
            }
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->vaccination_certificate->getClientOriginalExtension();
            $request->vaccination_certificate->move(public_path('vaccination/').date('Y'), $getImage);
            $image = $getImage;
        }
        else{
            if (isset($eligible) && $eligible->vaccination_certificate){
                $image = $eligible->vaccination_certificate;
            }
            else{
                $image='';
            }
        }
        if ($eligible){
            $eligible->update([
                'contact_no_residence'=>$request->contact_no_residence,
                'cell_no'=>$request->cell_no,
                'name_of_institution'=>$request->name_of_institution,
                'designation'=>$request->designation,
                'vaccination_certificate'=>$image,
                'vaccination_status'=>$request->vaccination_status,
            ]);
        }
        return redirect(route('eligibleGuest'))->with('message','Saved Successfully');
    }
    //Guest
    public function eligibleGuest(){
        $user_id = Auth::user()->id;
        $guest = Guest::where('user_id',$user_id)->first();
        return view('candidate.guest',compact('guest'));
    }
    public function saveEligibleGuest(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'cnic'=>'required',
            'contact_number'=>'required',
            'relation'=>'required',
            'vaccination_certificate'=>'required|mimes:jpeg,png,jpg,pdf|max:2048',
            'vaccination_status'=>'required',
        ]);
        $existingGuest = Guest::where('user_id',$id)->first();
        if ($request->hasFile('vaccination_certificate')) {
            if(isset($existingGuest) && $existingGuest->vaccination_certificate){
                $preThumbnail = public_path('vaccination/guest/'.$existingGuest->vaccination_certificate);
                if (File::exists($preThumbnail)) { // unlink or remove previous image from folder
                    unlink($preThumbnail);
                }
            }
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->vaccination_certificate->getClientOriginalExtension();
            $request->vaccination_certificate->move(public_path('vaccination/guest/').date('Y'), $getImage);
            $image = $getImage;
        }
        else{
            if (isset($existingGuest) && $existingGuest->vaccination_certificate){
                $image = $existingGuest->vaccination_certificate;
            }
            else{
                $image='';
            }
        }
        $created_by = Auth::user()->id;
        $guest = Guest::updateOrCreate(
            ['user_id'=>$id],
            [
                'name'=>$request->name,
                'cnic'=>$request->cnic,
                'contact_number'=>$request->contact_number,
                'relation'=>$request->relation,
                'vaccination_certificate'=>$image,
                'vaccination_status'=>$request->vaccination_status,
                'created_by'=>$created_by,
                'updated_by'=>$created_by,
                'pass_id'=>time().rand(0,9999),
                'user_id'=>$id
            ]
        );
        if ($guest){
            return redirect(route('eligibleVoucher'))->with('message','Saved Successfully');
        }
    }
    //Upload Voucher
    public function eligibleVoucher(){
        $user_id = Auth::user()->id;
        $eligible = Eligibles::where('user_id',$user_id)->first();
        return view('candidate.voucher',compact('eligible'));
    }
    public function saveEligibleVoucher(Request $request,$id){
        $request->validate([
            'voucher_image'=>'required|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);
        //Get Eligible User
        $eligible = Eligibles::where('id',$id)->first();
        if ($request->hasFile('voucher_image')) {
            if(isset($eligible) && $eligible->voucher_image){
                $preThumbnail = public_path('voucher/'.$eligible->voucher_image);
                if (File::exists($preThumbnail)) { // unlink or remove previous image from folder
                    unlink($preThumbnail);
                }
            }
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->voucher_image->getClientOriginalExtension();
            $request->voucher_image->move(public_path('voucher/').date('Y'), $getImage);
            $image = $getImage;
        }
        else{
            if (isset($eligible) && $eligible->voucher_image){
                $image = $eligible->voucher_image;
            }
            else{
                $image='';
            }
        }
        if ($eligible){
            $eligible->update([
                'voucher_image'=>$image,
            ]);
        }
        return redirect(route('candidate_dashboard'))->with('message','Saved Successfully');
    }
    //Generate Voucher
    public function generateVoucher($id){
        $eligible = Eligibles::findOrFail($id);
        //return view('candidate.voucher-pdf', compact('eligible'));
        $pdf = PDF::loadView('candidate.voucher-pdf', compact('eligible'))->setPaper('a4', 'landscape');

        return $pdf->download('Voucher-'.$id.'.pdf');
    }
}
