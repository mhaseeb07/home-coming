<?php

namespace App\Http\Controllers\API\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Eligibles;
use App\Models\Regalia;
use App\Models\UserLedger;
use App\Traits\Api\Response;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegaliaController extends Controller
{
    use Response;
    public $data;
    public function getDetail($id)
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
        $user_id = $eligible->user->id;
        $ledgers = UserLedger::with('regalia')->where('user_id',$user_id)->get();
        $regalia_ids = [];
        foreach ($ledgers as $ledger){
            $regalia_id= $ledger->regalia_id;
            $regalia_ids[] = ['id' => $regalia_id];
        }
        $regalias = Regalia::whereNotIn('id',$regalia_ids)->get();
        $this->data=['status_code'=>200,
            "success"=>["Get Successfully"],
            'data'=>[
                'regalia'=>$regalias,
                'ledgers'=>$ledgers
            ]
        ];
        $this->setResponse($this->data);
        return $this->getResponse();

    }

    public function return(Request $request,$id)
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
        //Amount Check
        $regalia=Regalia::where('id',$request->regalia_id)->first();
        if(!isset($regalia)){
            $this->data=['status_code'=>401,
                "error"=>["No Regalia Found"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }
        $getAmount=(isset($regalia->amount)?$regalia->amount:0);
        $payment = (isset($request->payment)?$request->payment:0);
        $returnPayment=$getAmount-$payment;
        if($payment > $getAmount){
            $this->data=['status_code'=>401,
                "warning"=>["Returning Amount Should not be greater than $getAmount"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }
        else{
            $regaliaId=$request->regalia_id;
            $user=$eligible->user->id;
            $ledger = UserLedger::where('regalia_id',$regaliaId)->where('user_id',$user)->first();
            if(isset($ledger)){
                $this->data=['status_code'=>200,
                    "info"=>["$regalia->name has already returned'"],
                    'data'=>[]
                ];
                $this->setResponse($this->data);
                return $this->getResponse();
            }
            else{
                $adminUser = User::where('m_login_token',$request->created_by)->first();
                $ledger = new UserLedger();
                $ledger->payment=$returnPayment;
                $ledger->regalia_id=$regaliaId;
                $ledger->user_id=$user;
                $ledger->created_by=$adminUser->id;
                $ledger->updated_by=$adminUser->id;
                $saved = $ledger->save();
                if($saved){
                    $this->data=['status_code'=>200,
                        "success"=>["Returned Successfully"],
                        'data'=>[]
                    ];
                    $this->setResponse($this->data);
                    return $this->getResponse();
                }
            }
            $this->setResponse($this->data);
            return $this->getResponse();
        }
    }
}
