@extends('admin.layouts.app')
@section('title','Add New User Ledger')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Add User Ledger</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('users-ledger-list.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Payment *</label>
                        <input type="text" class="form-control" name="payment" value="{{old('payment')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Description </label>
                        <input type="text" class="form-control" name="description" value="{{old('description')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">User *</label>
                        <select class="form-select form-control" name="user_id" id="users" data-placeholder="Please Select User" data-allow-clear="1">
                            <option></option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}} - {{$user->reg_no}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Regalia *</label>
                        <select class="form-select form-control" name="regalia_id" data-placeholder="Please Select Regalia Amount" data-allow-clear="1">
                            <option></option>
                            @foreach($regalias as $regalia)
                                <option value="{{$regalia->id}}">{{ $regalia->name}} - {{$regalia->amount}}</option>
                            @endforeach
                        </select>
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

    }());
</script>
@endpush
