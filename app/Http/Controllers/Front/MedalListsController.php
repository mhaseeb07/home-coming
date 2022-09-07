<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedalListCategory;
use App\Models\MedalList;

class MedalListsController extends Controller
{
    public function index($slug){
        $MListCate = MedalListCategory::where('slug' ,$slug)->first();
        $MLists = MedalList::where('medal_cate' , $MListCate->id)->where('status' , 'Active')->get();
        return view('front.medals.medal_list' , compact('MLists'));
    }
}
