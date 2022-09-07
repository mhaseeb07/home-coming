@extends('front.layouts.app')
@section('title','TUF Convocation - The University of Faisalabad')
@section('content')

        <!-- Top Most Medals Banner -->
        <div id="page-banner-area" class="page-banner-area conv-instructions mb-5" style="background-image:url(front/images/hero_area/banner_bg.png)">
                <!-- Subpage title start -->
                <div class="page-banner-title">
                    <div class="text-center">
                    <h2>Students List</h2>
                    </div>
                </div><!-- Subpage title end -->
        </div><!-- Page Banner end -->
        <div class="row"> <!--Medals List Row Starts Here -->
            <div class="col-md-12 col-12"> <!--Col Start -->
                <div class="toper-text text-center">
                    <h2>UMDC Students List</h2>
                </div>
            </div> <!--Col Ends -->
        <div class="container mb-3">
            <div class="table-responsive">
                <table class="table table-striped table-sm dataTable">
                    <thead>

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Degree Name</th>
                            <th scope="col">Session</th>
                            <th scope="col">Reg.No.</th>
                            <th scope="col">Name</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        </div><!--Medals List Row Ends Here -->

@endsection
@push('js')
<script>
        $(function (){
            var t = $('.dataTable').DataTable({
                processing: true,
                serverSide: true,
                order:[[0,'desc']],
                ajax: "{{route('getUMDCStudents')}}",
                columns: [
                    { data: 'id' },
                    { data: 'degree_name' },
                    { data: 'passout_session' },
                    { data: 'reg_no'},
                    { data: 'name'},
                ],
                columnDefs: [
                    {
                        render: function ( data, type, row,meta ) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        searchable:false,
                        orderable:true,
                        targets: 0
                    },
                ]
            });
        });
    </script>
@endpush
