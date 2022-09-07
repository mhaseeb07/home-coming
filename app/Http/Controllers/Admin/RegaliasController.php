<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ConvocationSession;
use App\Models\Regalia;
use Auth;

class RegaliasController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:regalia-list', ['only' => ['index']]);
        $this->middleware('permission:regalia-create', ['only' => ['create','store']]);
        $this->middleware('permission:regalia-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:regalia-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.regalias.index');
    }
    public function getRegalia(Request $request){
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
        $totalRecords = Regalia::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Regalia::select('count(*) as allcount')
        ->where('name', 'like', '%' .$searchValue . '%')
        ->orWhere('amount', 'like', '%' .$searchValue . '%')->count();
        // Fetch records
        $records = Regalia::with('session')->orderBy($columnName,$columnSortOrder)
            ->where('regalias.name', 'like', '%' .$searchValue . '%')
            ->orWhere('regalias.amount', 'like', '%' .$searchValue . '%')
            ->orWhere('regalias.description', 'like', '%' .$searchValue . '%')
            ->select('regalias.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $amount = $record->amount;
            $session = $record->session->title;

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "amount" => $amount,
                "session" => $session,
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
        return view('admin.regalias.create');
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
            'name' => 'required',
            'amount' => 'integer|required',
        ]);
        $activeSession = ConvocationSession::where('status',1)->first();
        $input = $request->all();
        $input['session_id'] = $activeSession->id;
        $input['created_by'] = Auth::user()->id;
        $input['updated_by'] = Auth::user()->id;
        $regalias = Regalia::create($input);

        return redirect()->route('regalias-list.index')
            ->with('message','Regalia created successfully');
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
        $regaliasEdit = Regalia::with('session')->find($id);
        return view('admin.regalias.edit',compact('regaliasEdit'));
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
        $regaliasUpdate = Regalia::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'amount' => 'integer|required',
        ]);
        $activeSession = ConvocationSession::where('status',1)->first();
        $input = $request->all();
        $input['session_id'] = $activeSession->id;
        $input['updated_by'] = Auth::user()->id;
        $regaliasUpdate->update($input);
        return redirect()->route('regalias-list.index')
            ->with('message','Regalia updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Regalia::find($id)->delete();
        return redirect()->route('regalias-list.index')
            ->with('message','Regalia deleted successfully');
    }
}
