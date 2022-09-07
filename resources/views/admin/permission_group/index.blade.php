@extends('admin.layouts.app')
@section('title','Groups')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">All Groups</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($groups as $group)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$group->name}}</td>
                    <td>
                        <a href="{{route('permission_group.edit',$group->id)}}" class="btn btn-sm btn-warning mx-2"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('js')
    <script>
        $(function (){
            var t = $('.dataTable').DataTable({
                processing: false,
                serverSide: false
            });
        });
    </script>
@endpush
