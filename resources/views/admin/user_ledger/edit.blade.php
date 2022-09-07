@extends('admin.layouts.app')
@section('title','Edit User Ledger')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h3">Edit User Ledger</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('users-ledger-list.update',$userLedgerEdit->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Payment *</label>
                        <input type="text" class="form-control" name="payment" value="{{(isset($userLedgerEdit->payment))?$userLedgerEdit->payment:old('payment')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Description </label>
                        <input type="text" class="form-control" name="description" value="{{(isset($userLedgerEdit->description))?$userLedgerEdit->description:old('description')}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Regalia Amount</label>
                        <select class="form-control" id="amount" name="regalia_id" required>
                            <option value="">Please Select</option>
                            @if(count($regalias))
                                @foreach($regalias as $regalia)
                                <option {{ ($userLedgerEdit->regalia_id == $regalia->id) ? 'selected="selected"' : '' }} value="{{$regalia->id}}">{{ $regalia->name}} - {{$regalia->amount}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">User *</label>
                        <select class="form-select form-control" id="userid" name="user_id" required>
                            <option value="">Please Select</option>
                            @if(count($users))
                                @foreach($users as $user)
                                    <option {{ ($userLedgerEdit->user_id == $user->id) ? 'selected="selected"' : '' }} value="{{$user->id}}">{{$user->name}} - {{$user->reg_no}}</option>
                                @endforeach
                            @endif
                        </select>
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
