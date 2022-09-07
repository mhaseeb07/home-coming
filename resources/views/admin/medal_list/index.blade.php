@extends('admin.layouts.app')
@section('title','Medal List Category')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">All Medal List Category</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Medal List Category</th>
                <th scope="col">Session year</th>
                <th scope="col">Created By</th>
                <th scope="col">Created At</th>
                <th scope="col">Status</th>
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
                ajax: "{{route('get-medal-list')}}",
                columns: [
                    { data: 'id' },
                    { data: 'title' },
                    { data: 'MLCate' },
                    { data: 'SCate' },
                    { data: 'created_by' },
                    { data: 'created_at' },
                    { data: null },
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
                        render: function (data,type,row,meta) {
                            var edit ='{{ route("medal-list.edit", ":id") }}';
                            edit = edit.replace(':id', data.id);
                            var del ='{{ route("medal-list.destroy", ":id") }}';
                            del = del.replace(':id', data.id);

                            return '<div class="d-flex">' +
                                @can('medal-list-edit')
                                    '<a href="'+edit+'" class="btn btn-sm btn-warning mx-2"><i class="fa fa-edit"></i></a>'+
                                @endcan
                                    @can('medal-list-delete')
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
                    },
                    {
                        render: function (data,type,row,meta) {
                            var ChangeStatus ='{{ route("medal-list.show", ":id") }}';
                            ChangeStatus = ChangeStatus.replace(':id', data.id);
                            if(data.status == 'Non-Active'){
                                return  '<div class="d-flex">'+
                                    @can('medal-list-edit')
                                        '<a href="'+ChangeStatus+'"> <button type="submit" class="btn btn-sm  Non-Active mx-2">Non-Active</button> </a>'+
                                    @endcan
                                        '</div>'
                            }
                            if(data.status == 'Active'){
                                return  '<div class="d-flex">'+
                                    @can('medal-list-edit')
                                        '<a href="'+ChangeStatus+'"> <button type="submit" class="btn btn-sm btn-white Active mx-2">Active</button> </a>'+
                                    @endcan
                                        '</div>'
                            }
                        },
                        searchable:false,
                        orderable:false,
                        targets: 6
                    }
                ]
            });
        });
    </script>
@endpush
