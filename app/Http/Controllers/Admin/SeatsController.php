<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Venue;
use App\User;


class SeatsController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:seat-list', ['only' => ['index']]);
        $this->middleware('permission:seat-create', ['only' => ['create','store']]);
        $this->middleware('permission:seat-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:seat-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.seats.index');
    }

    public function getSeats(Request $request){
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
        $totalRecords = Seat::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Seat::select('count(*) as allcount')
        ->where('seat_no', 'like', '%' .$searchValue . '%')
        ->orWhere('description', 'like', '%' .$searchValue . '%')->count();
        // Fetch records
        $records = Seat::orderBy($columnName,$columnSortOrder)
            ->where('seats.seat_no', 'like', '%' .$searchValue . '%')
            ->orWhere('seats.description', 'like', '%' .$searchValue . '%')
            ->select('seats.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $seat_no = $record->seat_no;
            $description = $record->description;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();

            $data_arr[] = array(
                "id" => $id,
                "seat_no" => $seat_no,
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
        $venue = Venue::get();
        $seats = Seat::get();
        return view('admin.seats.create', compact('venue', 'seats'));
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
        $this->validate($request, [
            'seat_no' => 'required',
        ]);

        $seats = new Seat();
        $seats->seat_no = $request->seat_no;
        $seats->description = $request->description;
        $seats->venue_id = $request->venue_id;
        $seats->created_by = $user_id;
        $seats->updated_by = $user_id;
        $seats->save();
        return redirect()->route('conv-seats.index')
            ->with('message','Seat created successfully');         
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
        $seats = Seat::find($id);
        $venue = Venue::get();
        return view('admin.seats.edit', compact('seats', 'venue'));
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
            'seat_no' => 'required',
        ]);
        $seatsupdate =  Seat::find($id);
        $seatsupdate->seat_no = $request->seat_no;
        $seatsupdate->description = $request->description;
        $seatsupdate->venue_id = $request->venue_id;
        if(!empty($seatsupdate->created_by)){
            $seatsupdate->created_by = $seatsupdate->created_by;
        }else{
            $i = array_except($seatsupdate,array('created_by'));
        }
        $seatsupdate->updated_by = $user_id;
        $seatsupdate->save();

        return redirect()->route('conv-seats.index')
            ->with('message','Seat updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seat::find($id)->delete();
        return redirect()->route('conv-seats.index')
            ->with('message','Seat deleted successfully');
    }
}
