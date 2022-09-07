<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConvocationSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ConvocationSessionController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:session-list', ['only' => ['index']]);
        $this->middleware('permission:session-create', ['only' => ['create','store']]);
        $this->middleware('permission:session-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:session-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.convocation_session.index');
    }
    public function getSession(Request $request){
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
        $totalRecords = ConvocationSession::select('count(*) as allcount')->count();
        $totalRecordswithFilter = ConvocationSession::select('count(*) as allcount')
        ->where('title', 'like', '%' .$searchValue . '%')->orWhere('session_year', 'like', '%' .$searchValue . '%')
        ->orWhere('description', 'like', '%' .$searchValue . '%')->count();
        // Fetch records
        $records = ConvocationSession::orderBy($columnName,$columnSortOrder)
            ->where('convocation_sessions.title', 'like', '%' .$searchValue . '%')
            ->orWhere('convocation_sessions.description', 'like', '%' .$searchValue . '%')
            ->orWhere('convocation_sessions.session_year', 'like', '%' .$searchValue . '%')
            ->select('convocation_sessions.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $title = $record->title;
            $session_year = $record->session_year;
            $description = $record->description;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();
            if($record->status == '0'){
                $status = 'Reject';
            }
            if($record->status == '1'){
                $status = 'Active';
            }

            $data_arr[] = array(
                "id" => $id,
                "title" => $title,
                "session_year" => $session_year,
                "description" => $description,
                "status" => $status,
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.convocation_session.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $activeSession = ConvocationSession::where('status',1)->first();
        if (isset($activeSession->status) && $activeSession->status == $request->status){
            return redirect()->back()->with('warning','De Activate '.$activeSession->title.' First');
        }
        else{
            $user_id = Auth::user()->id;
            $this->validate($request,[
                'title'=>'required|unique:convocation_sessions',
                'status'=>'required',
                'description'=>'required',
                'session_year'=>'required',
            ]);

            $session = new ConvocationSession();
            $session->title = $request->title;
            $session->status = $request->status;
            $session->description = $request->description;
            $session->session_year = $request->session_year;
            $session->created_by = $user_id;
            $session->updated_by = $user_id;
            $session->save();
            return redirect()->route('session.index')->with('message','Session created successfully');
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
        $session = ConvocationSession::find($id);
        return view('admin.convocation_session.edit',compact('session'));
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
        $activeSession = ConvocationSession::where('status',1)->first();
        if (isset($activeSession->status) && $activeSession->status == $request->status){
            return redirect()->back()->with('warning','De Activate '.$activeSession->title.' First');
        }
        $user_id = Auth::user()->id;
        $this->validate($request,[
            'title'=>'required|unique:convocation_sessions,title,'.$id,
            'status'=>'required',
            'description'=>'required',
            'session_year'=>'required',
        ]);
        $session =  ConvocationSession::find($id);
        $session->title = $request->title;
        $session->status = $request->status;
        $session->description = $request->description;
        $session->session_year = $request->session_year;
        $session->updated_by = $user_id;
        $session->save();
        return redirect()->route('session.index')->with('message','Session updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ConvocationSession::find($id)->where('status','!=',1)->delete();
        if ($delete){
            return redirect()->route('session.index')
                ->with('message','Session deleted successfully');
        }
        else{
            return redirect()->back()->with('warning','Active Session Can not be deleted');
        }

    }
}
