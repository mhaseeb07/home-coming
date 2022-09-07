<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Api\Response;
use App\User;
use Carbon\Carbon;

class LoginController extends Controller
{
    use Response;
    public $data;

    public function login(Request $request)
    {

        $credentials = $request->all();
        $userEmail = trim($request->email);

        $user = User::where('email',$userEmail)->first();
        if (empty($user)) {
            $this->data=['status_code'=>401,
                "error"=>["Invalid Credentials"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }

        if($user->role_status != 1){
            $this->data=['status_code'=>403,
                "error"=>["Forbidden"],
                'data'=>[]
            ];

            $this->setResponse($this->data);
            return $this->getResponse();
        }

        if($user->email_verified_at == null) {
            $this->data=['status_code'=>403,
                "info"=>["Please verify your email"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }

        if (auth()->attempt($credentials)) {

            $user = auth()->user();
            $user->m_last_login = Carbon::now();

            $auth_token = bin2hex(random_bytes(12));
            $user->m_login_token = $auth_token;

            $user->save();

            $this->data=['status_code'=>200,
                "success"=>["LogIn Successfully."],
                'data'=>['email'=>$userEmail,'auth_token'=>$auth_token]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }

        $this->data=['status_code'=>401,
            "error"=>["Invalid Credentials"],
            'data'=>[]
        ];
        $this->setResponse($this->data);
        return $this->getResponse();

    }
}
