@extends('admin.layouts.app')
@section('title','Entry Report')
@section('content')
    <style>
        @media print {
            .row{
                background: red;
            }
        }
    </style>
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">Barrier Report</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
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
                                <h2>Users</h2>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Not Entered</h6></div>
                                <div class="col p-1 pl-2 border">{{$notEntered}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Crossed Barrier 1</h6></div>
                                <div class="col p-1 pl-2 border">{{$enteredGate1}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Crossed Barrier 2</h6></div>
                                <div class="col p-1 pl-2 border">{{$enteredGate2}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Crossed Barrier 3</h6></div>
                                <div class="col p-1 pl-2 border">{{$enteredGate3}}</div>
                            </div>
                            <div class="text-center my-3">
                                <h2>Guests</h2>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Not Entered</h6></div>
                                <div class="col p-1 pl-2 border">{{$notEnteredGuest}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Crossed Barrier 1</h6></div>
                                <div class="col p-1 pl-2 border">{{$enteredGuestGate1}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Crossed Barrier 2</h6></div>
                                <div class="col p-1 pl-2 border">{{$enteredGuestGate2}}</div>
                            </div>
                            <div class="row">
                                <div class="col p-1 ps-2 border"><h6>Crossed Barrier 3</h6></div>
                                <div class="col p-1 pl-2 border">{{$enteredGuestGate3}}</div>
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
