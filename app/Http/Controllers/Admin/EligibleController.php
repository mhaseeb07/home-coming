<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eligibles;
use App\Models\Campus;
use App\Models\Venue;
use App\Models\Seat;
use App\Models\EligibleType;
use App\Models\Medal;
use App\Models\ConvocationSession;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EligiblesImport;
use App\User;
use Auth;
use File;
use Illuminate\Support\Arr;

class EligibleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:eligible-list', ['only' => ['index']]);
        $this->middleware('permission:eligible-create', ['only' => ['create','store']]);
        $this->middleware('permission:eligible-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:eligible-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eligible.index');
    }
    public function getEligibles(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
        $vaccination_status = (!is_null($request->get('vaccination_status')) ? $request->get('vaccination_status') : '');
        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $activeSession = ConvocationSession::where('status',1)->first();
        $totalRecords = Eligibles::where('vaccination_status', 'like', '%' .$vaccination_status . '%')->where('session_id', isset($activeSession->id) ? $activeSession->id : '')->select('count(*) as allcount')->count();
        $totalRecordswithFilter = Eligibles::select('count(*) as allcount')
            ->where('session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where(function ($q) use ($searchValue,$vaccination_status){
                $q->where('vaccination_status', 'like', '%' .$vaccination_status . '%')->orWhere('name', 'like', '%' .$searchValue . '%')->orWhere('email', 'like', '%' .$searchValue . '%')->orWhere('reg_no', 'like', '%' .$searchValue . '%')
                    ->orWhere('eligibles.cnic', 'like', '%' .$searchValue . '%');
            })->count();
        // Fetch records
        $records = Eligibles::orderBy($columnName,$columnSortOrder)
            ->where('session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where(function ($q) use ($searchValue,$vaccination_status){
                $q->where('vaccination_status', 'like', '%' .$vaccination_status . '%')->orWhere('eligibles.name', 'like', '%' .$searchValue . '%')
                    ->orWhere('eligibles.reg_no', 'like', '%' .$searchValue . '%')
                    ->orWhere('eligibles.email', 'like', '%' .$searchValue . '%')
                    ->orWhere('eligibles.cnic', 'like', '%' .$searchValue . '%');
            })
            ->select('eligibles.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $email = $record->email;
            $reg_no = $record->reg_no;
            $cnic = $record->cnic;
            $vaccination_status = $record->vaccination_status;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "email" => $email,
                "reg_no" => $reg_no,
                "cnic" => $cnic,
                "vaccination_status" => $vaccination_status,
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
        $campues = Campus::get();
        $venues = Venue::get();
        $seats = Seat::get();
        $eligibleTypes = EligibleType::get();
        $medals = Medal::get();
        return view('admin.eligible.create', compact('campues','venues', 'seats','eligibleTypes','medals'));
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
            'email' => 'email|unique:eligibles,email',
            'reg_no' => 'required|unique:eligibles,reg_no',
            'cnic' => 'unique:eligibles,cnic',
            'eligible_type_id' => 'required',
            'vaccination_status' => 'required',
            'campus_id' => 'required',
            'status' => 'required',
            'voucher_image'=>'mimes:jpeg,png,jpg|max:2048',
            'vaccination_certificate'=>'mimes:jpeg,png,jpg,pdf|max:2048',
        ]);
        $activeSession = ConvocationSession::where('status',1)->first();
        $input = $request->all();
        $input['session_id'] = $activeSession->id;
        if ($request->hasFile('voucher_image')) {
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->voucher_image->getClientOriginalExtension();
            $request->voucher_image->move(public_path('voucher/').date('Y'), $getImage);
            $image = $getImage;
        }
        if ($request->hasFile('vaccination_certificate')) {
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->vaccination_certificate->getClientOriginalExtension();
            $request->vaccination_certificate->move(public_path('vaccination/').date('Y'), $getImage);
            $vaccinationImage = $getImage;
        }
        if(!empty($input['vaccination_certificate'])){
            $input['vaccination_certificate'] = $vaccinationImage;
        }else{
            $input = Arr::except($input,array('vaccination_certificate'));
        }
        if(!empty($input['voucher_image'])){
            $input['voucher_image'] = $image;
        }else{
            $input = Arr::except($input,array('voucher_image'));
        }
        if(empty($input['amount'])){
            $input = Arr::except($input,array('amount'));
        }
        if(empty($input['seat_id'])){
            $input = Arr::except($input,array('seat_id'));
        }
        if(empty($input['campus_id'])){
            $input = Arr::except($input,array('campus_id'));
        }
        if(empty($input['eligible_type_id'])){
            $input = Arr::except($input,array('eligible_type_id'));
        }
        if(empty($input['medal_id'])){
            $input = Arr::except($input,array('medal_id'));
        }
        $user_id = Auth::user()->id;
        $input['created_by'] = $user_id;
        $input['updated_by'] = $user_id;
        $user = Eligibles::create($input);

        return redirect()->route('eligibles.index')
            ->with('message','Eligible created successfully');
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
        $eligible = Eligibles::with('seat')->find($id);
        $campues = Campus::get();
        $venues = Venue::get();
        $seats = Seat::get();
        $eligibleTypes = EligibleType::get();
        $medals = Medal::get();
        return view('admin.eligible.edit', compact('campues', 'eligible', 'venues','seats','eligibleTypes','medals'));
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
        $eligible = Eligibles::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'reg_no' => 'required',
            'eligible_type_id' => 'required',
            'status' => 'required',
            'voucher_image'=>'mimes:jpeg,png,jpg|max:2048',
            'vaccination_certificate'=>'mimes:jpeg,png,jpg,pdf|max:2048'
        ]);
        $activeSession = ConvocationSession::where('status',1)->first();
        $input = $request->all();
        $input['session_id'] = $activeSession->id;
        if(!empty($input['seat_id'])){
            $input['seat_id'] = $input['seat_id'];
        }else{
            $input = Arr::except($input,array('seat_id'));
        }
        if(!empty($input['campus_id'])){
            $input['campus_id'] = $input['campus_id'];
        }else{
            $input = Arr::except($input,array('campus_id'));
        }
        if(!empty($input['session_id'])){
            $input['session_id'] = $input['session_id'];
        }else{
            $input = Arr::except($input,array('session_id'));
        }
        if(!empty($input['eligible_type_id'])){
            $input['eligible_type_id'] = $input['eligible_type_id'];
        }else{
            $input = Arr::except($input,array('eligible_type_id'));
        }
        if(!empty($input['medal_id'])){
            $input['medal_id'] = $input['medal_id'];
        }else{
            $input = Arr::except($input,array('medal_id'));
        }
        if ($request->hasFile('vaccination_certificate')) {
            if(isset($eligible) && $eligible->vaccination_certificate){
                $preThumbnail = public_path('vaccination/'.$eligible->vaccination_certificate);
                if (File::exists($preThumbnail)) { // unlink or remove previous image from folder
                    unlink($preThumbnail);
                }
            }
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->vaccination_certificate->getClientOriginalExtension();
            $request->vaccination_certificate->move(public_path('vaccination/').date('Y'), $getImage);
            $image = $getImage;
        }
        else{
            $image='';
        }

        if ($request->hasFile('voucher_image')) {
            if(isset($eligible) && $eligible->voucher_image){
                $preThumbnail = public_path('voucher/'.$eligible->voucher_image);
                if (File::exists($preThumbnail)) { // unlink or remove previous image from folder
                    unlink($preThumbnail);
                }
            }
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->voucher_image->getClientOriginalExtension();
            $request->voucher_image->move(public_path('voucher/').date('Y'), $getImage);
            $voucherImage = $getImage;
        }
        else{
            $voucherImage='';
        }

        if(!empty($input['vaccination_certificate'])){
            $input['vaccination_certificate'] = $image;
        }else{
            $input = Arr::except($input,array('vaccination_certificate'));
        }
        if(!empty($input['voucher_image'])){
            $input['voucher_image'] = $voucherImage;
        }else{
            $input = Arr::except($input,array('voucher_image'));
        }
        $user_id = Auth::user()->id;
        $input['updated_by'] = $user_id;
        $eligible->update($input);
        return redirect()->route('eligibles.index')
            ->with('message','Eligible updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Eligibles::find($id)->delete();
        return redirect()->route('eligibles.index')
            ->with('message','Eligible deleted successfully');
    }
    public function fetchSeats(Request $request)
    {
        $data['seats'] = Seat::whereDoesntHave('eligible')->whereDoesntHave('guest')->where("venue_id",$request->venue)->get(["seat_no", "id"]);
        return response()->json($data);
    }
    public function fetchSelectedSeats(Request $request)
    {
        $eligible = Eligibles::where('id',$request->eligible)->first();
        $data['seats'] = Seat::whereDoesntHave('eligible',function ($q) use ($eligible){
            $q->where('seat_id','!=',$eligible->seat_id);
        })->whereDoesntHave('guest')->where("venue_id",$request->venue)->get(["seat_no", "id"]);
        return response()->json($data);
    }
    public function csvUpload(Request $request)
    {
        $this->validate($request, [
            'eligible_type_id' => 'required',
            'status' => 'required',
            'csvimport'=>'required|mimes:csv,xlsx|max:50000'
        ]);
        $activeSession = ConvocationSession::where('status',1)->first();
        $user_id = Auth::user()->id;
        $request->session()->put('eligible_type_id',$request->input('eligible_type_id'));
        $request->session()->put('status',$request->input('status'));
        $request->session()->put('session_id',$activeSession->id);
        $request->session()->put('created_by',$user_id);
        $request->session()->put('updated_by',$user_id);
        Excel::import(new EligiblesImport,request()->file('csvimport'));

        return redirect()->route('eligibles.index')->with('success', 'Eligibles Successfully Added');
    }
}
