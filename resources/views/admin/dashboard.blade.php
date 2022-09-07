@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
    <div class="py-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
@endsection
@push('js')
    <script>
        $(function (){
            $('.dataTable').DataTable();
        });
    </script>
@endpush
