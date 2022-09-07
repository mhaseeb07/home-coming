<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Traits\Api\Response;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LogoutController extends Controller
{

    use Response;
    public $data;

    public function logout(Request $request)
    {
        $credentials = $request->all();
        $userEmail = trim($request->email);

        $user = User::where('email',$userEmail)->first();
        if (empty($user)) {
            $this->data=['status_code'=>401,
                "error"=>["User doesn't not exist"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }

        $auth_token = null;
        $user->m_login_token = $auth_token;

        $user->save();

        $this->data=['status_code'=>200,
            "success"=>["Logout Successfully."],
            'data'=>['email'=>$userEmail]
        ];
        return $this->data;

    }
}
