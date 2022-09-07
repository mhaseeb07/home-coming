<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DocType;
use App\User;

class DocTypeController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:doc-type-list', ['only' => ['index']]);
        $this->middleware('permission:doc-type-create', ['only' => ['create','store']]);
        $this->middleware('permission:doc-type-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:doc-type-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.doc_types.index');
    }

    public function getDocTypes(Request $request){
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
        $totalRecords = DocType::select('count(*) as allcount')->count();
        $totalRecordswithFilter = DocType::select('count(*) as allcount')
        ->where('title', 'like', '%' .$searchValue . '%')
        ->orWhere('description', 'like', '%' .$searchValue . '%')
        ->count();
        // Fetch records
        $records = DocType::orderBy($columnName,$columnSortOrder)
            ->where('doc_types.title', 'like', '%' .$searchValue . '%')
            ->orWhere('doc_types.description', 'like', '%' .$searchValue . '%')
            ->select('doc_types.*')
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
        return view('admin.doc_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $user_id = Auth::user()->id;
        $docType = new DocType();
        $docType->title = $request->title;
        $docType->description = $request->description;
        $docType->created_by = $user_id;
        $docType->updated_by = $user_id;
        $docType->save();
        return redirect()->route('doc-types.index')->with('message','DocType created successfully');
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
    public function edit(DocType $docTypes,$id)
    {
        $docTypes = DocType::findOrFail($id);
        return view('admin.doc_types.edit',compact('docTypes'));
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
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $i = $request->all();
        $updateDocTypes = DocType::find($id);
        $user_id = Auth::user()->id;
        if(!empty($updateDocTypes['created_by'])){
            $updateDocTypes['created_by'] = $updateDocTypes['created_by'];
        }else{
            $updateDocTypes = array_except($updateDocTypes,array('created_by'));
        }
        $updateDocTypes->updated_by = $user_id;
        $updateDocTypes->update($i);
        return redirect()->route('doc-types.index')
            ->with('message','DocType updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DocType::find($id)->delete();
        return redirect()->route('doc-types.index')
            ->with('message','DocType deleted successfully');
    }
}
