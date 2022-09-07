<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Venue;
use App\User;
use App\Models\Seat;
use Auth;
use Illuminate\Support\Arr;
use App\Models\ConvocationSession;

class GuestController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:guest-list', ['only' => ['index']]);
        $this->middleware('permission:guest-create', ['only' => ['create','store']]);
        $this->middleware('permission:guest-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:guest-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.guest.index');
    }
    public function getGuest(Request $request){
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

        $activeSession = ConvocationSession::where('status',1)->first();
        // Total records
        $totalRecords = Guest::with('user')->leftJoin('users','users.id','=','guests.user_id')
        ->leftJoin('eligibles','eligibles.user_id','=','users.id')->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')->select('count(*) as allcount')->count();
        $totalRecordswithFilter = Guest::with('user')->select('count(*) as allcount')
            ->leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where(function ($q) use ($searchValue){
              $q->where('users.name', 'like', '%' .$searchValue . '%')
            ->orWhere('users.reg_no', 'like', '%' .$searchValue . '%')
            ->orWhere('guests.name', 'like', '%' .$searchValue . '%')
            ->orWhere('guests.cnic', 'like', '%' .$searchValue . '%')
            ->orWhere('guests.relation', 'like', '%' .$searchValue . '%')
            ->orWhere('guests.vaccination_status', 'like', '%' .$searchValue . '%');
            })
            ->count();
        // Fetch records
        $records = Guest::with('user')->orderBy($columnName,$columnSortOrder)
            ->leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where(function ($q) use ($searchValue){
              $q->where('users.name', 'like', '%' .$searchValue . '%')
                ->orWhere('users.reg_no', 'like', '%' .$searchValue . '%')
                ->orWhere('guests.name', 'like', '%' .$searchValue . '%')
                ->orWhere('guests.cnic', 'like', '%' .$searchValue . '%')
                ->orWhere('guests.relation', 'like', '%' .$searchValue . '%')
                ->orWhere('guests.vaccination_status', 'like', '%' .$searchValue . '%');
            })
            ->select('guests.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $cnic = $record->cnic;
            $relation = $record->relation;
            $vaccination_status = $record->vaccination_status;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();
            $voucher_image = $record->voucher_image;
            $vaccination_certificate = $record->vaccination_certificate;
            $user = $record->user->name;
            $user_reg = $record->user->reg_no;

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "cnic" => $cnic,
                "relation" => $relation,
                "vaccination_status" => $vaccination_status,
                "voucher_image" => $voucher_image,
                "vaccination_certificate" => $vaccination_certificate,
                "created_by" => $created_by,
                "updated_by" => $updated_by,
                "user_id" => $user,
                "reg_no" => $user_reg
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
        $venues = Venue::get();
        $activeSession = ConvocationSession::where('status',1)->first();
        $users = User::whereHas('eligible',function ($q) use ($activeSession){
            $q->where('session_id', isset($activeSession->id) ? $activeSession->id : '');
         })->where('users.email','not like','%web@tuf.edu.pk%')
            ->where('users.role_status','=',0)->get();
        return view('admin.guest.create', compact('venues','users'));
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
            'relation' => 'required',
            'user_id' => 'required',
            'amount' => 'numeric',
            'voucher_image'=>'mimes:jpeg,png,jpg|max:2048',
            'vaccination_certificate'=>'mimes:jpeg,png,jpg,pdf|max:2048',
        ]);
        $user_id = Auth::user()->id;
        $input = $request->all();
        if ($request->hasFile('voucher_image')) {
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->voucher_image->getClientOriginalExtension();
            $request->voucher_image->move(public_path('voucher/guest/').date('Y'), $getImage);
            $image = $getImage;
        }
        if ($request->hasFile('vaccination_certificate')) {
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->vaccination_certificate->getClientOriginalExtension();
            $request->vaccination_certificate->move(public_path('vaccination/guest/').date('Y'), $getImage);
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
        $input['created_by'] = $user_id;
        $input['updated_by'] = $user_id;
        $input['pass_id'] = time().rand(0,9999);
        if(empty($input['seat_id'])){
            $input = Arr::except($input,array('seat_id'));
        }
        if(empty($input['user_id'])){
            $input = Arr::except($input,array('user_id'));
        }
        if(empty($input['amount'])){
            $input = Arr::except($input,array('amount'));
        }
        if(empty($input['vaccination_status'])){
            $input = Arr::except($input,array('vaccination_status'));
        }
        $user = Guest::create($input);

        return redirect()->route('guest.index')
            ->with('message','Guest created successfully');
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
        $guest = Guest::with('seat')->find($id);
        $venues = Venue::get();
        $activeSession = ConvocationSession::where('status',1)->first();
        $users = User::whereHas('eligible',function ($q) use ($activeSession){
            $q->where('session_id', isset($activeSession->id) ? $activeSession->id : '');
         })->where('users.email','not like','%web@tuf.edu.pk%')
            ->where('users.role_status','=',0)->get();
        return view('admin.guest.edit', compact('guest', 'venues', 'users'));
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
            'name' => 'required',
            'relation' => 'required',
            'user_id' => 'required',
            'amount' => 'numeric',
            'voucher_image'=>'mimes:jpeg,png,jpg|max:2048',
            'vaccination_certificate'=>'mimes:jpeg,png,jpg,pdf|max:2048'
        ]);
        $input = $request->all();
        if(!empty($input['seat_id'])){
            $input['seat_id'] = $input['seat_id'];
        }else{
            $input = Arr::except($input,array('seat_id'));
        }
        if(!empty($input['user_id'])){
            $input['user_id'] = $input['user_id'];
        }else{
            $input = Arr::except($input,array('user_id'));
        }
        if(!is_null($input['amount'])){
            $input['amount'] = $input['amount'];
        }else{
            $input = Arr::except($input,array('amount'));
        }
        if(!empty($input['vaccination_status'])){
            $input['vaccination_status'] = $input['vaccination_status'];
        }else{
            $input = Arr::except($input,array('vaccination_status'));
        }
        if(!empty($input['created_by'])){
            $input['created_by'] = $input['created_by'];
        }else{
            $input = array_except($input,array('created_by'));
        }
        if ($request->hasFile('vaccination_certificate')) {
            if(isset($eligible) && $eligible->vaccination_certificate){
                $preThumbnail = public_path('vaccination/guest/'.$eligible->vaccination_certificate);
                if (File::exists($preThumbnail)) { // unlink or remove previous image from folder
                    unlink($preThumbnail);
                }
            }
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->vaccination_certificate->getClientOriginalExtension();
            $request->vaccination_certificate->move(public_path('vaccination/guest/').date('Y'), $getImage);
            $image = $getImage;
        }
        else{
            $image='';
        }

        if ($request->hasFile('voucher_image')) {
            if(isset($eligible) && $eligible->voucher_image){
                $preThumbnail = public_path('voucher/guest/'.$eligible->voucher_image);
                if (File::exists($preThumbnail)) { // unlink or remove previous image from folder
                    unlink($preThumbnail);
                }
            }
            $getImage = date('Y').'/'.time().'-'.rand(0,999999).'.'.$request->voucher_image->getClientOriginalExtension();
            $request->voucher_image->move(public_path('voucher/guest/').date('Y'), $getImage);
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
        $guest = Guest::find($id);
        $input['updated_by'] = $user_id;
        $guest->update($input);
        return redirect()->route('guest.index')
            ->with('message','Guest updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guest::find($id)->delete();
        return redirect()->route('guest.index')
            ->with('message','Guest deleted successfully');
    }
    public function fetchSeats(Request $request)
    {
        $data['seats'] = Seat::whereDoesntHave('guest')->whereDoesntHave('eligible')->where("venue_id",$request->venue)->get(["seat_no", "id"]);
        return response()->json($data);
    }
    public function fetchSelectedSeats(Request $request)
    {
        $guest = Guest::where('id',$request->guest)->first();
        $data['seats'] = Seat::whereDoesntHave('guest',function ($q) use ($guest){
            $q->where('seat_id','!=',$guest->seat_id);
        })->whereDoesntHave('eligible')->where("venue_id",$request->venue)->get(["seat_no", "id"]);
        return response()->json($data);
    }
    public function fetchUsers(Request $request)
    {
        $records = User::where('users.email','not like','%web@tuf.edu.pk%')
            ->where('users.role_status','!=',0)->get();
        echo json_encode($records);
        exit;
    }
}
