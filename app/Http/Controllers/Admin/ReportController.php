<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConvocationSession;
use App\Models\Eligibles;
use App\Models\Guest;
use App\Models\UserAttendance;
use App\Models\GuestAttendance;
use App\Models\UserLedger;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:paid-eligibles-list', ['only' => ['paidEligibles']]);
        $this->middleware('permission:not-paid-eligibles-list', ['only' => ['notPaidEligibles']]);
        $this->middleware('permission:final-summary-report', ['only' => ['finalSummary']]);
        $this->middleware('permission:register-candidate-report', ['only' => ['registerCandidates']]);
        $this->middleware('permission:register-guest-report', ['only' => ['registerGuests']]);
        $this->middleware('permission:user-position-report', ['only' => ['userPositions']]);
        $this->middleware('permission:attendance-candidate-report', ['only' => ['attendanceCandidates']]);
    }
    //Paid Eligibles
    public function paidEligibles(){
        return view('admin.report.paid_eligibles');
    }
    public function getPaidEligibles(Request $request){
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
        $totalRecords = Eligibles::where('session_id', isset($activeSession->id) ? $activeSession->id : '')->select('count(*) as allcount')->whereNotNull('user_id')->where('amount',2500)->count();
        $totalRecordswithFilter = Eligibles::where('session_id', isset($activeSession->id) ? $activeSession->id : '')->select('count(*) as allcount')->where('amount',2500)->whereNotNull('user_id')
            ->where(function ($q) use ($searchValue){
                $q->where('name', 'like', '%' .$searchValue . '%')->orWhere('reg_no', 'like', '%' .$searchValue . '%')
                    ->orWhere('eligibles.amount', 'like', '%' .$searchValue . '%');
            })->count();
        // Fetch records
        $records = Eligibles::orderBy($columnName,$columnSortOrder)
            ->where('session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where('amount',2500)->whereNotNull('user_id')
            ->where(function ($q) use ($searchValue){
                $q->where('eligibles.name', 'like', '%' .$searchValue . '%')
                    ->orWhere('eligibles.reg_no', 'like', '%' .$searchValue . '%')
                    ->orWhere('eligibles.amount', 'like', '%' .$searchValue . '%');
            })
            ->select('eligibles.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $reg_no = $record->reg_no;
            $amount = $record->amount;
            $voucher_image = $record->voucher_image;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "reg_no" => $reg_no,
                "amount" => $amount,
                "voucher_image" => $voucher_image,
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
    //Not Paid Eligibles
    public function notPaidEligibles(){
        return view('admin.report.not_paid_eligibles');
    }
    public function getNotPaidEligibles(Request $request){
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
        $totalRecords = Eligibles::select('count(*) as allcount')->whereNotNull('user_id')->where('amount',0)->
        where('session_id', isset($activeSession->id) ? $activeSession->id : '')->count();
        $totalRecordswithFilter = Eligibles::select('count(*) as allcount')->whereNotNull('user_id')->where('amount',0)
            ->where('session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where(function ($q) use ($searchValue){
                $q->where('name', 'like', '%' .$searchValue . '%')->orWhere('reg_no', 'like', '%' .$searchValue . '%')
                    ->orWhere('eligibles.amount', 'like', '%' .$searchValue . '%');
            })->count();
        // Fetch records
        $records = Eligibles::orderBy($columnName,$columnSortOrder)
            ->where('amount',0)->whereNotNull('user_id')
            ->where('session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where(function ($q) use ($searchValue){
                $q->where('eligibles.name', 'like', '%' .$searchValue . '%')
                    ->orWhere('eligibles.reg_no', 'like', '%' .$searchValue . '%')
                    ->orWhere('eligibles.amount', 'like', '%' .$searchValue . '%');
            })
            ->select('eligibles.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $reg_no = $record->reg_no;
            $amount = $record->amount;
            $voucher_image = $record->voucher_image;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updated_by = User::where('id', $record->updated_by)->pluck('name','name')->first();

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "reg_no" => $reg_no,
                "amount" => $amount,
                "voucher_image" => $voucher_image,
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
    //Final Summary
    public function finalSummary(Request $request){
        $sessions = ConvocationSession::orderBy('id','desc')->get();
        $session = ConvocationSession::where('id',$request->session_id)->first();
        if (isset($session)){
            $eligibles = Eligibles::where('session_id',$session->id)->count();
            $registered = Eligibles::whereNotNull('user_id')->where('session_id',$session->id)->count();
            $notRegistered = Eligibles::whereNull('user_id')->where('session_id',$session->id)->count();
            $paidRegistered = Eligibles::whereNotNull('user_id')->where('session_id',$session->id)->where('amount',2500)->count();
            $notPaidRegistered = Eligibles::whereNotNull('user_id')->where('session_id',$session->id)->where('amount',0)->count();
            $notVacinated = Eligibles::whereNotNull('user_id')->where('session_id',$session->id)->where('vaccination_status',0)->count();
            $partiallyVacinated = Eligibles::whereNotNull('user_id')->where('session_id',$session->id)->where('vaccination_status',1)->count();
            $fullyVacinated = Eligibles::whereNotNull('user_id')->where('session_id',$session->id)->where('vaccination_status',2)->count();
            $totalWithGuests = User::whereHas('eligible',function ($q) use ($session){
                $q->where('session_id',$session->id);
             })->whereHas('guest')->where('role_status',0)->count();
            $totalWithOutGuests = User::whereDoesntHave('guest')->whereHas('eligible',function ($q) use ($session){
                $q->where('session_id',$session->id);
             })->where('role_status',0)->count();
            $fullRegalia= DB::table('user_ledgers')
                ->leftJoin('users','users.id','=','user_ledgers.user_id')
                ->leftJoin('eligibles','eligibles.user_id','=','users.id')
                ->where('eligibles.session_id',$session->id)
                ->select('user_ledgers.user_id', DB::raw('count(*)'))
                ->groupBy('user_ledgers.user_id')
                ->having('count(*)','>=',3)
                ->get();
            $regaliaReurned = $fullRegalia->count();
            $partiallyRegalia= DB::table('user_ledgers')
                ->leftJoin('users','users.id','=','user_ledgers.user_id')
                ->leftJoin('eligibles','eligibles.user_id','=','users.id')
                ->where('eligibles.session_id',$session->id)
                ->select('user_ledgers.user_id', DB::raw('count(*)'))
                ->groupBy('user_ledgers.user_id')
                ->having('count(*)','<',3)
                ->get();
            $partiallyRegaliaReurned = $partiallyRegalia->count();
            $userAttendance= DB::table('user_attendances')
                ->leftJoin('users','users.id','=','user_attendances.user_id')
                ->leftJoin('eligibles','eligibles.user_id','=','users.id')
                ->where('eligibles.session_id',$session->id)
                ->select('user_attendances.user_id', DB::raw('count(*)'))
                ->groupBy('user_attendances.user_id')
                ->having('count(*)','>',0)
                ->get();
            $attendees = $userAttendance->count();
            $totalGuests = Guest::leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id',$session->id)->orderBy('id','desc')->count();
            $totalExtraGuests = Guest::leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id',$session->id)->where('guests.amount','>',0)->count();
            $notVaccinatedGuest = Guest::leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id',$session->id)->where('guests.vaccination_status',0)->count();
            $partiallyVaccinatedGuest = Guest::leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id',$session->id)->where('guests.vaccination_status',1)->count();
            $fullyVaccinatedGuest = Guest::leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id',$session->id)->where('guests.vaccination_status',2)->count();
            $guestAttendance= DB::table('guest_attendances')
                ->leftJoin('guests','guests.id','=','guest_attendances.guest_id')
                ->leftJoin('users','users.id','=','guests.user_id')
                ->leftJoin('eligibles','eligibles.user_id','=','users.id')
                ->where('eligibles.session_id',$session->id)
                ->select('guest_attendances.guest_id', DB::raw('count(*)'))
                ->groupBy('guest_attendances.guest_id')
                ->having('count(*)','>',0)
                ->get();
            $guestAttendees = $guestAttendance->count();
        }
        else{
            $eligibles=$registered=$notRegistered=$paidRegistered=$notPaidRegistered=$notVacinated=$partiallyVacinated=$fullyVacinated=$totalWithGuests=$totalWithOutGuests=
            $regaliaReurned=$partiallyRegaliaReurned=$attendees=$totalGuests=$totalExtraGuests=$notVaccinatedGuest=$partiallyVaccinatedGuest=$fullyVaccinatedGuest=$guestAttendees=0;
        }
        return view('admin.report.final_summary',compact('sessions','eligibles','registered','notRegistered','paidRegistered','notPaidRegistered',
            'notVacinated','partiallyVacinated','fullyVacinated','totalWithGuests','totalWithOutGuests','regaliaReurned','partiallyRegaliaReurned','attendees','totalGuests',
            'totalExtraGuests','notVaccinatedGuest','partiallyVaccinatedGuest','fullyVaccinatedGuest','guestAttendees'));
    }
    //Register Candidates
    public function registerCandidates(){
        return view('admin.report.register_candidates');
    }
    public function getRegisterCandidates(Request $request){
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
        $totalRecords = User::with('eligible')->leftJoin('eligibles','eligibles.user_id','=','users.id')
        ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')->where('users.role_status','=',0)->select('count(*) as allcount')->count();
        $totalRecordswithFilter = User::with('eligible')->select('count(*) as allcount')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where('users.role_status','=',0)
            ->where(function ($q) use ($searchValue){
                $q->where('eligibles.degree_name', 'like', '%' .$searchValue . '%')
                ->orWhere('eligibles.id', 'like', '%' .$searchValue . '%')
                ->orWhere('eligibles.cnic', 'like', '%' .$searchValue . '%')
                ->orWhere('eligibles.contact_no_residence', 'like', '%' .$searchValue . '%')
                ->orWhere('eligibles.cell_no', 'like', '%' .$searchValue . '%')
                ->orWhere('eligibles.passout_session', 'like', '%' .$searchValue . '%')
                ->orWhere('eligibles.passout_year', 'like', '%' .$searchValue . '%')
                ->orWhere('eligibles.father_name', 'like', '%' .$searchValue . '%')
                ->orWhere('eligibles.father_cnic', 'like', '%' .$searchValue . '%')
                ->orWhere('eligibles.campus_id', 'like', '%' .$searchValue . '%')
                ->orWhere('eligibles.amount', 'like', '%' .$searchValue . '%')
                ->orWhere('users.name', 'like', '%' .$searchValue . '%')
                ->orWhere('users.email', 'like', '%' .$searchValue . '%')
                ->orWhere('users.reg_no', 'like', '%' .$searchValue . '%');
            })->count();
        // Fetch records
        // DB::connection()->enableQueryLog();
        $records = User::with('eligible')->orderBy($columnName,$columnSortOrder)
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where('users.email','not like','%web@tuf.edu.pk%')
            ->where('users.role_status','=',0)
            ->where(function ($q) use ($searchValue){
              $q
              ->where('eligibles.degree_name', 'like', '%' .$searchValue . '%')
              ->orWhere('eligibles.id', 'like', '%' .$searchValue . '%')
              ->orWhere('eligibles.cnic', 'like', '%' .$searchValue . '%')
              ->orWhere('eligibles.contact_no_residence', 'like', '%' .$searchValue . '%')
              ->orWhere('eligibles.cell_no', 'like', '%' .$searchValue . '%')
              ->orWhere('eligibles.passout_session', 'like', '%' .$searchValue . '%')
              ->orWhere('eligibles.passout_year', 'like', '%' .$searchValue . '%')
              ->orWhere('eligibles.father_name', 'like', '%' .$searchValue . '%')
              ->orWhere('eligibles.father_cnic', 'like', '%' .$searchValue . '%')
              ->orWhere('eligibles.campus_id', 'like', '%' .$searchValue . '%')
              ->orWhere('eligibles.amount', 'like', '%' .$searchValue . '%')
              ->orWhere('users.name', 'like', '%' .$searchValue . '%')
              ->orWhere('users.email', 'like', '%' .$searchValue . '%')
              ->orWhere('users.reg_no', 'like', '%' .$searchValue . '%');
            })
            ->select('users.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();
        // $queries = DB::getQueryLog();
        // dd($queries);

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $email = $record->email;
            $reg_no = $record->reg_no;
            $cnic = $record->eligible[0]->cnic;
            $degree_name = $record->eligible[0]->degree_name;
            $contact_no_residence = $record->eligible[0]->contact_no_residence;
            $passout_year = $record->eligible[0]->passout_year;
            $passout_session = $record->eligible[0]->passout_session;
            $cell_no = $record->eligible[0]->cell_no;
            $campus_id = $record->eligible[0]->campus_id;
            $amount = $record->eligible[0]->amount;
            $vaccination_status = $record->eligible[0]->vaccination_status;
            $voucher_image = $record->eligible[0]->voucher_image;
            $vaccination_certificate = $record->eligible[0]->vaccination_certificate;
            $father_name = $record->eligible[0]->father_name;
            $father_cnic = $record->eligible[0]->father_cnic;
            $challan_no =  (isset($record->eligible[0])?date('Y',strtotime(now())).$record->eligible[0]->id:'');
            $address = $record->eligible[0]->address;

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "email" => $email,
                "reg_no" => $reg_no,
                "cnic" => $cnic,
                "degree_name" => $degree_name,
                "contact_no_residence" => $contact_no_residence,
                "cell_no" => $cell_no,
                "passout_session" => $passout_session,
                "passout_year" => $passout_year,
                "campus_id" => $campus_id,
                "amount" => $amount,
                "vaccination_status" => $vaccination_status,
                "voucher_image" => $voucher_image,
                "vaccination_certificate" => $vaccination_certificate,
                "father_name" => $father_name,
                "father_cnic" => $father_cnic,
                "address" => $address,
                "challan_no" => $challan_no,
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
    //Register Candidates
    public function registerGuests(){
        return view('admin.report.register_guests');
    }
    public function getregisterGuests(Request $request){
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
        ->leftJoin('eligibles','eligibles.user_id','=','users.id')
        ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')->select('count(*) as allcount')->count();
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
            })->count();
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
            $amount = $record->amount;
            $vaccination_status = $record->vaccination_status;
            $voucher_image = $record->voucher_image;
            $vaccination_certificate = $record->vaccination_certificate;



            $cad_cnic = $record->user->eligible[0]->cnic;
            $cad_degree_name = $record->user->eligible[0]->degree_name;
            $cad_contact_no_residence = $record->user->eligible[0]->contact_no_residence;
            $cad_passout_year = $record->user->eligible[0]->passout_year;
            $cad_passout_session = $record->user->eligible[0]->passout_session;
            $cad_cell_no = $record->user->eligible[0]->cell_no;
            $cad_campus_id = $record->user->eligible[0]->campus_id;



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
                "amount" => $amount,
                "vaccination_status" => $vaccination_status,

                "cad_cnic" => $cad_cnic,
                "cad_degree_name" => $cad_degree_name,
                "cad_contact_no_residence" => $cad_contact_no_residence,
                "cad_cell_no" => $cad_cell_no,
                "cad_passout_session" => $cad_passout_session,
                "cad_passout_year" => $cad_passout_year,
                "cad_campus_id" => $cad_campus_id,

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
    //User Positions
    public function userPositions(){
        $session = ConvocationSession::where('status',1)->first();
        if (isset($session)){
            $notEntered = User::whereHas('eligible',function ($q) use ($session){
                $q->where('session_id',$session->id);
             })->where('role_status',0)->where('position',0)->count();
            $enteredGate1 = User::whereHas('eligible',function ($q) use ($session){
                $q->where('session_id',$session->id);
             })->where('role_status',0)->where('position',1)->count();
            $enteredGate2 = User::whereHas('eligible',function ($q) use ($session){
                $q->where('session_id',$session->id);
             })->where('role_status',0)->where('position',2)->count();
            $enteredGate3 = User::whereHas('eligible',function ($q) use ($session){
                $q->where('session_id',$session->id);
             })->where('role_status',0)->where('position',3)->count();
            $notEnteredGuest = Guest::leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id',$session->id)->where('guests.position',0)->count();
            $enteredGuestGate1 = Guest::leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id',$session->id)->where('guests.position',1)->count();
            $enteredGuestGate2 = Guest::leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id',$session->id)->where('guests.position',2)->count();
            $enteredGuestGate3 = Guest::leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id',$session->id)->where('guests.position',3)->count();
        }
        else{
            $notEntered=$enteredGate1=$enteredGate2=$enteredGate3=$notEnteredGuest=$enteredGuestGate1=$enteredGuestGate2=$enteredGuestGate3=0;
        }
        return view('admin.report.user_position',compact('notEntered','enteredGate1','enteredGate2','enteredGate3',
        'notEnteredGuest','enteredGuestGate1','enteredGuestGate2','enteredGuestGate3'));
    }
    //Attendance Candidates
    public function attendanceCandidates(){
        $activeSession = ConvocationSession::where('status',1)->first();
        $users = User::whereHas('eligible',function ($q) use ($activeSession){
            $q->where('session_id', isset($activeSession->id) ? $activeSession->id : '');
         })->where('users.email','not like','%web@tuf.edu.pk%')
        ->where('users.role_status','=',0)->get();
        return view('admin.report.attendance_candidates', compact('users'));
    }
    public function getattendanceCandidates(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
        $position = (!is_null($request->get('position')) ? $request->get('position') : '');
        $in_out = (!is_null($request->get('in_out')) ? $request->get('in_out') : '');
        $user_id = (!is_null($request->get('user_id')) ? $request->get('user_id') : '');
        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        $activeSession = ConvocationSession::where('status',1)->first();
        // Total records
        $totalRecords = UserAttendance::with('user')
        ->leftJoin('users','users.id','=','user_attendances.user_id')
        ->leftJoin('eligibles','eligibles.user_id','=','users.id')
        ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')->where('user_attendances.position', 'like', '%' .$position . '%')
            ->where('user_attendances.in_out', 'like', '%' .$in_out . '%')
            ->where('user_attendances.user_id', 'like', '%' .$user_id . '%')->select('count(*) as allcount')->count();
        $totalRecordswithFilter = UserAttendance::with('user')->select('count(*) as allcount')
            ->leftJoin('users','users.id','=','user_attendances.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where('user_attendances.position', 'like', '%' .$position . '%')
            ->where('user_attendances.in_out', 'like', '%' .$in_out . '%')
            ->where('user_attendances.user_id', 'like', '%' .$user_id . '%')
            ->where(function ($q) use ($searchValue){
                $q->where('users.name', 'like', '%' .$searchValue . '%')
            ->orWhere('users.reg_no', 'like', '%' .$searchValue . '%')
            ->orWhere('user_attendances.in_out', 'like', '%' .$searchValue . '%')
            ->orWhere('user_attendances.position', 'like', '%' .$searchValue . '%');
            })->count();
        // Fetch records
        $records = UserAttendance::with('user')->orderBy($columnName,$columnSortOrder)
            ->leftJoin('users','users.id','=','user_attendances.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where('user_attendances.position', 'like', '%' .$position . '%')
            ->where('user_attendances.in_out', 'like', '%' .$in_out . '%')
            ->where('user_attendances.user_id', 'like', '%' .$user_id . '%')
            ->where(function ($q) use ($searchValue){
            $q->where('users.name', 'like', '%' .$searchValue . '%')
            ->orWhere('users.reg_no', 'like', '%' .$searchValue . '%')
            ->orWhere('user_attendances.in_out', 'like', '%' .$searchValue . '%')
            ->orWhere('user_attendances.position', 'like', '%' .$searchValue . '%');
            })
            ->select('user_attendances.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->user->name;
            $reg_no = $record->user->reg_no;
            $in_out = $record->in_out;
            $position = $record->position;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "reg_no" => $reg_no,
                "in_out" => $in_out,
                "position" => $position,
                "created_by" => $created_by,
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



    //Attendance Guest
    public function attendanceGuests(){
        $activeSession = ConvocationSession::where('status',1)->first();
        $users = User::whereHas('eligible',function ($q) use ($activeSession){
            $q->where('session_id', isset($activeSession->id) ? $activeSession->id : '');
         })->where('users.role_status','=',0)->get();
        return view('admin.report.attendance_guests', compact('users'));
    }
    public function getattendanceGuests(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
        $position = (!is_null($request->get('position')) ? $request->get('position') : '');
        $in_out = (!is_null($request->get('in_out')) ? $request->get('in_out') : '');
        $user_id = (!is_null($request->get('user_id')) ? $request->get('user_id') : '');
        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        $activeSession = ConvocationSession::where('status',1)->first();
        // Total records
        $totalRecords = GuestAttendance::with('guest')
        ->leftJoin('guests','guests.id','=','guest_attendances.guest_id')
        ->leftJoin('users','users.id','=','guests.user_id')
        ->leftJoin('eligibles','eligibles.user_id','=','users.id')
        ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
        ->where('guest_attendances.position', 'like', '%' .$position . '%')
        ->where('guest_attendances.in_out', 'like', '%' .$in_out . '%')
        ->where('guests.user_id', 'like', '%' .$user_id . '%')
        ->select('count(*) as allcount')->count();
        $totalRecordswithFilter = GuestAttendance::with('guest')->select('count(*) as allcount')
            ->leftJoin('guests','guests.id','=','guest_attendances.guest_id')
            ->leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where('guest_attendances.position', 'like', '%' .$position . '%')
            ->where('guest_attendances.in_out', 'like', '%' .$in_out . '%')
            ->where('guests.user_id', 'like', '%' .$user_id . '%')
            ->where(function ($q) use ($searchValue){
            $q->where('guests.name', 'like', '%' .$searchValue . '%')
            ->orWhere('users.name', 'like', '%' .$searchValue . '%')
            ->orWhere('users.reg_no', 'like', '%' .$searchValue . '%')
            ->orWhere('guest_attendances.in_out', 'like', '%' .$searchValue . '%')
            ->orWhere('guest_attendances.position', 'like', '%' .$searchValue . '%');
            })->count();
        // Fetch records
        $records = GuestAttendance::with('guest')->orderBy($columnName,$columnSortOrder)
            ->leftJoin('guests','guests.id','=','guest_attendances.guest_id')
            ->leftJoin('users','users.id','=','guests.user_id')
            ->leftJoin('eligibles','eligibles.user_id','=','users.id')
            ->where('eligibles.session_id', isset($activeSession->id) ? $activeSession->id : '')
            ->where('guest_attendances.position', 'like', '%' .$position . '%')
            ->where('guest_attendances.in_out', 'like', '%' .$in_out . '%')
            ->where('guests.user_id', 'like', '%' .$user_id . '%')
            ->where(function ($q) use ($searchValue){
            $q->where('guests.name', 'like', '%' .$searchValue . '%')
            ->orWhere('users.name', 'like', '%' .$searchValue . '%')
            ->orWhere('users.reg_no', 'like', '%' .$searchValue . '%')
            ->orWhere('guest_attendances.in_out', 'like', '%' .$searchValue . '%')
            ->orWhere('guest_attendances.position', 'like', '%' .$searchValue . '%');
            })
            ->select('guest_attendances.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->guest->name;
            $reg_no = $record->guest->user->reg_no;
            $user_name = $record->guest->user->name;
            $in_out = $record->in_out;
            $position = $record->position;
            $created_by = User::where('id', $record->created_by)->pluck('name','name')->first();

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "reg_no" => $reg_no,
                "user_name" => $user_name,
                "in_out" => $in_out,
                "position" => $position,
                "created_by" => $created_by,
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
}
