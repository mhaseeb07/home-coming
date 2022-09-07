<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eligibles;
use App\Models\ConvocationSession;
use App\User;
use File;
use Auth;
use Illuminate\Support\Arr;

class AccountController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:eligible-voucher-list', ['only' => ['index']]);
        $this->middleware('permission:eligible-voucher-edit', ['only' => ['edit','update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.account.index');
    }

    public function getAccount(Request $request){
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
        $totalRecords = Eligibles::select('count(*) as allcount')->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')->count();
        $totalRecordswithFilter = Eligibles::select('count(*) as allcount')
        ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
        ->where(function ($q) use ($searchValue){
          $q->where('name', 'like', '%' .$searchValue . '%')->orWhere('reg_no', 'like', '%' .$searchValue . '%')
            ->orWhere('eligibles.amount', 'like', '%' .$searchValue . '%')
            ->orWhere('eligibles.remark', 'like', '%' .$searchValue . '%');
        })->count();
        // Fetch records
        $records = Eligibles::orderBy($columnName,$columnSortOrder)
        ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
        ->where(function ($q) use ($searchValue){
          $q->where('eligibles.name', 'like', '%' .$searchValue . '%')
            ->orWhere('eligibles.reg_no', 'like', '%' .$searchValue . '%')
            ->orWhere('eligibles.amount', 'like', '%' .$searchValue . '%')
            ->orWhere('eligibles.remark', 'like', '%' .$searchValue . '%');
        })
            ->select('eligibles.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $reg_no = $record->reg_no;
            $amount = $record->amount;
            $voucher_image = $record->voucher_image;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();
            $remark = $record->remark;

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "reg_no" => $reg_no,
                "amount" => $amount,
                "voucher_image" => $voucher_image,
                "remark" => $remark,
                "created_by" => $created_by,
                "updated_by" => $updated_by,
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
    public function getAccountEligible()
    {
        return view('admin.account.eligibles');
    }
    public function getAccountEligibleUser(Request $request){
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
            $vaccination_status = $record->eligible[0]->vaccination_status;
            $eligible_id = $record->eligible[0]->id;
            $voucher_image = $record->eligible[0]->voucher_image;
            $amount = $record->eligible[0]->amount;
            $remark = $record->eligible[0]->remark;

            $data_arr[] = array(
                "id" => $id,
                "eligible_id" => $eligible_id,
                "name" => $name,
                "email" => $email,
                "reg_no" => $reg_no,
                "vaccination_status" => $vaccination_status,
                "voucher_image" => $voucher_image,
                "amount" => $amount,
                "remark" => $remark,
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
    public function approveFee($id){
        $user = User::findOrFail($id);
        $eligible=$user->eligible[0];
        if($eligible){
            $eligible->update([
                'amount'=>2500,
                'updated_by'=>Auth::user()->id
            ]);
            return redirect(route('getAccountEligible'))->with('message','Approved Successfully');
        }
    }
    public function rejectFee($id){
        $user = User::findOrFail($id);
        $eligible=$user->eligible[0];
        if($eligible){
            $eligible->update([
                'amount'=>0,
                'updated_by'=>Auth::user()->id
            ]);
            return redirect(route('getAccountEligible'))->with('message','Rejected Successfully');
        }
    }
    public function approveEligibleFee($id){
        $eligible = Eligibles::findOrFail($id);
        if($eligible){
            $eligible->update([
                'amount'=>2500,
                'updated_by'=>Auth::user()->id
            ]);
            return redirect(route('account.index'))->with('message','Approved Successfully');
        }
    }
    public function rejectEligibleFee($id){
        $eligible = Eligibles::findOrFail($id);
        if($eligible){
            $eligible->update([
                'amount'=>0,
                'updated_by'=>Auth::user()->id
            ]);
            return redirect(route('account.index'))->with('message','Rejected Successfully');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $eligible = Eligibles::find($id);
        return view('admin.account.edit', compact('eligible'));
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
        $eligible = Eligibles::findOrFail($id);
        $input = $request->all();
        $this->validate($request, [
            'name' => 'required',
            'amount' => 'required',
            'reg_no' => 'required',
            'voucher_image' => 'mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        if ($request->hasFile('voucher_image')) {
            if(isset($eligible) && $eligible->voucher_image){
                $preThumbnail = public_path('voucher/'.$eligible->voucher_image);
                if (File::exists($preThumbnail)) { // unlink or remove previous image from folder
                    unlink($preThumbnail);
                }
            }
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->voucher_image->getClientOriginalExtension();
            $request->voucher_image->move(public_path('voucher/').date('Y'), $getImage);
            $voucherImage = $getImage;
        }
        else{
                $voucherImage='';
            }
        if(!empty($input['voucher_image'])){
            $input['voucher_image'] = $voucherImage;
        }else{
            $input = Arr::except($input,array('voucher_image'));
        }
        $user_id = Auth::user()->id;
        $input['updated_by'] = $user_id;
        $eligible->update($input);
        return redirect()->route('account.index')
            ->with('message','Eligible Account updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
