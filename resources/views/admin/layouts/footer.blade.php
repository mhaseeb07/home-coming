<script src="{{asset('admin/js/jquery.js')}}"></script>
<script src="{{asset('admin/js/mask.js')}}"></script>
<script src="{{ asset('admin/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/js/dataTables.buttons.min.js') }} "></script>
<script src="{{ asset('admin/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/js/jszip.min.js') }} "></script>
<script src="{{ asset('admin/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('admin/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/js/vfs_fonts.js') }}"></script>
<script src="{{asset('admin/js/toastr.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.js')}}"></script>
<script src="{{asset('admin/js/select2.js')}}"></script>
<script>
    $(function (){
        $('.toggle-sidebar').on('click', function () {
            $('.sidebar').toggleClass('active');
        });
        @if(Session::has('message'))
            toastr.options = {
            tapToDismiss: true,
            toastClass: 'toast',
            containerId: 'toast-container',
            debug: false,
            fadeIn: 300,
            fadeOut: 1000,
            extendedTimeOut: 1000,
            iconClass: 'toast-info',
            positionClass: 'toast-top-right',
            timeOut:20000, // Set timeOut to 0 to make it sticky
            titleClass: 'toast-title',
            messageClass: 'toast-message',
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.success("{{ session('message') }}");
        @endif

            @if(Session::has('warning'))
            toastr.options = {
            tapToDismiss: true,
            toastClass: 'toast',
            containerId: 'toast-container',
            debug: false,
            fadeIn: 300,
            fadeOut: 1000,
            extendedTimeOut: 1000,
            iconClass: 'toast-info',
            positionClass: 'toast-top-right',
            timeOut:20000, // Set timeOut to 0 to make it sticky
            titleClass: 'toast-title',
            messageClass: 'toast-message',
            closeButton : true,
            progressBar : true
        }
        toastr.warning("{{ session('warning') }}");
        @endif

            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            toastr.options = {
            tapToDismiss: true,
            toastClass: 'toast',
            containerId: 'toast-container',
            debug: false,
            fadeIn: 300,
            fadeOut: 1000,
            extendedTimeOut: 1000,
            iconClass: 'toast-info',
            positionClass: 'toast-top-right',
            timeOut:20000, // Set timeOut to 0 to make it sticky
            titleClass: 'toast-title',
            messageClass: 'toast-message',
            closeButton : true,
            progressBar : true
        }
        toastr.error("{{ $error }}");
        @endforeach
        @endif
    });
</script>
@stack('js')
