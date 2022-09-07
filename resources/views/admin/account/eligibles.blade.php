@extends('admin.layouts.app')
@section('title','All Registered Eligible')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">All Registered Eligible</h1>
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
                <th scope="col">Voucher Image</th>
                <th scope="col">Paid Status</th>
                <th scope="col">Remarks</th>
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
                ajax: "{{route('getAccountEligibleUser')}}",
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'reg_no' },
                    { data: null, orderable:false},
                    { data: null},
                    { data: null},
                    { data: 'remark', orderable:false },
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
                        targets: 5
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            if(data.amount == 2500){
                                return '<span class="btn btn-sm btn-success">Paid</span>';
                            }else{
                                return '<span class="btn btn-sm btn-danger">No Paid</span>';
                            }
                        },
                        searchable:false,
                        orderable:false,
                        targets: 6
                    },
                    {
                        render: function (data,type,row,meta) {
                            var edit ='{{ route("account.edit", ":id") }}';
                            edit = edit.replace(':id', data.eligible_id);
                            var approve ='{{ route("approveFee", ":id") }}';
                            approve = approve.replace(':id', data.id);
                            var reject ='{{ route("rejectFee", ":id") }}';
                            reject = reject.replace(':id', data.id);

                            return '<div class="d-flex">' +
                                @can('eligible-voucher-edit')
                                    '<a href="'+edit+'" class="btn btn-sm btn-warning mx-2"><i class="fa fa-edit"></i></a>'+
                                @endcan
                                    @can('eligible-registered-approve')
                                    '<form action="'+approve+'" method="POST">'+
                                '<input type="hidden" name="_token" value="{{ csrf_token() }}">'+
                                '<button type="submit" class="btn btn-sm btn-success mx-2" onclick="return confirm(`Are you sure?`)"><i class="fa fa-check"></i></button>'+
                                '</form>'+
                                '<form action="'+reject+'" method="POST">'+
                                '<input type="hidden" name="_token" value="{{ csrf_token() }}">'+
                                '<button type="submit" class="btn btn-sm btn-danger mx-2" onclick="return confirm(`Are you sure?`)"><i class="fa fa-times"></i></button>'+
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
