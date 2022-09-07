<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venue;
use App\Models\Campus;
use App\Models\ConvocationSession;
use Auth;
use App\User;

class VenueController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:venue-list', ['only' => ['index']]);
        $this->middleware('permission:venue-create', ['only' => ['create','store']]);
        $this->middleware('permission:venue-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:venue-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.venue.index');
    }
    public function getVenue(Request $request){
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
        $totalRecords = Venue::with('campus')->select('count(*) as allcount')->count();
        $totalRecordswithFilter = Venue::with('campus')->select('count(*) as allcount')
        ->where('title', 'like', '%' .$searchValue . '%')->orWhere('description', 'like', '%' .$searchValue . '%')
        ->orWhere('time', 'like', '%' .$searchValue . '%')->orWhere('date', 'like', '%' .$searchValue . '%')->count();
        // Fetch records
        $records = Venue::with('campus')->orderBy($columnName,$columnSortOrder)
            ->where('venues.title', 'like', '%' .$searchValue . '%')
            ->orWhere('venues.description', 'like', '%' .$searchValue . '%')
            ->orWhere('venues.time', 'like', '%' .$searchValue . '%')
            ->orWhere('venues.date', 'like', '%' .$searchValue . '%')
            ->select('venues.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $title = $record->title;
            $description = $record->description;
            $venutime = $record->time;
            if(isset($record->campus->name))
            {
                $campus = $record->campus->name;
            }else{
                $campus = '';
            }
            $date = date('d M Y', strtotime($record->date));
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();

            $data_arr[] = array(
                "id" => $id,
                "title" => $title,
                "description" => $description,
                "time" => $venutime,
                "date" => $date,
                "campus" => $campus,
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
        $campuses = Campus::get();
        return view('admin.venue.create', compact('campuses'));
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
            'title'=>'required|unique:venues,title',
            'description'=>'required',
            'time'=>'required',
            'date'=>'required',
        ]);
        
        $activeSession = ConvocationSession::where('status',1)->first();
        $venue = new Venue();
        $venue->title = $request->title;
        $venue->description = $request->description;
        $venue->time = $request->time;
        $venue->date = date('Y-m-d H:i:s',strtotime($request->date));
        $venue->address = $request->address;
        $venue->session_id = $activeSession->id;
        $venue->campus_id = $request->campus_id;
        $venue->created_by = $user_id;
        $venue->updated_by = $user_id;
        $venue->save();
        return redirect()->route('venue.index')->with('message','Session created successfully');
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
        $campuses = Campus::get();
        $venue = Venue::find($id);
        return view('admin.venue.edit', compact('venue','campuses'));
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
            'title'=>'required|unique:venues,title,'.$id,
            'description'=>'required',
            'time'=>'required',
            'date'=>'required',
        ]);
        $activeSession = ConvocationSession::where('status',1)->first();
        $venue =  Venue::find($id);
        $venue->title = $request->title;
        $venue->description = $request->description;
        $venue->time = $request->time;
        $venue->date = date('Y-m-d H:i:s',strtotime($request->date));
        $venue->address = $request->address;
        $venue->campus_id = $request->campus_id;
        $venue->session_id = $activeSession->id;
        if(!empty($venue->created_by)){
            $venue->created_by = $venue->created_by;
        }else{
            $i = array_except($venue,array('created_by'));
        }
        $venue->updated_by = $user_id;
        $venue->save();
        return redirect()->route('venue.index')->with('message','Venue updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Venue::find($id)->delete();
        return redirect()->route('venue.index')
            ->with('message','venue deleted successfully');
    }
}
