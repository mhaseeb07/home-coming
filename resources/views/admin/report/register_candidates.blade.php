@extends('admin.layouts.app')
@section('title','Registered Candidates')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">All Registered Candidates</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Register No</th>
                <th scope="col">CNIC</th>
                <th scope="col">Contact No</th>
                <th scope="col">Cell No</th>
                <th scope="col">Degree Name</th>
                <th scope="col">Passout Session</th>
                <th scope="col">Passout Year</th>
                <th scope="col">Campus</th>
                <th scope="col">Challan#</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Voucher Image</th>
                <th scope="col">Vaccination Status</th>
                <th scope="col">Vaccination Certificate Image</th>
                <th scope="col">Father Name</th>
                <th scope="col">Father Cnic</th>
                <th scope="col">Address</th>
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
                    [10, 25, 52, 100, 5000],
                    [10, 25, 52, 100, "All"]
                ],
                iDisplayLength: 10,
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                processing: true,
                serverSide: true,
                order:[[0,'desc']],
                ajax: "{{route('getRegisterCandidates')}}",
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'reg_no' },
                    { data: 'cnic' },
                    { data: 'contact_no_residence' },
                    { data: 'cell_no' },
                    { data: 'degree_name' },
                    { data: 'passout_session' },
                    { data: 'passout_year' },
                    { data: null},
                    { data: null},
                    { data: null},
                    { data: null},
                    { data: null},
                    { data: null},
                    { data: 'father_name' },
                    { data: 'father_cnic' },
                    { data: 'address' }
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
                            if(data.campus_id == 1){
                                return 'Health Sciences Wing';
                            }else if (data.campus_id == 2) {
                                return 'Engineering Wing';
                            }else if (data.campus_id == 3) {
                                return 'UMDC';
                            }else if (data.campus_id == 16) {
                                return 'School of nursing';
                            }else if (data.campus_id == 15) {
                                return 'Alam Tower';
                            }
                            else{
                                return '';
                            }
                        },
                        searchable:true,
                        orderable:false,
                        targets: 10
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            return data.challan_no;
                        },
                        searchable:true,
                        orderable:false,
                        targets: 11
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            if(data.amount == 0){
                                return 'No Paid';
                            }else{
                                return 'Paid';
                            }
                        },
                        searchable:true,
                        orderable:false,
                        targets: 12
                    },
                    {
                        render: function (data,type,row,meta) {
                            var voucher_image ='{{ asset('voucher')}}/'+data.voucher_image;
                            if(data.voucher_image) {
                                return '<a href="' + voucher_image + '" target="_blank"><i class="fa fa-download"></i></a>';
                            }
                            else{
                                return null;
                            }
                        },
                        searchable:false,
                        orderable:false,
                        targets: 13
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
                        targets: 14
                    },
                    {
                        render: function (data,type,row,meta) {
                            var vaccination_certificate ='{{ asset('vaccination')}}/'+data.vaccination_certificate;
                            if(data.vaccination_certificate) {
                                return '<a href="' + vaccination_certificate + '" target="_blank"><i class="fa fa-download"></i></a>';
                            }
                            else{
                                return null;
                            }
                        },
                        searchable:false,
                        orderable:false,
                        targets: 15
                    },
                ]
            });
        });
    </script>
@endpush
