@extends('admin.layouts.app')
@section('title','Edit Medal List ')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit Medal List</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('medal-list.update',$MList->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title *</label>
                        <input type="text" class="form-control" name="title" value="{{(isset($MList->title))?$MList->title:old('title')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Medal Category *</label>
                        <select name="medal_cate" id="" class="form-control">
                            <option value="">Choose.</option>
                            @foreach($MLCate as $mlCate)
                                <option value="{{$mlCate->id}}"{{$mlCate->id == $MList->medal_cate ? 'selected' : '' }}>{{$mlCate->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Detail *</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="20">{{$MList->description}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="submit" class="btn btn-sm btn-success" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('admin/ckeditor')}}/ckeditor.js"></script>
    <script src="{{asset('admin/ckeditor')}}/ckfinder/ckfinder.js"></script>
    <script src="{{asset('admin/ckeditor')}}/samples/js/sample.js"></script>
    <script>
        $(document).ready(function() {
            var editor = CKEDITOR.replace( 'description', {
                filebrowserUploadUrl: "{{route('medal-list-ckeditor', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        });
    </script>
@endpush

