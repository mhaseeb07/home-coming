@extends('admin.layouts.app')
@section('title','Edit guest')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit guest</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('guest.update',$guest->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Name *</label>
                        <input type="text" class="form-control" name="name" value="{{(isset($guest->name))?$guest->name:old('name')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">cnic *</label>
                        <input type="text" class="form-control" name="cnic" value="{{(isset($guest->cnic))?$guest->cnic:old('cnic')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">User *</label>
                        <select class="form-select form-control" id="userid" name="user_id">
                            <option value="">Please Select</option>
                            @if(count($users))
                                @foreach($users as $user)
                                    <option {{ ($guest->user_id == $user->id) ? 'selected="selected"' : '' }} value="{{$user->id}}">{{$user->name}} - {{$user->reg_no}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Relation *</label><select class="form-control" id="relation" name="relation">
                            <option value="">Please Select</option>
                            <option value="1" {{(isset($guest) && $guest->relation == 1 ? 'selected':'')}}>Father</option>
                            <option value="2" {{(isset($guest) && $guest->relation == 2 ? 'selected':'')}}>Mother</option>
                            <option value="3" {{(isset($guest) && $guest->relation == 3 ? 'selected':'')}}>Brother</option>
                            <option value="4" {{(isset($guest) && $guest->relation == 4 ? 'selected':'')}}>Sister</option>
                            <option value="5" {{(isset($guest) && $guest->relation == 5 ? 'selected':'')}}>Uncle</option>
                            <option value="6" {{(isset($guest) && $guest->relation == 6 ? 'selected':'')}}>Aunt</option>
                            <option value="7" {{(isset($guest) && $guest->relation == 7 ? 'selected':'')}}>Other</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Venue</label>
                        <select class="form-control" id="venue" name="venue">
                            <option value="">Please Select</option>
                            @if(count($venues))
                                @foreach($venues as $venue)
                                    <option value="{{$venue->id}}" {{ isset($guest->seat_id) && $guest->seat->venue->id == $venue->id ? 'selected' : '' }}>{{$venue->title}}</option>
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
                            <option {{ ($guest->vaccination_status == '0') ? 'selected="selected"' : '' }}  value="0">Not Vaccinated</option>
                            <option {{ ($guest->vaccination_status == '1') ? 'selected="selected"' : '' }} value="1">Partially Vaccinated</option>
                            <option {{ ($guest->vaccination_status == '2') ? 'selected="selected"' : '' }} value="2">Fully Vaccinated</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Vaccination Certificate</label>
                        <input type="file" class="form-control" name="vaccination_certificate">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Voucher Image</label>
                        <input type="file" class="form-control" name="voucher_image">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Amount</label>
                        <input type="text" class="form-control" name="amount" value="{{(isset($guest->amount))?$guest->amount:old('amount')}}">
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
    $(".form-select").select2();
    @if(isset($guest->seat_id))
    $(document).ready(function (){
        var idVenue = $('#venue').val();
        var idSeat = "{{$guest->seat->id}}";
        var guestId = "{{$guest->id}}";
        //Selected City
        $.ajax({
            url: "{{route('guestFetchSelectedSeats')}}",
            type: "POST",
            data: {
                venue: idVenue,
                guest: guestId,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
                $.each(result.seats, function (key, value) {
                    $("#seat").append('<option value="' + value
                        .id + '" '+(idSeat == value.id ? 'selected':'')+'>' + value.seat_no + '</option>');
                });
            }
        });
    })
    @endif
    $('#venue').on('change focus', function () {
        var idVenue = this.value;
        var guestId = "{{$guest->id}}";
        $("#seat").html('');
        $.ajax({
            url: "{{route('guestFetchSeats')}}",
            type: "POST",
            data: {
                venue: idVenue,
                guest: guestId,
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
