<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Medal;
use App\User;

class MedalsController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:medal-list', ['only' => ['index']]);
        $this->middleware('permission:medal-create', ['only' => ['create','store']]);
        $this->middleware('permission:medal-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:medal-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.medal.index');
    }

    public function getMedals(Request $request){
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
        $totalRecords = Medal::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Medal::select('count(*) as allcount')
        ->where('title', 'like', '%' .$searchValue . '%')
        ->orWhere('description', 'like', '%' .$searchValue . '%')
        ->count();
        // Fetch records
        $records = Medal::orderBy($columnName,$columnSortOrder)
            ->where('medals.title', 'like', '%' .$searchValue . '%')
            ->orWhere('medals.description', 'like', '%' .$searchValue . '%')
            ->select('medals.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $title = $record->title;
            $description = $record->description;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();

            $data_arr[] = array(
                "id" => $id,
                "title" => $title,
                "description" => $description,
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
        return view('admin.medal.create');
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
            'title' => 'required|unique:medals,title',
        ]);

        $medals = new Medal();
        $medals->title = $request->title;
        $medals->description = $request->description;
        $medals->created_by = $user_id;
        $medals->updated_by = $user_id;
        $medals->save();
        return redirect()->route('medals.index')->with('message','Medal created successfully');
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
    public function edit(Medal $medalsData,$id)
    {
        $medalsData = Medal::findOrFail($id);
        return view('admin.medal.edit',compact('medalsData'));
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
            'title' => 'required|unique:medals,title,'.$id,
        ]);
        $i = $request->all();
        $i['updated_by']=Auth::user()->id;
        $updateMedals = Medal::find($id);
        $updateMedals->update($i);
        return redirect()->route('medals.index')
            ->with('message','Medal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medal::find($id)->delete();
        return redirect()->route('medals.index')
            ->with('message','Medal deleted successfully');
    }
}
