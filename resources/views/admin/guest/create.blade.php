@extends('admin.layouts.app')
@section('title','Add New Guest')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Add Guest</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('guest.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Name *</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">cnic *</label>
                        <input type="text" class="form-control" name="cnic" value="{{old('cnic')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">User *</label>
                        <select class="form-select form-control" name="user_id" data-placeholder="Please Select User" data-allow-clear="1">
                            <option></option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}} - {{$user->reg_no}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Relation *</label><select class="form-control" id="relation" name="relation">
                            <option value="">Please Select</option>
                            <option value="1">Father</option>
                            <option value="2">Mother</option>
                            <option value="3">Brother</option>
                            <option value="4">Sister</option>
                            <option value="5">Uncle</option>
                            <option value="6">Aunt</option>
                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Venue</label>
                        <select class="form-control" id="venue" name="venue">
                            <option value="">Please Select</option>
                            @if(count($venues))
                                @foreach($venues as $venue)
                                    <option value="{{$venue->id}}">{{$venue->title}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Seat</label>
                        <select class="form-control" id="seat" name="seat_id">
                            <option value="">Please Select</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Vaccination Status *</label>
                        <select class="form-control" name="vaccination_status">
                            <option value="">Please Select</option>
                            <option value="0">Not Vaccinated</option>
                            <option value="1">Partially Vaccinated</option>
                            <option value="2">Fully Vaccinated</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Vaccination Certificate</label>
                        <input type="file" class="form-control" name="vaccination_certificate" value="{{old('vaccination_certificate')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Voucher Image</label>
                        <input type="file" class="form-control" name="voucher_image" value="{{old('voucher_image')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Amount</label>
                        <input type="text" class="form-control" name="amount" value="{{old('amount')}}">
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
<script>
(function (){
    $(".form-select").select2();
    $('#venue').on('change focus', function () {
        var idVenue = this.value;
        $("#seat").html('');
        $.ajax({
            url: "{{route('fetchSeats')}}",
            type: "POST",
            data: {
                venue: idVenue,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
                $('#seat').html('<option value="">Select Seat</option>');
                $.each(result.seats, function (key, value) {
                    $("#seat").append('<option value="' + value
                        .id + '" >' + value.seat_no + '</option>');
                });
            }
        });
    });
    }());
</script>
@endpush
