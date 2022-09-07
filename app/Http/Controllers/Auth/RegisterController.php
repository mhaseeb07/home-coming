<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Eligibles;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest','xss']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'reg_no' => ['required', 'string', 'max:255','unique:users','exists:eligibles'],
            'cnic' => ['required_if:id,CNIC','exists:eligibles'],
            'father_cnic' => ['required_if:id,father_cnic','exists:eligibles'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $eligible = Eligibles::where('reg_no',$data['reg_no'])->where('status',1)->first();
        if(!isset($eligible)){
            echo "You have not allowed to register";
            die();
        }
        if($eligible){
            $user =  User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'reg_no' => $data['reg_no'],
                'password' => Hash::make($data['password']),
            ]);
            if ($user){
                $user->update([
                    'created_by'=>$user->id,
                    'updated_by'=>$user->id
                ]);
                $eligible->update([
                   'user_id'=>$user->id,
                    'pass_id'=>time().rand(0,9999)
                ]);
            }
            return $user;
        }
    }
}
