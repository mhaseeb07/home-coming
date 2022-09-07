@extends('candidate.layouts.app')
@section('title','Personal')
@section('content')
    <div class="ts-contact-form">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <h3 class="dashboard-title">
                    Personal Information
                </h3>
                <form id="contact-form" class="contact-form" action="{{route('savePersonal',$eligible->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Contact Information</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact No (Residence)</label>
                                <input type="text" class="form-control form-control-name" name="contact_no_residence" value="{{(isset($eligible->contact_no_residence) ? $eligible->contact_no_residence:old('contact_no_residence'))}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cell No *</label>
                                <input type="text" class="form-control form-control-name" name="cell_no" value="{{(isset($eligible->cell_no) ? $eligible->cell_no:old('cell_no'))}}">
                                @error('cell_no')
                                <div class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4>Employment / Association Status</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name of Institution / Organization</label>
                                <input type="text" class="form-control form-control-name" name="name_of_institution" value="{{(isset($eligible->name_of_institution) ? $eligible->name_of_institution:old('name_of_institution'))}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control form-control-name" name="designation" value="{{(isset($eligible->designation) ? $eligible->designation:old('designation'))}}">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h4>Covid Vaccination Status</h4>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Vaccination Certificate *</label>
                                <input type="file" class="form-control form-control-name" name="vaccination_certificate">
                                @error('vaccination_certificate')
                                <div class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        @if(isset($eligible->vaccination_certificate))
                        <div class="col-md-2 mtop-37">
                            <a class="btn" href="{{ asset('vaccination/'.$eligible->vaccination_certificate)}}" target="_blank"><i class="fa fa-eye"></i></a>
                        </div>
                        @endif
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Covid Vaccination Status *</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="radio-inline">
                                            <input type="radio" name="vaccination_status" value="2" {{(isset($eligible->vaccination_status) && $eligible->vaccination_status == 2 ? 'checked':'')}}>
                                            <span class="ml-2">Fully Vaccinated</span>
                                        </label>
                                        <label class="radio-inline ml-2">
                                            <input type="radio" name="vaccination_status" value="1" {{(isset($eligible->vaccination_status) && $eligible->vaccination_status == 1 ? 'checked':'')}}>
                                            <span class="ml-2">Partially Vaccinated</span>
                                        </label>
                                        <label class="radio-inline ml-2">
                                            <input type="radio" name="vaccination_status" value="0" {{(isset($eligible->vaccination_status) && $eligible->vaccination_status == 0 ? 'checked':'')}}>
                                            <span class="ml-2">Not Vaccinated</span>
                                        </label>
                                        @error('vaccination_status')
                                        <div class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn" type="submit">Save & Next</button>
                </form><!-- Contact form end -->
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        (function ($) {

        })(jQuery);
    </script>
@endpush
