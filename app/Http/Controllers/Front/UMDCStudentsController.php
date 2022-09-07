<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eligibles;
use App\Models\EligibleType;
use App\Models\Medal;
use App\Models\ConvocationSession;

class UMDCStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('front.lists.UMDC');
    }

    public function getUMDCStudents(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $deleted_at =  $request->get('deleted_at');

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value
        // Active Session
        $activeSession = ConvocationSession::where('status',1)->first();
        // Total records
        $totalRecords = Eligibles::where('session_id', $activeSession->id)->select('count(*) as allcount')->count();
        // $totalRecordswithFilter = Eligibles::select('count(*) as allcount')
        // ->where('name', 'like', '%' .$searchValue . '%')
        // ->orwhere('reg_no', 'like', '%' .$searchValue . '%')
        // ->orwhere('cnic', 'like', '%' .$searchValue . '%')
        // ->orwhere('degree_name', 'like', '%' .$searchValue . '%')
        // ->orwhere('seat_id', 'like', '%' .$searchValue . '%')
        // ->orwhere('session_id', 'like', '%' .$searchValue . '%')
        // ->count();

        $totalRecordswithFilter = Eligibles::with('session')
        ->where('eligible_type_id','=',2)
        ->where('status','=',1)
        ->where('session_id', $activeSession->id)
        ->where(function ($q) use ($searchValue){
          $q->where('eligibles.name', 'like', '%' .$searchValue . '%')
        ->orWhere('eligibles.reg_no', 'like', '%' .$searchValue . '%')
        ->orWhere('eligibles.degree_name', 'like', '%' .$searchValue . '%');
        })
        ->select('count(*) as allcount')
        ->count();

        // Fetch records
        // $records = Eligibles::with('medal')
        // ->where('eligible_type_id','=',1)
        // ->where('eligibles.name', 'like', '%' .$searchValue . '%')
        // ->orWhere('eligibles.reg_no', 'like', '%' .$searchValue . '%')
        // ->orWhere('eligibles.email', 'like', '%' .$searchValue . '%')
        // ->orWhere('eligibles.cnic', 'like', '%' .$searchValue . '%')
        // ->select('eligibles.*')
        // ->skip($start)
        // ->take($rowperpage)
        // ->get();


        $records = Eligibles::with('session')
        ->where('eligible_type_id','=',2)
        ->where('status','=',1)
        ->where('session_id', $activeSession->id)
        ->where(function ($q) use ($searchValue){
          $q->where('eligibles.name', 'like', '%' .$searchValue . '%')
        ->orWhere('eligibles.reg_no', 'like', '%' .$searchValue . '%')
        ->orWhere('eligibles.email', 'like', '%' .$searchValue . '%');
        })
        ->select('eligibles.*')
        ->orderBy($columnName,$columnSortOrder)
        ->skip($start)
        ->take($rowperpage)
        ->get();
        

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $degree_name = $record->degree_name;
            $passout_session = $record->passout_session;
            $reg_no=$record->reg_no;
            $name=$record->name;

            $data_arr[] = array(
                "id" => $id,
                "degree_name" => $degree_name,
                "passout_session" => $passout_session,
                "reg_no" => $reg_no,
                "name" => $name,

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
        //
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
        //
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
