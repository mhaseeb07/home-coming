<?php

namespace App\Http\Controllers\API\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Api\Response;
use App\Models\Eligibles;
use App\User;
use App\Models\UserAttendance;

class AttendanceController extends Controller
{
    use Response;
    public $data;

    public function getDetail($id)
    {
        $eligible = Eligibles::with('user')->where('pass_id', $id)->first();
        if (!isset($eligible)) {
            $this->data=['status_code'=>401,
            "error"=>["Invalid Login Token"],
            'data'=>[]
        ];
        $this->setResponse($this->data);
        return $this->getResponse();
        }
        if($eligible->user->role_status == 1){
            $this->data=['status_code'=>402,
                "error"=>["please login as a student role"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
            
        }
        $this->data=['status_code'=>200,
                "success"=>["Success"],
                'data'=>[
                'name'=>(isset($eligible->name) ? $eligible->name :''),
                'email'=>(isset($eligible->user->email) ? $eligible->user->email :''),
                'reg_no '=>(isset($eligible->user->reg_no) ? $eligible->user->reg_no :''),
                'position'=>(isset($eligible->user->position) ? $eligible->user->position :''),
                'pass_id'=>(isset($eligible->pass_id) ? $eligible->pass_id :''),]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
    }

    public function makeAttendance(Request $request,$id)
    {
        $eligible = Eligibles::where('pass_id', $id)->first();
        if(!isset($eligible)){
            $this->data=['status_code'=>401,
                "error"=>["invalid login token"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }
        $user=$eligible->user->id;
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
        $attendance = new UserAttendance();
        $attendance->in_out=$request->in_out;
        $attendance->position=$request->position;
        $attendance->user_id=$user;
        $attendance->created_by=$adminUser->id;
        $saved = $attendance->save();
        $userPosition = User::where('id', $user)->first();
        $userPosition->position = $request->position;
        $userSaved = $userPosition->save();
        
        if($saved){
            $this->data=['status_code'=>200,
                "success"=>["Attendance Insert Successfully"],
                'data'=>[
                    'in_out'=>$request->in_out,
                    'position'=>$request->position,
                    'user_id'=>(isset($eligible->user->id) ? $eligible->user->id :''),
                    'user'=>(isset($eligible->user->name) ? $eligible->user->name :''),
                    'reg_no'=>(isset($eligible->user->reg_no) ? $eligible->user->reg_no :''),
                    'created_by'=>$adminUser->id]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }
    }
}
