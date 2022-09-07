@extends('admin.layouts.app')
@section('title','Edit Session')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit Session</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('session.update',$session->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Session *</label>
                        <input type="text" class="form-control" name="title" value="{{(isset($session->title))?$session->title:old('title')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Description *</label>
                        <input type="text" class="form-control" name="description" value="{{(isset($session->description))?$session->description:old('description')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Session Year *</label>
                        <input type="text" class="form-control" name="session_year" value="{{(isset($session->session_year))?$session->session_year:old('session_year')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status *</label>
                        <select class="form-control" name="status">
                            <option <?= ($session->status == '1') ? 'selected="selected"' : '' ?> value="1">Active</option>
                            <option <?= ($session->status == '0') ? 'selected="selected"' : '' ?> value="0">Reject</option>
                        </select>
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
<script>
(function (){
        $('.cnic').inputmask('9999999999999');
        $('.father_cnic').inputmask('9999999999999');
    }());
</script>
@endpush
