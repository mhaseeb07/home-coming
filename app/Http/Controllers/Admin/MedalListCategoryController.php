<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedalListCategory;
use Illuminate\Support\Str;
use Auth;
use App\User;

class MedalListCategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:medal-list-category-list', ['only' => ['index']]);
        $this->middleware('permission:medal-list-category-create', ['only' => ['create','store']]);
        $this->middleware('permission:medal-list-category-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:medal-list-category-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.medal_list_category.index');
    }
    public function GetMedalCate(Request $request){
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

        $totalRecords = MedalListCategory::select('count(*) as allcount')
                ->leftJoin('users','users.id','=','medal_list_category.created_by')
                ->where(function($q) use($searchValue){
                    $q->where('medal_list_category.title', 'like', '%' .$searchValue . '%')
                    ->orWhere('users.name', 'like', '%' .$searchValue . '%');
                })
                ->orderBy('id', 'DESC')
                ->count();


            $totalRecordswithFilter = MedalListCategory::select('count(*) as allcount')
                ->leftJoin('users','users.id','=','medal_list_category.created_by')
                ->where(function($q) use($searchValue){
                    $q->where('medal_list_category.title', 'like', '%' .$searchValue . '%')
                    ->orWhere('users.name', 'like', '%' .$searchValue . '%');
                })
                ->orderBy('id', 'DESC')
                ->count();

        // Fetch records
        $records = MedalListCategory::orderBy($columnName,$columnSortOrder)
            ->leftJoin('users','users.id','=','medal_list_category.created_by')
            ->where(function($q) use($searchValue){
                $q->where('medal_list_category.title', 'like', '%' .$searchValue . '%')
                ->orWhere('users.name', 'like', '%' .$searchValue . '%');
            })
            ->select('medal_list_category.*')
            ->orderBy('id', 'DESC')
            ->skip($start)
            ->take($rowperpage)
            ->get();


        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $title = $record->title;
            $createdBy = User::where('id', $record->created_by)->pluck('name','name')->first();
            $updatedBy = User::where('id', $record->updated_by)->pluck('name','name')->first();
            $data_arr[] = array(
                "id" => $id,
                "title" => $title,
                "created_by"=> $createdBy,
                "updated_by"=> $updatedBy,
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
        return view('admin.medal_list_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:medal_list_category',
        ]);
        $medalCate = new MedalListCategory();
        $medalCate->title   = $request->title;
        $medalCate['slug'] = $this->createSlug($request->title);
        $medalCate->created_by = Auth::user()->id;
        $save = $medalCate->save();
        if ($save){
        return redirect()->route('medal-category.index')->with('success', 'Medal category Created Successfully.');
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
        $MLCate = MedalListCategory::find($id);
        return view('admin.medal_list_category.edit' , compact('MLCate'));
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
        $Data_MLCate = MedalListCategory::findOrFail($id);
        $Update_MLCate = $request->all();
        $Update_MLCate['updated_by'] =  Auth::user()->id;
        $request->validate([
            'title' =>  'required|unique:medal_list_category,title,'.$id,
        ]);
        $Update = $Data_MLCate->update($Update_MLCate);
        if($Update){
            return redirect(route('medal-category.index'))->with('message','Congratulations,Record Updated Successfully');
          }else{
            return redirect(route('medal-category.index'))->with('message','There is something wrong Please try again.');
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
        return MedalListCategory::select('slug')->where('slug', 'like', $slug.'%')
        ->where('id', '<>', $id)
        ->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = MedalListCategory::find($id)->delete();
        if ($delete){
            return redirect()->route('medal-category.index')
                ->with('message','Session deleted successfully');
        }
        else{
            return redirect()->back()->with('warning','Active Session Can not be deleted');
        }
    }
}
