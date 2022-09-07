<?php

namespace App\Http\Controllers\API\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Api\Response;
use App\Models\Guest;
use App\User;
use App\Models\GuestAttendance;

class AttendanceController extends Controller
{
    use Response;
    public $data;

    public function getdetail($id)
    {
        $guest = Guest::where('pass_id', $id)->first();
        if (!isset($guest)) {
            $this->data=['status_code'=>401,
            "error"=>["Invalid Login Token"],
            'data'=>[]
        ];
        $this->setResponse($this->data);
        return $this->getResponse();
        }
        $this->data=['status_code'=>200,
                "success"=>["Success"],
                'data'=>[
                'name'=>(isset($guest->name) ? $guest->name :''), 
                'cnic'=>(isset($guest->cnic) ? $guest->cnic :''),
                'reg_no '=>(isset($guest->user->reg_no) ? $guest->user->reg_no :''),
                'position'=>(isset($guest->position) ? $guest->position :''),
                'pass_id'=>(isset($guest->pass_id) ? $guest->pass_id :''),]
            ];
        $this->setResponse($this->data);
        return $this->getResponse();
    }

    public function makeAttendance(Request $request,$id)
    {
        $guest = Guest::with('user')->where('pass_id', $id)->first();
        if(!isset($guest)){
            $this->data=['status_code'=>401,
                "error"=>["invalid login token"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }
        $guestId=$guest->id;
        //insert
        $adminUser = User::where('m_login_token',$request->created_by)->first();
        if(!isset($adminUser)){
            $this->data=['status_code'=>401,
                "error"=>["invalid user login token"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }
        $attendance = new GuestAttendance();
        $attendance->in_out=$request->in_out;
        $attendance->position=$request->position;
        $attendance->guest_id=$guestId;
        $attendance->created_by=$adminUser->id;
        $saved = $attendance->save();
        $userPosition = Guest::where('id', $guestId)->first();
        $userPosition->position = $request->position;
        $userSaved = $userPosition->save();
        
        if($saved){
            $this->data=['status_code'=>200,
                "success"=>["Attendance Insert Successfully"],
                'data'=>[
                    'in_out'=>$request->in_out,
                    'position'=>$request->position,
                    'guest_id'=>$guest->id,
                    'guest'=>$guest->name,
                    'user_id'=>(isset($guest->user->id) ? $guest->user->id :''),
                    'user'=>(isset($guest->user->name) ? $guest->user->name :''),
                    'reg_no'=>(isset($guest->user->reg_no) ? $guest->user->reg_no :''),
                    'created_by'=>$adminUser->id]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }
    }
}
