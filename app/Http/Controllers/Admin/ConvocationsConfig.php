<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConvocationConfig;
use App\Models\ConvocationSession;
use App\Models\MedalList;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ConvocationsConfig extends Controller
{
    function __construct()
    {
        $this->middleware('permission:convocation-config-list', ['only' => ['index']]);
        $this->middleware('permission:convocation-config-create', ['only' => ['create','store']]);
        $this->middleware('permission:convocation-config-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:convocation-config-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.convocation_config.index');
    }
    public function conConfig(Request $request){
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

        $totalRecords = ConvocationConfig::with('SCate')
            ->select('count(*) as allcount')
            ->where(function($q) use($searchValue){
                $q->where('convocation_configs.key', 'like', '%' .$searchValue . '%');
            })
            ->orderBy('id', 'DESC')
            ->count();


        $totalRecordswithFilter = ConvocationConfig::with('SCate')
            ->select('count(*) as allcount')
            ->where(function($q) use($searchValue){
                $q->where('convocation_configs.key', 'like', '%' .$searchValue . '%');
            })
            ->orderBy('id', 'DESC')
            ->count();

        // Fetch records
        $records = ConvocationConfig::with('SCate')
            ->orderBy($columnName,$columnSortOrder)
            ->where(function($q) use($searchValue){
                $q->where('convocation_configs.key', 'like', '%' .$searchValue . '%');
            })
            ->select('convocation_configs.*')
            ->orderBy('id', 'DESC')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $key = $record->key;
            $value = $record->value;
            $description = $record->description;
            $SCate = $record['SCate']['title'];
            $data_arr[] = array(
                "id" => $id,
                "key" => $key,
                "value" => $value,
                "SCate" => $SCate,
                "description" => $description,
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
        $ConSession = ConvocationSession::get();
         return view('admin.convocation_config.create' , compact('ConSession'));
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
            'key' => 'required',
            'value' => 'required',
            'description' => 'required',
            'session_id' => 'unique:convocation_configs',
        ]);
        $session = new ConvocationConfig();
        $session->key = $request->key;
        $session->value = $request->value;
        $session->description = $request->description;
        $session->session_id = $request->session_id;
        $session->save();
        return redirect()->route('con-config.index')->with('message', 'Medal List created successfully');

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
        $ConSession = ConvocationSession::get();
        $CConfig = ConvocationConfig::find($id);
        return view('admin.convocation_config.edit' , compact('CConfig','ConSession'));
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

        $Data_Config = ConvocationConfig::findOrFail($id);
        $Update_Config = $request->all();
        $request->validate([
            'key' => 'required',
            'value' => 'required',
            'description' => 'required',
            'session_id' => 'unique:convocation_configs,session_id,' . $id,
        ]);
        $Update = $Data_Config->update($Update_Config);
        if ($Update) {
            return redirect(route('con-config.index'))->with('message', 'Config ,Record Updated Successfully');
        } else {
            return redirect(route('con-config.index'))->with('message', 'There is something wrong Please try again.');
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
        $delete = ConvocationConfig::find($id)->delete();
        if ($delete){
            return redirect()->route('con-config.index')
                ->with('message','Config deleted successfully');
        }
        else{
            return redirect()->back()->with('warning','Config List Can not be deleted');
        }
    }
}
