@extends('admin.layouts.app')
@section('title','Add New Seat')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Add Seat</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('conv-seats.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Seat No *</label>
                        <input type="text" class="form-control" name="seat_no" value="{{old('seat_no')}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Venue</label>
                        <select class="form-control" name="venue_id" required>
                            <option value="">Please Select</option>
                            @if(count($venue))
                                @foreach($venue as $venues)
                                    <option value="{{$venues->id}}">{{$venues->title}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{old('description')}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="submit" class="btn btn-sm btn-success" value="Add New">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
@endpush
