@extends('admin.layouts.app')
@section('title','Add New Eligibles')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <div>
            <h1 class="h3 d-inline">Add Eligible</h1>
            <span class="pull-right">
                <a class="btn btn-primary btn_hide"><i class="fa fa-refresh"></i></a>
                <a class="btn btn-primary btn_show display-off"><i class="fa fa-refresh"></i></a>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

        <form action="{{route('eligibles.store')}}" class="add_number" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Full Name *</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Registration No *</label>
                    <input type="text" class="form-control" name="reg_no" value="{{old('reg_no')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">CNIC *</label>
                    <input type="text" class="form-control cnic" name="cnic" value="{{old('cnic')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Email *</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Degree Name</label>
                    <input type="text" class="form-control" name="degree_name" value="{{old('degree_name')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Passout Session</label>
                    <input type="text" class="form-control" name="passout_session" value="{{old('passout_session')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Passout Year</label>
                    <input type="text" class="form-control" name="passout_year" value="{{old('passout_year')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Student Id ERP</label>
                    <input type="text" class="form-control" name="student_id_erp" value="{{old('student_id_erp')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Campus *</label>
                    <select class="form-control" name="campus_id">
                        <option value="">Please Select</option>
                        @if(count($campues))
                            @foreach($campues as $campus)
                                <option value="{{$campus->id}}">{{$campus->name}}</option>
                            @endforeach
                        @endif
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
                    <label class="form-label">eligible Types *</label>
                    <select class="form-control" name="eligible_type_id">
                        <option value="">Please Select</option>
                        @if(count($eligibleTypes))
                            @foreach($eligibleTypes as $eligibleType)
                                <option value="{{$eligibleType->id}}">{{$eligibleType->title}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Status *</label>
                    <select class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Deactivate</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Amount</label>
                    <select class="form-control" name="amount">
                        <option value="">Please Select</option>
                        <option value="2500">Paid (2500)</option>
                        <option value="0">No Paid (0)</option>
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
                    <label class="form-label">Medals</label>
                    <select class="form-control" name="medal_id">
                        <option value="">Please Select</option>
                        @if(count($medals))
                            @foreach($medals as $medal)
                                <option value="{{$medal->id}}">{{$medal->title}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Father Name</label>
                    <input type="text" class="form-control" name="father_name" value="{{old('father_name')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Father CNIC</label>
                    <input type="text" class="form-control father_cnic" name="father_cnic" value="{{old('father_cnic')}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{old('address')}}">
                </div>
                <div class="col-md-12 mb-3">
                    <input type="submit" class="btn btn-sm btn-success" value="Add New">
                </div>
            </div>
        </form>

        <form action="{{route('eligible-csv-upload')}}" class="add_csv display-off" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">eligible Types</label>
                    <select class="form-control" name="eligible_type_id">
                        <option value="">Please Select</option>
                        @if(count($eligibleTypes))
                            @foreach($eligibleTypes as $eligibleType)
                                <option value="{{$eligibleType->id}}">{{$eligibleType->title}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-control" name="status" required>
                        <option value="1">Active</option>
                        <option value="0">Deactivate</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Upload .CSV File *</label>
                    <input type="file" class="form-control" name="csvimport" value="{{old('name')}}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <input type="submit" class="btn btn-sm btn-success" value="Add New">
                    <a class="pull-right" href="{{asset('admin/images/csvSampleFile.png')}}" target="_blank"><input type="button" class="btn btn-sm btn-primary" value="Import File Sample"></a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('js')
<script>
(function (){
    $('.btn_hide').click(function(){
        $('.add_csv').addClass('d-block');
        $('.btn_show').addClass('d-block');
        $('.add_csv').show()
        $('.add_number').hide()
        $('.btn_hide').hide()

    });
    $('.btn_show').click(function(){
        $('.add_csv').removeClass('d-block')
        $('.btn_show').removeClass('d-block')
        $('.add_csv').hide()
        $('.add_number').show()
        $('.btn_hide').show()

    });
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
    $('.cnic').inputmask('9999999999999');
    $('.father_cnic').inputmask('9999999999999');
    }());
</script>
@endpush
