@extends('admin.layouts.app')
@section('title','Edit Eligible')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit Eligible</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('eligibles.update',$eligible->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                <div class="col-md-4 mb-3">
                        <label class="form-label">Full Name *</label>
                        <input type="text" class="form-control" name="name" value="{{(isset($eligible->name))?$eligible->name:old('name')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Registration No *</label>
                        <input type="text" class="form-control" name="reg_no" value="{{(isset($eligible->reg_no))?$eligible->reg_no:old('reg_no')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">CNIC *</label>
                        <input type="text" class="form-control cnic" name="cnic" value="{{(isset($eligible->cnic))?$eligible->cnic:old('cnic')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Email *</label>
                        <input type="email" class="form-control" name="email" value="{{(isset($eligible->email))?$eligible->email:old('email')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Degree Name</label>
                        <input type="text" class="form-control" name="degree_name" value="{{(isset($eligible->degree_name))?$eligible->degree_name:old('degree_name')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Passout Session</label>
                        <input type="text" class="form-control" name="passout_session" value="{{(isset($eligible->passout_session))?$eligible->passout_session:old('passout_session')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Passout Year</label>
                        <input type="text" class="form-control" name="passout_year" value="{{(isset($eligible->passout_year))?$eligible->passout_year:old('passout_year')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Student Id ERP</label>
                        <input type="text" class="form-control" name="student_id_erp" value="{{(isset($eligible->student_id_erp))?$eligible->student_id_erp:old('student_id_erp')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Campus *</label>
                        <select class="form-control" name="campus_id">
                            <option value="">Please Select</option>
                            @if(count($campues))
                                @foreach($campues as $campus)
                                    <option <?= ($eligible->campus_id == $campus->id) ? 'selected="selected"' : '' ?> value="{{$campus->id}}">{{$campus->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Vaccination Status *</label>
                        <select class="form-control" name="vaccination_status">
                            <option value="">Please Select</option>
                            <option {{ ($eligible->vaccination_status == 0) ? 'selected="selected"' : '' }} value="0">Not Vaccinated</option>
                            <option {{ ($eligible->vaccination_status == 1) ? 'selected="selected"' : '' }} value="1">Partially Vaccinated</option>
                            <option {{ ($eligible->vaccination_status == 2) ? 'selected="selected"' : '' }} value="2">Fully Vaccinated</option>
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
                        <label class="form-label">eligible Types *</label>
                        <select class="form-control" name="eligible_type_id">
                            <option value="">Please Select</option>
                            @if(count($eligibleTypes))
                                @foreach($eligibleTypes as $eligibleType)
                                    <option <?= ($eligible->eligible_type_id == $eligibleType->id) ? 'selected="selected"' : '' ?> value="{{$eligibleType->id}}">{{$eligibleType->title}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Status *</label>
                        <select class="form-control" name="status">
                            <option {{ ($eligible->status == 1) ? 'selected="selected"' : '' }} value="1">Active</option>
                            <option {{ ($eligible->status == 0) ? 'selected="selected"' : '' }} value="0">Deactivate</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Amount</label>
                        <input type="text" class="form-control" name="amount" value="{{(isset($eligible->amount))?$eligible->amount:old('amount')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Venue</label>
                        <select class="form-control" id="venue" name="venue">
                            <option value="">Please Select</option>
                            @if(count($venues))
                                @foreach($venues as $venue)
                                    <option value="{{$venue->id}}" {{ isset($eligible->seat_id) && $eligible->seat->venue->id == $venue->id ? 'selected' : '' }}>{{$venue->title}}</option>
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
                        <label class="form-label">Medals</label>
                        <select class="form-control" name="medal_id">
                            <option value="">Please Select</option>
                            @if(count($medals))
                                @foreach($medals as $medal)
                                    <option <?= ($eligible->medal_id == $medal->id) ? 'selected="selected"' : '' ?> value="{{$medal->id}}">{{$medal->title}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Father Name</label>
                        <input type="text" class="form-control" name="father_name" value="{{(isset($eligible->father_name))?$eligible->father_name:old('father_name')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Father CNIC</label>
                        <input type="text" class="form-control father_cnic" name="father_cnic" value="{{(isset($eligible->father_cnic))?$eligible->father_cnic:old('father_cnic')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{(isset($eligible->address))?$eligible->address:old('address')}}">
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
    @if(isset($eligible->seat_id))
    $(document).ready(function (){
        var idVenue = $('#venue').val();
        var idSeat = "{{$eligible->seat->id}}";
        var eligibleId = "{{$eligible->id}}";
        //Selected City
        $.ajax({
            url: "{{route('fetchSelectedSeats')}}",
            type: "POST",
            data: {
                venue: idVenue,
                eligible: eligibleId,
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
        var eligibleId = "{{$eligible->id}}";
        $("#seat").html('');
        $.ajax({
            url: "{{route('fetchSelectedSeats')}}",
            type: "POST",
            data: {
                venue: idVenue,
                eligible: eligibleId,
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


        $('.cnic').inputmask('9999999999999');
        $('.father_cnic').inputmask('9999999999999');
    }());
</script>
@endpush
