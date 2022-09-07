<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eligibles;
use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Str;
use App\Models\ConvocationSession;
use DB;

class UserEligibleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:candidate-registration-list', ['only' => ['index']]);
        $this->middleware('permission:candidate-registration-create', ['only' => ['create','store']]);
        $this->middleware('permission:candidate-registration-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:candidate-registration-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user_eligible.index');
    }
    public function getUsers(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        $activeSession = ConvocationSession::where('status',1)->first();
        // Total records
        $totalRecords = User::whereHas('eligible',function ($q) use ($activeSession){
            $q->where('session_id', isset($activeSession->id) ? $activeSession->id : '');
         })->where('users.role_status','=',0)->select('count(*) as allcount')->count();
        $totalRecordswithFilter = User::whereHas('eligible',function ($q) use ($activeSession){
            $q->where('session_id', isset($activeSession->id) ? $activeSession->id : '');
         })->select('count(*) as allcount')
            ->where('users.role_status','=',0)
            ->where(function ($q) use ($searchValue){
                $q->where('users.name', 'like', '%' .$searchValue . '%')
                    ->orWhere('users.email', 'like', '%' .$searchValue . '%')
                    ->orWhere('users.created_by', 'like', '%' .$searchValue . '%')
                    ->orWhere('users.reg_no', 'like', '%' .$searchValue . '%');
            })->count();
        // Fetch records
        $records = User::whereHas('eligible',function ($q) use ($activeSession){
            $q->where('session_id', isset($activeSession->id) ? $activeSession->id : '');
         })->orderBy($columnName,$columnSortOrder)
            ->where('users.email','not like','%web@tuf.edu.pk%')
            ->where('users.role_status','=',0)
            ->where(function ($q) use ($searchValue){
              $q->where('users.name', 'like', '%' .$searchValue . '%')
                ->orWhere('users.email', 'like', '%' .$searchValue . '%')
                ->orWhere('users.created_by', 'like', '%' .$searchValue . '%')
                ->orWhere('users.reg_no', 'like', '%' .$searchValue . '%');
            })
            ->select('users.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();
        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $email = $record->email;
            $reg_no = $record->reg_no;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();
            $vaccination_status = $record->eligible[0]->vaccination_status;
            $voucher_image = $record->eligible[0]->voucher_image;
            $vaccination_certificate = $record->eligible[0]->vaccination_certificate;

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "email" => $email,
                "reg_no" => $reg_no,
                "created_by" => $created_by,
                "updated_by" => $updated_by,
                "vaccination_status" => $vaccination_status,
                "voucher_image" => $voucher_image,
                "vaccination_certificate" => $vaccination_certificate,
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_eligible.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'reg_no' => ['required', 'string', 'max:255','unique:users','exists:eligibles'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $eligible = Eligibles::where('reg_no',$request['reg_no'])->first();
        if(!empty($request['email_verified_at'])){
            $request['email_verified_at'] = $request['email_verified_at'];
        }else{
            $request = array_except($request,array('email_verified_at'));
        }
        $user_id = Auth::user()->id;
        $currentDate = Carbon::now();
        if($eligible){
            $user =  User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'reg_no' => $request['reg_no'],
                'password' => Hash::make($request['password']),
            ]);
            if ($user){
                $user->update([
                    'created_by'=>$user_id,
                    'updated_by'=>$user_id,
                    'email_verified_at' => $request['email_verified_at'],
                ]);
                $eligible->update([
                   'user_id'=>$user->id,
                   'pass_id'=>time().rand(0,9999)
                ]);
            }
            return redirect()->route('candidate_registration.index')
            ->with('message','Eligible created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user_eligible.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userEligibles = User::where('id',$id)->first();
        if(!empty($userEligibles)){
            $eligible = Eligibles::where('reg_no',$request['reg_no'])->where('user_id',$id)->first();
            if($eligible){
                $input = $request->all();
                if(!empty($input['password'])){
                    $input['password'] = Hash::make($input['password']);
                }else{
                    $input = array_except($input,array('password'));
                }
                if(!empty($input['created_by'])){
                    $input['created_by'] = $input['created_by'];
                }else{
                    $input = array_except($input,array('created_by'));
                }
                if(!empty($input['email_verified_at'])){
                    $input['email_verified_at'] = $input['email_verified_at'];
                }else{
                    $input = array_except($input,array('email_verified_at'));
                }
                $input['updated_by'] = Auth::user()->id;
                $user = User::find($id);
                $user->update($input);
                return redirect()->route('candidate_registration.index')
                    ->with('message','User updated successfully');
            }else{
                $this->validate($request, [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255'],
                    'reg_no' => ['required', 'string', 'max:255','unique:users','exists:eligibles'],
                ]);
                $input = $request->all();
                if(!empty($input['password'])){
                    $input['password'] = Hash::make($input['password']);
                }else{
                    $input = array_except($input,array('password'));
                }
                if(!empty($input['created_by'])){
                    $input['created_by'] = $input['created_by'];
                }else{
                    $input = array_except($input,array('created_by'));
                }
                if(!empty($input['email_verified_at'])){
                    $input['email_verified_at'] = $input['email_verified_at'];
                }else{
                    $input = array_except($input,array('email_verified_at'));
                }
                $input['updated_by'] = Auth::user()->id;
                $user = User::find($id);
                $user->update($input);
                return redirect()->route('candidate_registration.index')
                    ->with('message','User updated successfully');
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('candidate_registration.index')
            ->with('success','User deleted successfully');
    }
}
