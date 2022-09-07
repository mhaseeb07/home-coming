@extends('admin.layouts.app')
@section('title','Edit Seats')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit Seats</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('conv-seats.update',$seats->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                <div class="col-md-6 mb-3">
                        <label class="form-label">Seat No *</label>
                        <input type="text" class="form-control" name="seat_no" value="{{(isset($seats->seat_no))?$seats->seat_no:old('seat_no')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Venue</label>
                        <select class="form-control" name="venue_id" required>
                            <option value="">Please Select</option>
                            @if(count($venue))
                                @foreach($venue as $venues)
                                    <option <?= ($seats->venue_id == $venues->id) ? 'selected="selected"' : '' ?> value="{{$venues->id}}">{{$venues->title}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{(isset($seats->description))?$seats->description:old('description')}}">
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
@endpush
