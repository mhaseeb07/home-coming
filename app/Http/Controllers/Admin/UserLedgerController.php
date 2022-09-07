<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserLedger;
use App\Models\Regalia;
use App\Models\ConvocationSession;
use Illuminate\Support\Arr;
use App\User;
use Auth;

class UserLedgerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:user-ledger-list', ['only' => ['index']]);
        $this->middleware('permission:user-ledger-create', ['only' => ['create','store']]);
        $this->middleware('permission:user-ledger-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-ledger-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user_ledger.index');
    }

    public function getUserLedgers(Request $request){
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

        // Total records
        $totalRecords = UserLedger::with('user')->select('count(*) as allcount')->count();
        $totalRecordswithFilter = UserLedger::with('user')->select('count(*) as allcount')
        ->where('payment', 'like', '%' .$searchValue . '%')
        ->orWhere('description', 'like', '%' .$searchValue . '%')
        ->count();
        // Fetch records
        $records = UserLedger::with('user')->orderBy($columnName,$columnSortOrder)
            ->orWhere('user_ledgers.payment', 'like', '%' .$searchValue . '%')
            ->orWhere('user_ledgers.description', 'like', '%' .$searchValue . '%')
            ->select('user_ledgers.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $payment = $record->payment;
            $description = $record->description;
            $user = $record->user->name;
            $regalia_type = $record->regalia->name;


            $data_arr[] = array(
                "id" => $id,
                "payment" => $payment,
                "description" => $description,
                "name" => $user,
                "regalia_type" => $regalia_type,
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
        $regalias = Regalia::get();
        $activeSession = ConvocationSession::where('status',1)->first();
        $users = User::whereHas('eligible',function ($q) use ($activeSession){
            $q->where('session_id', isset($activeSession->id) ? $activeSession->id : '');
         })->where('users.role_status','=',0)->get();
        return view('admin.user_ledger.create',compact('users','regalias'));
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
            'payment' => 'integer|required',
            'user_id' => 'required',
            'regalia_id' => 'required',
        ]);
        //Amount Check
        $regalia=Regalia::where('id',$request->regalia_id)->first();
        $getAmount=$regalia->amount;
        $payment = $request->payment;
        $returnPayment=$getAmount-$payment;
        if($payment > $getAmount){
            return redirect()->route('users-ledger-list.create')
                ->with('warning','Returning Amount Should not be greater than '.$getAmount);
        }
        $description=$request->description;
        $regaliaId=$request->regalia_id;
        $user=$request->user_id;
        $ledger = UserLedger::where('regalia_id',$regaliaId)->where('user_id',$user)->first();
        if($ledger){
            return redirect()->route('users-ledger-list.create')
                ->with('warning',$regalia->name.' already returned');
        }
        $ledger = new UserLedger();
        $ledger->payment=$returnPayment;
        $ledger->description=$description;
        $ledger->regalia_id=$regaliaId;
        $ledger->user_id=$user;
        $ledger->created_by=Auth::user()->id;
        $ledger->updated_by=Auth::user()->id;
        // $getRegalias=UserLedger::whereDoesntHave('regalia')->where("user_id",$request->user_id)->get([$request->regalia_id,'id']);
        $data = $ledger->save();
        return redirect()->route('users-ledger-list.index')
            ->with('message','Users Ledger List created successfully');
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
        $userLedgerEdit = UserLedger::find($id);
        $users = User::where('users.role_status','=',0)->where('id',$userLedgerEdit->user_id)->get();
        $regalias = Regalia::where('id',$userLedgerEdit->regalia_id)->get();
        return view('admin.user_ledger.edit',compact('userLedgerEdit','users','regalias'));
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
        $ledger = UserLedger::find($id);
        $this->validate($request, [
            'payment' => 'integer|required',
            'user_id' => 'required',
            'regalia_id' => 'required',
        ]);
        //Amount Check
        $regalia=Regalia::where('id',$request->regalia_id)->first();
        $getAmount=$ledger->payment;
        $payment = $request->payment;
        $returnPayment=$getAmount-$payment;
        if($payment > $getAmount){
            return redirect()->back()
                ->with('warning','Returning Amount Should not be greater than '.$getAmount);
        }
        $description=$request->description;
        $regaliaId=$request->regalia_id;
        $user=$request->user_id;
        $existingLedger = UserLedger::where('regalia_id',$regaliaId)->where('user_id',$user)->first();
        if($existingLedger && $existingLedger->id != $ledger->id){
            return redirect()->back()
                ->with('warning',$regalia->name.' already returned');
        }
        $ledger->payment=$returnPayment;
        $ledger->description=$description;
        $ledger->regalia_id=$regaliaId;
        $ledger->user_id=$user;
        $ledger->updated_by=Auth::user()->id;
        // $getRegalias=UserLedger::whereDoesntHave('regalia')->where("user_id",$request->user_id)->get([$request->regalia_id,'id']);
        $data = $ledger->save();
        return redirect()->route('users-ledger-list.index')
            ->with('message','Users Ledger List created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserLedger::find($id)->delete();
        return redirect()->route('users-ledger-list.index')
            ->with('message','User Ledger deleted successfully');
    }

    public function fetchAllUsers(Request $request)
    {
        $records = User::where('users.email','not like','%web@tuf.edu.pk%')
        ->where('users.role_status','!=',0)->get();
        echo json_encode($records);
        exit;
    }
}
