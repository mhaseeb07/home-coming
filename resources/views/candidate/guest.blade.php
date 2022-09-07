@extends('candidate.layouts.app')
@section('title','Guest')
@section('content')
    <div class="ts-contact-form">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <h3 class="dashboard-title">
                    Guest Information
                </h3>
                <form id="contact-form" class="contact-form" action="{{route('saveEligibleGuest',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control form-control-name" name="name" value="{{(isset($guest) ? $guest->name:old('name'))}}">
                                @error('name')
                                <div class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cnic# *</label>
                                <input type="text" class="form-control form-control-name" name="cnic" value="{{(isset($guest) ? $guest->cnic:old('cnic'))}}">
                                @error('cnic')
                                <div class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Number *</label>
                                <input type="text" class="form-control form-control-name" name="contact_number" value="{{(isset($guest) ? $guest->contact_number:old('contact_number'))}}">
                                @error('contact_number')
                                <div class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Relation *</label>
                                <select name="relation" class="form-control form-control-name">
                                    <option value="">Please Select</option>
                                    <option value="1" {{(isset($guest) && $guest->relation == 1 ? 'selected':'')}}>Father</option>
                                    <option value="2" {{(isset($guest) && $guest->relation == 2 ? 'selected':'')}}>Mother</option>
                                    <option value="3" {{(isset($guest) && $guest->relation == 3 ? 'selected':'')}}>Brother</option>
                                    <option value="4" {{(isset($guest) && $guest->relation == 4 ? 'selected':'')}}>Sister</option>
                                    <option value="5" {{(isset($guest) && $guest->relation == 5 ? 'selected':'')}}>Uncle</option>
                                    <option value="6" {{(isset($guest) && $guest->relation == 6 ? 'selected':'')}}>Aunt</option>
                                    <option value="7" {{(isset($guest) && $guest->relation == 7 ? 'selected':'')}}>Other</option>
                                </select>
                                @error('relation')
                                <div class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
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
                        @if(isset($guest->vaccination_certificate))
                        <div class="col-md-2 mtop-37">
                            <a class="btn" href="{{ asset('vaccination/guest/'.$guest->vaccination_certificate)}}" target="_blank"><i class="fa fa-eye"></i></a>
                        </div>
                        @endif
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Covid Vaccination Status *</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="radio-inline">
                                            <input type="radio" name="vaccination_status" value="2" {{(isset($guest) && $guest->vaccination_status == 2 ? 'checked':'')}}>
                                            <span class="ml-2">Fully Vaccinated</span>
                                        </label>
                                        <label class="radio-inline ml-2">
                                            <input type="radio" name="vaccination_status" value="1" {{(isset($guest) && $guest->vaccination_status == 1 ? 'checked':'')}}>
                                            <span class="ml-2">Partially Vaccinated</span>
                                        </label>
                                        <label class="radio-inline ml-2">
                                            <input type="radio" name="vaccination_status" value="0" {{(isset($guest) && $guest->vaccination_status == 0 ? 'checked':'')}}>
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
