@extends('candidate.layouts.app')
@section('title','Dashboard')
@section('content')
    <h3>Dashboard</h3>
    @if(isset($user->eligible) && $user->eligible[0]->amount == 2500)
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('downloadGatePassEligible',Auth::user()->id)}}" class="btn btn-upload">Candidate GatePass</a>
                @if(isset($user->guest))
                    @foreach($user->guest as $guest)
                        <a href="{{route('downloadGatePassGuest',$guest->id)}}" class="btn btn-upload">Guest GatePass</a>
                    @endforeach
                @endif
            </div>
        </div>
    @endif
@endsection
@push('js')
    <script>
        (function ($) {

        })(jQuery);
    </script>
@endpush
