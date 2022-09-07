@extends('admin.layouts.app')
@section('title','Edit venue')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit venue</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('venue.update',$venue->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title *</label>
                        <input type="text" class="form-control" name="title" value="{{(isset($venue->title))?$venue->title:old('title')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date *</label>
                        <input type="date" class="form-control" name="date" value="{{(isset($venue->date))?$venue->date:old('date')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Time *</label>
                        <input type="text" class="form-control" name="time" value="{{(isset($venue->time))?$venue->time:old('time')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Campus *</label>
                        <select class="form-control" name="campus_id">
                            <option value="">Please Select</option>
                            @if(count($campuses))
                                @foreach($campuses as $campus)
                                    <option <?= ($venue->campus_id == $campus->id) ? 'selected="selected"' : '' ?> value="{{$campus->id}}">{{$campus->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Description *</label>
                        <input type="text" class="form-control" name="description" value="{{(isset($venue->description))?$venue->description:old('description')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{(isset($venue->address))?$venue->address:old('address')}}">
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
