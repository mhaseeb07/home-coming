<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConvocationSession;
use App\User;
use Illuminate\Http\Request;
use App\Models\MedalListCategory;
use App\Models\MedalList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MedalListController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:medal-list-list', ['only' => ['index']]);
        $this->middleware('permission:medal-list-create', ['only' => ['create','store']]);
        $this->middleware('permission:medal-list-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:medal-list-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.medal_list.index');
    }
    public function GetMedalList(Request $request){
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

        $totalRecords = MedalList::with('MLCate','SCate')
            ->select('count(*) as allcount')
            ->leftJoin('users','users.id','=','medal_list.created_by')
            ->where(function($q) use($searchValue){
                $q->where('medal_list.title', 'like', '%' .$searchValue . '%')
                    ->orWhere('users.name', 'like', '%' .$searchValue . '%');
            })
            ->orderBy('id', 'DESC')
            ->count();


        $totalRecordswithFilter = MedalList::with('MLCate','SCate')
            ->select('count(*) as allcount')
            ->leftJoin('users','users.id','=','medal_list.created_by')
            ->where(function($q) use($searchValue){
                $q->where('medal_list.title', 'like', '%' .$searchValue . '%')
                    ->orWhere('users.name', 'like', '%' .$searchValue . '%');
            })
            ->orderBy('id', 'DESC')
            ->count();

        // Fetch records
        $records = MedalList::with('MLCate','SCate')
            ->orderBy($columnName,$columnSortOrder)
            ->leftJoin('users','users.id','=','medal_list.created_by')
            ->where(function($q) use($searchValue){
                $q->where('medal_list.title', 'like', '%' .$searchValue . '%')
                    ->orWhere('users.name', 'like', '%' .$searchValue . '%');
            })
            ->select('medal_list.*')
            ->orderBy('id', 'DESC')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $title = $record->title;
            $MLCate = $record['MLCate']['title'];
            $SCate = $record['SCate']['title'];
            $createdBy = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updatedAT = date('d/M/Y', strtotime($record->created_at));
            $status = $record->status;
            if($record->status == 'Non-Active'){
                $status = 'Non-Active';
            }
            if($record->status == 'Active'){
                $status = 'Active';
            }
//            dump($status);
            $data_arr[] = array(
                "id" => $id,
                "title" => $title,
                "MLCate" => $MLCate,
                "SCate" => $SCate,
                "created_by"=> $createdBy,
                "created_at"=> $updatedAT,
                "status" => $status,
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
        $MLCate = MedalListCategory::get();
        return view('admin.medal_list.create', compact('MLCate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activeSession = ConvocationSession::where('status',1)->first();
        if (!isset($activeSession)){
            return redirect()->back()->with('warning','Activate Current Session First');
        }
        else {
            $this->validate($request, [
                'title' => 'required|unique:medal_list',
                'medal_cate' => 'required',
                'description' => 'required',
            ]);
            $session = new MedalList();
            $session->title = $request->title;
            $session['slug'] = $this->createSlug($request->title);
            $session->medal_cate = $request->medal_cate;
            $session->description = $request->description;
            $session->status = 'Non-Active';
            $session->session_id = $activeSession->id;
            $session->created_by = Auth::user()->id;
            $session->save();
            return redirect()->route('medal-list.index')->with('message', 'Medal List created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $updatestatus = MedalList::findOrFail($id);
        if($updatestatus->status == 'Non-Active')
        {
            $Updated['status'] ='Active';
        }
        else{
            $Updated['status'] ='Non-Active';
        }
        $updatestatus->update($Updated);
        if ($updatestatus){
            return redirect()->back()->with('message','Activated Successfully');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $MLCate = MedalListCategory::get();
        $MList = MedalList::find($id);
        return view('admin.medal_list.edit' , compact('MList','MLCate'));
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
        $activeSession = ConvocationSession::where('status',1)->first();
        if (!isset($activeSession)){
            return redirect()->back()->with('warning','Activate Current Session First');
        }
        else {
            $Data_MList = MedalList::findOrFail($id);
            $Update_MList = $request->all();
            $request->validate([
                'title' => 'required|unique:medal_list,title,' . $id,
                'medal_cate' => 'required',
                'description' => 'required',
            ]);
            $Update_MList['updated_by'] = Auth::user()->id;
            $Update_MList['session_id'] = $activeSession->id;
            $Update = $Data_MList->update($Update_MList);
            if ($Update) {
                return redirect(route('medal-list.index'))->with('message', 'Congratulations,Record Updated Successfully');
            } else {
                return redirect(route('medal-list.index'))->with('message', 'There is something wrong Please try again.');
            }
        }
    }
// Create Slug
    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        $slug = Str::slug($title);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 100000000; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
        return MedalList::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }
    //CK Editor
    public function ckeditorUpload(Request $request)
    {
        $this->validate($request, [
            'upload' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('front/images/medal-list/ck/'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('front/images/medal-list/ck/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
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
        $delete = MedalList::find($id)->delete();
        if ($delete){
            return redirect()->route('medal-list.index')
                ->with('message','Medal List deleted successfully');
        }
        else{
            return redirect()->back()->with('warning','Medal List Can not be deleted');
        }
    }
}
