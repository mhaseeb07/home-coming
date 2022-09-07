@extends('front.layouts.app')
@section('title','TUF Convocation - The University of Faisalabad')
@section('content')

    <!-- Top Most Medals Banner -->
    <div id="page-banner-area" class="page-banner-area conv-instructions mb-5" style="background-image:url(../front/images/hero_area/banner_bg.png)">
        <!-- Subpage title start -->
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Medals List</h2>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Page Banner end -->
    <div class="container">
        @foreach($MLists as $list)
            {!! $list->description  !!}
        @endforeach
    </div>

@endsection
