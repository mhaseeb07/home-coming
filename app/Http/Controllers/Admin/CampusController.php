<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Campus;
use App\User;

class CampusController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:campus-list', ['only' => ['index']]);
        $this->middleware('permission:campus-create', ['only' => ['create','store']]);
        $this->middleware('permission:campus-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:campus-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.campus.index');
    }

    public function getCampuses(Request $request){
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
        $totalRecords = Campus::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Campus::select('count(*) as allcount')
        ->where('name', 'like', '%' .$searchValue . '%')
        ->orWhere('location', 'like', '%' .$searchValue . '%')
        ->count();
        // Fetch records
        $records = Campus::orderBy($columnName,$columnSortOrder)
            ->where('campuses.name', 'like', '%' .$searchValue . '%')
            ->orWhere('campuses.location', 'like', '%' .$searchValue . '%')
            ->select('campuses.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $location = $record->location;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "location" => $location,
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
        return view('admin.campus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $this->validate($request,[
            'name'=>'required|unique:campuses,name',
            'location'=>'required',
        ]);

        $campuses = new Campus();
        $campuses->name = $request->name;
        $campuses->location = $request->location;
        $campuses->created_by = $user_id;
        $campuses->updated_by = $user_id;
        $campuses->save();
        return redirect()->route('campuses.index')->with('message','Campus created successfully');
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
    public function edit($id,Campus $campusData)
    {
        $campusData = Campus::findOrFail($id);
        return view('admin.campus.edit',compact('campusData'));
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
        $this->validate($request, [
            'name' => 'required|unique:campuses,name,'.$id,
            'location' => 'required',
        ]);
        $i = $request->all();
        
        if(!empty($i['created_by'])){
            $i['created_by'] = $i['created_by'];
        }else{
            $i = array_except($i,array('created_by'));
        }
        $i['updated_by']=Auth::user()->id;
        $updateCampuses = Campus::find($id);
        $updateCampuses->update($i);
        return redirect()->route('campuses.index')
            ->with('message','Campuses updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Campus::find($id)->delete();
        return redirect()->route('campuses.index')
            ->with('message','Campus deleted successfully');
    }
}
