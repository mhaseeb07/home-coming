@extends('admin.layouts.app')
@section('title','Eligible Types')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">All Eligible Types</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
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
                ajax: "{{route('getEligibleTypes')}}",
                columns: [
                    { data: 'id' },
                    { data: 'title' },
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
                        render: function (data,type,row,meta) {
                            var edit ='{{ route("eligible-types.edit", ":id") }}';
                            edit = edit.replace(':id', data.id);
                            var del ='{{ route("eligible-types.destroy", ":id") }}';
                            del = del.replace(':id', data.id);

                            return '<div class="d-flex">' +
                                @can('eligible-type-edit')
                                    '<a href="'+edit+'" class="btn btn-sm btn-warning mx-2"><i class="fa fa-edit"></i></a>'+
                                @endcan
                                @can('eligible-type-delete')
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
