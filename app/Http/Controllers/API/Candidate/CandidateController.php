<?php

namespace App\Http\Controllers\API\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Api\Response;
use App\Models\Eligibles;
use App\Models\Guest;

class CandidateController extends Controller
{
    use Response;
    public $data;

    public function getDetail($id)
    {
        $eligible = Eligibles::with('seat', 'user')->where('pass_id', $id)->first();
        if (!isset($eligible)) {
            $this->data=['status_code'=>401,
                "error"=>["Invalid Login Token"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }
        if($eligible->vaccination_certificate){
            $vaccination_certificate = url('vaccination').'/'.$eligible->vaccination_certificate;
        }else{
            $vaccination_certificate = $eligible->vaccination_certificate;
        }
        if($eligible->voucher_image){
            $voucher_image = url('voucher').'/'.$eligible->voucher_image;
        }else{
            $voucher_image = $eligible->voucher_image;
        }
        // Campus data
        if($eligible->campus_id == 1){
            $campus_id = 'Health Sciences Wing';
        }
        if($eligible->campus_id == 2){
            $campus_id = 'Engineering Wing';
        }
        if($eligible->campus_id == 16){
            $campus_id = 'School of Nursing';
        }
        if($eligible->campus_id == 3){
            $campus_id = 'UMDC';
        }
        // Staus data
        if($eligible->status == 1){
            $status = 'Active';
        }
        else{
            $status = 'In Active';
        }
        if($eligible->amount == 0){
            $amount_status = 'Unpaid';
        }
        if($eligible->amount > 0  && $eligible->amount <= 2500){
            $amount_status = 'Partially Paid';
        }
        if($eligible->amount == 2500){
            $amount_status = 'Paid';
        }
        if($eligible->amount > 2500){
            $amount_status = 'Extra Paid';
        }
        if($eligible->vaccination_status == 0){
            $vaccination_status = 'Not Vaccinated';
        }
        if($eligible->vaccination_status == 1){
            $vaccination_status = 'Partially Vaccinated';
        }
        if($eligible->vaccination_status == 2){
            $vaccination_status = 'Fully Vaccinated';
        }
        if($eligible->eligible_type_id == 1){
            $eligible_type_id = 'TUF';
        }
        if($eligible->eligible_type_id == 2){
            $eligible_type_id = 'UMDC';
        }
        
        if($eligible->medal_id == 1){
            $medal_id = 'Gold';
        }
        if($eligible->medal_id == 2){
            $medal_id = 'Sliver';
        }
        if($eligible->medal_id == 3){
            $medal_id = 'Bronze';
        }
        $user_id = $eligible->user->id;
        $Guest = Guest::where('user_id',$user_id)->get();
        $this->data=['status_code'=>200,
                "success"=>["Get candidate information."],
                'data'=>[
                'id'=>(isset($eligible->id) ? $eligible->id :''),
                'reg_no'=>(isset($eligible->reg_no) ? $eligible->reg_no :''),
                'name'=>(isset($eligible->name) ? $eligible->name :''),
                'email'=>(isset($eligible->user->email) ? $eligible->user->email :''),
                'cnic'=>(isset($eligible->cnic) ? $eligible->cnic :''),
                'contact_no_residence'=>(isset($eligible->contact_no_residence) ? $eligible->contact_no_residence :''),
                'cell_no'=>(isset($eligible->cell_no) ? $eligible->cell_no :''),
                'degree_name'=>(isset($eligible->degree_name) ? $eligible->degree_name :''),
                'passout_session'=>(isset($eligible->passout_session) ? $eligible->passout_session :''),
                'passout_year'=>(isset($eligible->passout_year) ? $eligible->passout_session :''),
                'campus'=>(isset($campus_id) ? $campus_id :''),
                'father_name'=>(isset($eligible->father_name) ? $eligible->father_name :''),
                'father_cnic'=>(isset($eligible->father_cnic) ? $eligible->father_cnic :''),
                'address'=>(isset($eligible->address) ? $eligible->address :''),
                'voucher_image'=>(isset($voucher_image) ? $voucher_image:''),
                'status'=>(isset($status) ? $status :''),
                'position'=>(isset($eligible->user->position) ? $eligible->user->position :''),
                'amount'=>(isset($eligible->amount) ? $eligible->amount :''),
                'amount_status'=>(isset($amount_status) ? $amount_status :''),
                'pass_id'=>(isset($eligible->pass_id) ? $eligible->pass_id :''),
                'vaccination_certificate'=>(isset($vaccination_certificate) ? $vaccination_certificate :''),
                'vaccination_status'=>(isset($vaccination_status) ? $vaccination_status:''),
                'eligible_type'=>(isset($eligible_type_id) ? $eligible_type_id:''),
                'medal'=>(isset($medal_id) ? $medal_id :''),
                'seat'=>(isset($eligible->seat->seat_no) ? $eligible->seat->seat_no :''),
                'guest'=>$Guest
                ]
            ];
        $this->setResponse($this->data);
        return $this->getResponse();
    }
}
