<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\EligibleType;
use App\User;

class EligibleTypesController extends Controller
{   
    function __construct()
    {
        $this->middleware('permission:eligible-type-list', ['only' => ['index']]);
        $this->middleware('permission:eligible-type-create', ['only' => ['create','store']]);
        $this->middleware('permission:eligible-type-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:eligible-type-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eligible_types.index');
    }

    public function getEligibleTypes(Request $request){
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
        $totalRecords = EligibleType::select('count(*) as allcount')->count();
        $totalRecordswithFilter = EligibleType::select('count(*) as allcount')
        ->where('title', 'like', '%' .$searchValue . '%')->count();
        // Fetch records
        $records = EligibleType::orderBy($columnName,$columnSortOrder)
            ->where('eligible_types.title', 'like', '%' .$searchValue . '%')
            ->select('eligible_types.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $title = $record->title;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();

            $data_arr[] = array(
                "id" => $id,
                "title" => $title,
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
        $eligibleTypes = EligibleType::get();
        return view('admin.eligible_types.create', compact('eligibleTypes'));
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
            'title'=>'required|unique:eligible_types,title',
        ]);

        $eligibleTypes = new EligibleType();
        $eligibleTypes->title = $request->title;
        $eligibleTypes->created_by = $user_id;
        $eligibleTypes->updated_by = $user_id;
        $eligibleTypes->save();
        return redirect()->route('eligible-types.index')->with('message','Eligible Type created successfully');
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
        $eligibleTypesEdit = EligibleType::find($id);
        return view('admin.eligible_types.edit', compact('eligibleTypesEdit'));
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
        $user_id = Auth::user()->id;
        $this->validate($request,[
            'title' => 'required|unique:eligible_types,title,'.$id,
        ]);
        $typesUpdate =  EligibleType::find($id);
        $typesUpdate->title = $request->title;
        $typesUpdate->created_by = $user_id;
        $typesUpdate->updated_by = $user_id;
        $typesUpdate->save();

        return redirect()->route('eligible-types.index')
            ->with('message','Eligible Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EligibleType::find($id)->delete();
        return redirect()->route('eligible-types.index')
            ->with('message','Eligible Type deleted successfully');
    }
}
