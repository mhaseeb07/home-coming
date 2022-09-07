@extends('admin.layouts.app')
@section('title','Candidate Registration')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">All Candidate Registration</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Register No</th>
                <th scope="col">Vaccination Status</th>
                <th scope="col">Created By</th>
                <th scope="col">Updated By</th>
                <th scope="col">Voucher Image</th>
                <th scope="col">Vaccination Certificate</th>
                <th scope="col">Pass</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection
@push('js')
    <script>
        $(function (){
            var t = $('.dataTable').DataTable({
                processing: true,
                serverSide: true,
                order:[[0,'desc']],
                ajax: "{{route('getCandidateRegistration')}}",
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'reg_no' },
                    { data: null, orderable:false},
                    { data: 'created_by' },
                    { data: 'updated_by' },
                    { data: null},
                    { data: null},
                    { data: null},
                    { data: null}
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
                            if(data.vaccination_status == 1){
                                return 'Partially Vaccinated';
                            }else if (data.vaccination_status == 2) {
                                return 'Fully Vaccinated';
                            }else{
                                return 'Not Vaccinated';
                            }
                        },
                        searchable:true,
                        orderable:true,
                        targets: 4
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
                        targets: 7
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
                        targets: 8
                    },
                    {
                        render: function (data,type,row,meta) {
                            var url ='{{ route("downloadGatePass", ":id") }}';
                            url = url.replace(':id', data.id);
                                return '<a href="' + url + '" "><i class="fa fa-download"></i></a>';
                        },
                        searchable:false,
                        orderable:false,
                        targets: 9
                    },
                    {
                        render: function (data,type,row,meta) {
                            var edit ='{{ route("candidate_registration.edit", ":id") }}';
                            edit = edit.replace(':id', data.id);
                            var del ='{{ route("candidate_registration.destroy", ":id") }}';
                            del = del.replace(':id', data.id);

                            return '<div class="d-flex">' +
                                @can('candidate-registration-edit')
                                    '<a href="'+edit+'" class="btn btn-sm btn-warning mx-2"><i class="fa fa-edit"></i></a>'+
                                @endcan
                                    @can('candidate-registration-delete')
                                    '<form action="'+del+'" method="POST">'+
                                '<input type="hidden" name="_token" value="{{ csrf_token() }}">'+
                                '<input type="hidden" name="_method" value="delete" />'+
                                '<button type="submit" class="btn btn-sm btn-danger mx-2" onclick="return confirm(`Are you sure?`)"><i class="fa fa-trash"></i></button>'+
                                '</form>'+
                                @endcan
                                    '</div>';
                        },
                        searchable:false,
                        orderable:false,
                        targets: -1
                    }
                ]
            });
        });
    </script>
@endpush
