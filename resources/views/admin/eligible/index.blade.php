@extends('admin.layouts.app')
@section('title','Eligibles')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">All Eligibles</h1>
    </div>
    <div class="row">
        <div class="col-3">
            <select class="form-control" id="vaccination_status">
                        <option value="">Please Select</option>
                        <option value="0">Not Vaccinated</option>
                        <option value="1">Partially Vaccinated</option>
                        <option value="2">Fully Vaccinated</option>
                    </select>
        </div>
        <div class="col-3">
            <button type="button" class="btn btn-sm btn-success" onClick="selectRange()">Apply Filter</button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Registration #</th>
                <th scope="col">Email</th>
                <th scope="col">CNIC</th>
                <th scope="col">Vaccination Status</th>
                <th scope="col">Created By</th>
                <th scope="col">Updated By</th>
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
                ajax: {
                    "type":"GET",
                    "url":"{{route('getEligibles')}}",
                    "data":function (d){
                        d.vaccination_status = document.getElementById('vaccination_status').value;
                    }
                },
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'reg_no' },
                    { data: 'email' },
                    { data: 'cnic' },
                    { data: null, orderable:false },
                    { data: 'created_by' },
                    { data: 'updated_by' },
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
                        targets: 5
                    },
                    {
                        render: function (data,type,row,meta) {
                            var edit ='{{ route("eligibles.edit", ":id") }}';
                            edit = edit.replace(':id', data.id);
                            var del ='{{ route("eligibles.destroy", ":id") }}';
                            del = del.replace(':id', data.id);

                            return '<div class="d-flex">' +
                                @can('eligible-edit')
                                    '<a href="'+edit+'" class="btn btn-sm btn-warning mx-2"><i class="fa fa-edit"></i></a>'+
                                @endcan
                                    @can('eligible-delete')
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
        function selectRange(){
            $('.dataTable').DataTable().ajax.reload()
        }
    </script>
@endpush
