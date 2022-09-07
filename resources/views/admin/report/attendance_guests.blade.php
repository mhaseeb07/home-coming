@extends('admin.layouts.app')
@section('title','Attendance Guest')
@section('content')
    <div class="py-3 my-3 border-bottom">
        <h1 class="h2">All Attendance Guest</h1>
    </div>
    <div class="row mb-3">
        <div class="col-3">
            <label class="form-label">In Out</label>
            <select class="form-control" id="in_out">
                <option value="">Please Select</option>
                <option value="0">Out</option>
                <option value="1">In</option>
            </select>
        </div>
        <div class="col-3">
            <label class="form-label">Position</label>
            <select class="form-control" id="position">
                <option value="">Please Select</option>
                <option value="0">Not Entered</option>
                <option value="1">Entered Gate 1</option>
                <option value="2">Entered Gate 2</option>
                <option value="3">Entered Gate 3</option>
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label">User</label>
            <select class="form-select form-control" id="user_id" name="user_id" data-placeholder="Please Select User" data-allow-clear="1">
                <option></option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}} - {{$user->reg_no}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-3 mt-4">
            <button type="button" class="btn btn-sm btn-success" onClick="selectRange()">Apply Filter</button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Guest Name</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Candidate Register#</th>
                <th scope="col">in_out</th>
                <th scope="col">position</th>
                <th scope="col">Created By</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection
@push('js')
    <script>
        $(function (){
            $(".form-select").select2();
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
                ajax: {
                    "type":"GET",
                    "url":"{{route('getattendanceGuests')}}",
                    "data":function (d){
                        d.in_out = document.getElementById('in_out').value;
                        d.position = document.getElementById('position').value;
                        d.user_id = document.getElementById('user_id').value;
                    }
                },
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'user_name' },
                    { data: 'reg_no' },
                    { data: null },
                    { data: null},
                    { data: 'created_by' }
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
                            if(data.in_out == 0){
                                return 'Out';
                            }else{
                                return 'In';
                            }
                        },
                        searchable:false,
                        orderable:false,
                        targets: 4
                    },
                    {
                        render: function ( data, type, row,meta ) {
                            if(data.position == 0){
                                return 'Not Entered';
                            }else if(data.position == 1){
                                return 'Entered Gate 1';
                            }
                            else if(data.position == 2){
                                return 'Entered Gate 2';
                            }
                            else if(data.position == 3){
                                return 'Entered Gate 3';
                            }else{
                                return '';
                            }
                        },
                        searchable:false,
                        orderable:false,
                        targets: 5
                    },
                ]
            });
        });
        function selectRange(){
            $('.dataTable').DataTable().ajax.reload()
        }
    </script>
@endpush
