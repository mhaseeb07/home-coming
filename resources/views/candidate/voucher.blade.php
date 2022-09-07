@extends('candidate.layouts.app')
@section('title','Upload')
@section('content')
    <div class="ts-contact-form">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <h3 class="dashboard-title">
                    Upload Voucher
                </h3>
                <form id="contact-form" class="contact-form" action="{{route('saveEligibleVoucher',$eligible->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Reg No</th>
                            <th scope="col">Degree Name</th>
                            <th scope="col">Voucher</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">{{(isset($eligible) ? $eligible->name : '')}}</td>
                            <td scope="row">{{(isset($eligible) ? $eligible->reg_no : '')}}</td>
                            <td scope="row">{{(isset($eligible) ? $eligible->degree_name : '')}}</td>
                            <td>
                                @if(isset($eligible->amount) && $eligible->amount == 2500)
                                    Paid
                                @else
                                    <a href="{{route('generateVoucher',$eligible->id)}}" class="upload-btn"><i class="fa fa-download"></i></a>
                                    <a href="#" class="upload-btn" data-toggle="modal" data-target="#voucher">
                                        <i class="fa fa-upload"></i>
                                    </a>
                                    @if(isset($eligible->voucher_image))
                                        <a href="{{ asset('voucher').'/'.$eligible->voucher_image}}" target="_blank" class="upload-btn"><i class="fa fa-download"></i></a>
                                    @endif
                                @endif
                            </td>
                        </tr>
                        <div class="modal fade" id="voucher" tabindex="-1" role="dialog" aria-labelledby="voucher" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload Voucher</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Voucher Image *</label>
                                                    <input type="file" class="form-control form-control-name" name="voucher_image">
                                                    @error('voucher_image')
                                                    <div class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn" type="submit">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </tbody>
                    </table>
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
