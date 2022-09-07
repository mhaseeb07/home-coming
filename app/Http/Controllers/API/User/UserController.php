<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Api\Response;
use Spatie\Permission\Models\Permission;
use App\Models\PermissionGroup;
use App\Models\ConvocationSession;
use App\Models\ConvocationConfig;
use App\User;
use DB;

class UserController extends Controller
{
    use Response;
    public $data;

    public function getDetail($id)
    {

        $users = User::where('m_login_token', $id)->first();
        if (!$users) {
            $this->data=['status_code'=>401,
                "error"=>["Invalid Login Token"],
                'data'=>[]
            ];
            $this->setResponse($this->data);
            return $this->getResponse();
        }

        $this->data=['status_code'=>200,
                "success"=>["Success"],
                'data'=>['email'=>$users->email,'name'=>$users->name]
            ];
        $this->setResponse($this->data);
        return $this->getResponse();

    }

    public function getPermissions($id)
    {
        $user = User::where('users.m_login_token', '=', $id)->first();

        if(!isset($user)){
            $this->data=['status_code'=>401,
                "error"=>["Invalid Login Token"],
                'data'=>[]
            ];

            $this->setResponse($this->data);
            return $this->getResponse();
        }

        $userRoles = $user->roles->all();

        if(!isset($userRoles)){
            $this->data=['status_code'=>401,
                "error"=>["In sufficient Permissions"],
                'data'=>[]
            ];

            $this->setResponse($this->data);
            return $this->getResponse();
        }

        $PermissionGroupId = PermissionGroup::where('name','api')->first();

        if(!isset($PermissionGroupId->id)){
            $this->data=['status_code'=>401,
                "error"=>["In sufficient Permissions"],
                'data'=>[]
            ];

            $this->setResponse($this->data);
            return $this->getResponse();
        }


        $roles_arr = array();
        foreach($userRoles as $userRole) {
            $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
                ->where("role_has_permissions.role_id", $userRole->id)
                ->where('permissions.group_id', $PermissionGroupId->id)
                ->get();
            array_push($roles_arr,$rolePermissions);
        }

        $data_arr = array();

        foreach($roles_arr as $role_arr){
            foreach($role_arr as $rolePermission){
                $name = $rolePermission->name;
                array_push($data_arr,$name);
            }

        }

        $data_arr_res = array_unique($data_arr);

        $this->data=['status_code'=>200,
            'data'=>['permission'=>$data_arr_res]
        ];

        $this->setResponse($this->data);
        return $this->getResponse();
    }

    public function getConfiguration($id)
    {
        $user = User::where('users.m_login_token', '=', $id)->first();

        if(!isset($user)){
            $this->data=['status_code'=>401,
                "error"=>["Invalid Login Token"],
                'data'=>[]
            ];

            $this->setResponse($this->data);
            return $this->getResponse();
        }

        $activeSession = ConvocationSession::where('status',1)->first();
        $ConvocationConfig = ConvocationConfig::where('session_id', $activeSession->id)->first();
        $this->data=['status_code'=>200,
            "success"=>["success"],
            'data'=>[
                'min_position' => 0,
                'max_position' => $ConvocationConfig->value
            ]
        ];
        $this->setResponse($this->data);
        return $this->getResponse();


    }


}
