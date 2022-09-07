@extends('admin.layouts.app')
@section('title','Edit')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit Eligible Account</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('account.update',$eligible->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Name *</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{(isset($eligible->name))?$eligible->name:old('name')}}">
                        @error('name')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Reg No#</label>
                        <input type="text" class="form-control @error('reg_no') is-invalid @enderror" name="reg_no" value="{{(isset($eligible->reg_no))?$eligible->reg_no:old('reg_no') }}">
                        @error('reg_no')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Paid Status</label>
                        <select class="form-control @error('amount') is-invalid @enderror" name="amount">
                        <option value="">Please Select</option>
                        <option {{ ($eligible->amount == 2500) ? 'selected="selected"' : '' }} value="2500">Paid</option>
                        <option {{ ($eligible->amount == 0) ? 'selected="selected"' : '' }} value="0">No Paid</option>
                    </select>
                        @error('amount')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Voucher Image</label>
                        <input type="file" class="form-control" name="voucher_image">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Remarks</label>
                        <textarea name="remark" class="form-control">{{(isset($eligible->remark))?$eligible->remark:old('remark')}}</textarea>
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
