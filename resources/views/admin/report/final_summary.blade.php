@extends('admin.layouts.app')
@section('title','Final Summary')
@section('content')
    <style>
        @media print {
            .row{
                background: red;
            }
        }
    </style>
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">Final Summary</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9 mb-2">
                            <form method="get" action="{{route('finalSummary')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3 mb-3">
                                        <label class="form-label">Session</label>
                                        <select name="session_id" class="form-control">
                                            @foreach($sessions as $session)
                                                <option value="{{$session->id}}" {{((Request()->session_id == $session->id)?'selected':'')}}>{{$session->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 final-summary-btn">
                                        <button type="submit" class="btn btn-success">Get Result</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 final-summary-btn text-end">
                            <button type="button" id="printIt" class="btn btn-warning">Print</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- End Row-->
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body"  id="printData">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="text-center my-3">
                                <h2>Final Summary</h2>
                            </div>
                            <div class="text-center my-3">
                                <h4>Eligibles</h4>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>All Eligibles</h6></div>
                                <div class="col p-1 pl-2 border">{{$eligibles}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Registered</h6></div>
                                <div class="col p-1 pl-2 border">{{$registered}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Non Registered</h6></div>
                                <div class="col p-1 pl-2 border">{{$notRegistered}}</div>
                            </div>
                            <div class="text-center my-3">
                                <h4>Registered Eligibles</h4>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Registration</h6></div>
                                <div class="col p-1 pl-2 border">{{$registered}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Paid Registration</h6></div>
                                <div class="col p-1 pl-2 border">{{$paidRegistered}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Unpaid Registration</h6></div>
                                <div class="col p-1 pl-2 border">{{$notPaidRegistered}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Fully Vaccinated</h6></div>
                                <div class="col p-1 pl-2 border">{{$fullyVacinated}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Partially Vaccinated</h6></div>
                                <div class="col p-1 pl-2 border">{{$partiallyVacinated}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Non Vaccinated</h6></div>
                                <div class="col p-1 pl-2 border">{{$notVacinated}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total With Guests</h6></div>
                                <div class="col p-1 pl-2 border">{{$totalWithGuests}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total With Out Guests</h6></div>
                                <div class="col p-1 pl-2 border">{{$totalWithOutGuests}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Attendee</h6></div>
                                <div class="col p-1 pl-2 border">{{$attendees}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Full Regalia Returned</h6></div>
                                <div class="col p-1 pl-2 border">{{$regaliaReurned}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Partially Regalia Returned</h6></div>
                                <div class="col p-1 pl-2 border">{{$partiallyRegaliaReurned}}</div>
                            </div>
                            <div class="text-center my-3">
                                <h4>Registered Guests</h4>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Guests</h6></div>
                                <div class="col p-1 pl-2 border">{{$totalGuests}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Extra Guests</h6></div>
                                <div class="col p-1 pl-2 border">{{$totalExtraGuests}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Fully Vaccinated</h6></div>
                                <div class="col p-1 pl-2 border">{{$fullyVaccinatedGuest}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Partially Vaccinated</h6></div>
                                <div class="col p-1 pl-2 border">{{$partiallyVaccinatedGuest}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Non Vaccinated</h6></div>
                                <div class="col p-1 pl-2 border">{{$notVaccinatedGuest}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Total Attendee</h6></div>
                                <div class="col p-1 pl-2 border">{{$guestAttendees}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(function (){
            function printData() {
                var panel = document.getElementById("printData");
                var printWindow = window.open('', '', '');
                // Make sure the relative URL to the stylesheet works:
                printWindow.document.write('<base href="' + location.origin + location.pathname + '">');

                // Add the stylesheet link and inline styles to the new document:
                printWindow.document.write('<link rel="stylesheet" href="{{asset('admin/css/bootstrap.css')}}" media="screen,print"/>');

                printWindow.document.write('</head><body class="container">');
                printWindow.document.write(panel.innerHTML);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                setTimeout(function () {
                    printWindow.print();
                }, 500);
                return false;
            }
            $('#printIt').on('click',function(){
                printData();
            })
        });
    </script>
@endpush
