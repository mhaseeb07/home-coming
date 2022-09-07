@extends('admin.layouts.app')
@section('title','Registered guests')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">All Registered guests</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Guest Name</th>
                <th scope="col">CNIC</th>
                <th scope="col">Relation</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Candidate Reg#</th>
                <th scope="col">Guest Type</th>
                <th scope="col">Voucher Image</th>
                <th scope="col">Vaccination Status</th>
                <th scope="col">Vaccination Certificate Image</th>


                <th scope="col">Candidate CNIC</th>
                <th scope="col">Candidate Degree Name</th>
                <th scope="col">Candidate Contact#</th>
                <th scope="col">Candidate Cell#</th>
                <th scope="col">Candidate Passout Session</th>
                <th scope="col">Candidate Passout Year</th>
                <th scope="col">Candidate Campus</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection
@push('js')
    <script>
        $(function (){
            var t = $('.dataTable').DataTable({
                responsive: true,
                lengthChange: true,
                autoWidth: false,
                dom: '<"top"<B><f>><"top-Panding-col"l>rtip',
                aLengthMenu: [
                    [10, 25, 50, 100, 5000],
                    [10, 25, 50, 100, "All"]
                ],
                iDisplayLength: 10,
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                processing: true,
                serverSide: true,
                order:[[0,'desc']],
                ajax: "{{route('getregisterGuests')}}",
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'cnic' },
                    { data: null },
                    { data: 'user_id' },
                    { data: 'reg_no' },
                    { data: null },
                    { data: null},
                    { data: null },
                    { data: null},
                    { data: null},
                    { data: null},
                    { data: null},
                    { data: null},
                    { data: null},
                    { data: null},
                    { data: null }
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
                    {
                        render: function ( data, type, row,meta ) {
                            if(data.relation == 1){
                                return 'Father';
                            }if (data.relation == 2) {
                                return 'Mother';
                            }if (data.relation == 3) {
                                return 'Brother';
                            }if (data.relation == 4) {
                                return 'Sister';
                            }if (data.relation == 5) {
                                return 'Uncle';
                            }if (data.relation == 6) {
                                return 'Aunt';
                            }if (data.relation == 7) {
                                return 'Other';
                            }else{
                                return '';
                            }
                        },
                        searchable:false,
                        orderable:false,
                        targets: 3
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            if(data.vaccination_status == 1){
                                return 'Partially Vaccinated';
                            }else if (data.vaccination_status == 2) {
                                return 'Fully Vaccinated';
                            }else{
                                return 'Not Vaccinated';
                            }
                        },
                        searchable:true,
                        orderable:false,
                        targets: 8
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            if(data.amount == 0){
                                return 'Allowed';
                            }else{
                                return 'Extra';
                            }
                        },
                        searchable:true,
                        orderable:false,
                        targets: 6
                    },
                    {
                        render: function (data,type,row,meta) {
                            var voucher_image ='{{ asset('voucher/guest')}}/'+data.voucher_image;
                            if(data.voucher_image) {
                                return '<a href="' + voucher_image + '" target="_blank"><i class="fa fa-download"></i></a>';
                            }
                            else{
                                return null;
                            }
                        },
                        searchable:false,
                        orderable:false,
                        targets: 7
                    },
                    {
                        render: function (data,type,row,meta) {
                            var vaccination_certificate ='{{ asset('vaccination/guest')}}/'+data.vaccination_certificate;
                            if(data.vaccination_certificate) {
                                return '<a href="' + vaccination_certificate + '" target="_blank"><i class="fa fa-download"></i></a>';
                            }
                            else{
                                return null;
                            }
                        },
                        searchable:false,
                        orderable:false,
                        targets: 9
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            return data.cad_cnic;
                        },
                        searchable:true,
                        orderable:false,
                        targets: 10
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            return data.cad_degree_name;
                        },
                        searchable:true,
                        orderable:false,
                        targets: 11
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            return data.cad_contact_no_residence;
                        },
                        searchable:true,
                        orderable:false,
                        targets: 12
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            return data.cad_cell_no;
                        },
                        searchable:true,
                        orderable:false,
                        targets: 13
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            return data.cad_passout_session;
                        },
                        searchable:true,
                        orderable:false,
                        targets: 14
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            return data.cad_passout_year;
                        },
                        searchable:true,
                        orderable:false,
                        targets: 15
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            if(data.cad_campus_id == 1){
                                return 'Health Sciences Wing';
                            }else if (data.cad_campus_id == 2) {
                                return 'Engineering Wing';
                            }else if (data.cad_campus_id == 3) {
                                return 'UMDC';
                            }else if (data.cad_campus_id == 16) {
                                return 'School of nursing';
                            }else if (data.cad_campus_id == 15) {
                                return 'Alam Tower';
                            }
                            else{
                                return '';
                            }
                        },
                        searchable:true,
                        orderable:false,
                        targets: 16
                    },
                ]
            });
        });
    </script>
@endpush
