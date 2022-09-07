<?php

namespace App\Http\Controllers\API\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Api\Response;
use App\Models\Guest;
use App\User;

class GuestController extends Controller
{
    use Response;
    public $data;

    public function getdetail($id)
    {
        $guest = Guest::with('user', 'seat')->where('pass_id', $id)->first();
        if (!isset($guest)) {
            $this->data=['status_code'=>401,
                "error"=>["Invalid Login Token"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }
        // images of vaccination and voucher
        if(isset($guest->vaccination_certificate)){
            $vaccination_certificate = url('vaccination/guest').'/'.$guest->vaccination_certificate;
        }else{
            $vaccination_certificate = $guest->vaccination_certificate;
        }
        if(isset($guest->voucher_image)){
            $voucher_image = url('voucher/guest').'/'.$guest->voucher_image;
        }else{
            $voucher_image = $guest->voucher_image;
        }
        // created by and updated by
        if(!isset($guest->created_by)){
            $created_by = '';
        }
        $created_by = User::where('id', $guest->created_by)->pluck('name','name')->first();
        if(!isset($guest->updated_by)){
            $updated_by = '';
        }
        $updated_by = User::where('id', $guest->updated_by)->pluck('name','name')->first();
        // guest relation data
        if($guest->relation == 1){
            $relation = 'Father';
        }
        if($guest->relation == 2){
            $relation = 'Mother';
        }
        if($guest->relation == 3){
            $relation = 'Brother';
        }
        if($guest->relation == 4){
            $relation = 'Sister';
        }
        if($guest->relation == 5){
            $relation = 'Uncle';
        }
        if($guest->relation == 6){
            $relation = 'Aunt';
        }
        if($guest->relation == 7){
            $relation = 'Other';
        }else{
            $relation = '';
        }
        // guest Vaccination Status data
        if($guest->vaccination_status == 0){
            $vaccination_status = 'Not Vaccinated';
        }
        if($guest->vaccination_status == 1){
            $vaccination_status = 'Partially Vaccinated';
        }
        if($guest->vaccination_status == 2){
            $vaccination_status = 'Fully Vaccinated';
        }else{
            $vaccination_status = '';
        }
        if($guest->amount == 0){
            $guestType = 'Allowed';
        }else{
            $guestType = 'Extra';
        }
        $this->data=['status_code'=>200,
                "success"=>["Get Guest information."],
                'data'=>[
                'id'=>(isset($guest->id) ? $guest->id :''),
                'name'=>(isset($guest->name) ? $guest->name :''),
                'cnic'=>(isset($guest->cnic) ? $guest->cnic :''),
                'guestType'=>(isset($guestType) ? $guestType :''),
                'contact_number'=>(isset($guest->contact_number) ? $guest->contact_number :''),
                'relation'=>(isset($relation) ? $relation :''),
                'position'=>(isset($guest->position) ? $guest->position :''),
                'amount'=>(isset($guest->amount) ? $guest->amount :''),
                'pass_id'=>(isset($guest->pass_id) ? $guest->pass_id :''),
                'user_id'=>(isset($guest->user->id) ? $guest->user->id :''),
                'user_pass_id'=>(isset($guest->user->eligible[0]->pass_id) ? $guest->user->eligible[0]->pass_id :''),
                'voucher_image'=>(isset($voucher_image) ? $voucher_image :''),
                'vaccination_certificate'=>(isset($vaccination_certificate) ? $vaccination_certificate :''),
                'vaccination_status'=>(isset($vaccination_status) ? $vaccination_status :''),
                'user'=>(isset($guest->user->name) ? $guest->user->name :''),
                'seat'=>(isset($guest->seat->seat_no) ? $guest->seat->seat_no :''),
                'created_by'=>(isset($created_by) ? $created_by :''),
                'updated_by'=>(isset($updated_by) ? $updated_by :''),
                'created_at'=>(isset($guest->created_at) ? $guest->created_at :''),
                'updated_at'=>(isset($guest->updated_at) ? $guest->updated_at :''),
                ]
            ];
        $this->setResponse($this->data);
        return $this->getResponse();
    }
}
