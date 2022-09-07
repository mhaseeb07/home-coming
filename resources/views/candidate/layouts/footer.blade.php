<!-- Javascript Files
            ================================================== -->
<!-- initialize jQuery Library -->
<script src="{{asset('front/js/jquery.js')}}"></script>

<script src="{{asset('front/js/jquery.plugin.js')}}"></script>
<script src="{{asset('front/js/jquery.countTo.js')}}"></script>

<script src="{{asset('front/js/jquery.countdown.js')}}"></script>


<script src="{{asset('front/js/popper.min.js')}}"></script>
<!-- Bootstrap jQuery -->
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<!-- Counter -->
<script src="{{asset('front/js/jquery.appear.min.js')}}"></script>
<!-- Countdown -->
<script src="{{asset('front/js/jquery.jCounter.js')}}"></script>
<!-- magnific-popup -->
<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
<!-- carousel -->
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('front/js/wow.min.js')}}"></script>
<!-- Data Tables query -->
<script src="{{asset('front/js/datatable.js')}}"></script>
<!-- isotop -->
<script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>

<!-- Template custom -->
<script src="{{asset('front/js/main.js')}}"></script>
<!-- Template custom -->
<script src="{{asset('front/js/toastr.js')}}"></script>
<script>
    $(function (){
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif
            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.warning("{{ session('warning') }}");
        @endif
        //Active Url
        var current = location.pathname;
        $('.sidebar .nav-item .nav-link').each(function(){
            var $this = $(this);
            // if the current path is like this link, make it active
            if($this.attr('href').indexOf(current) !== -1){
                $this.addClass('active');
            }
        })
    });
</script>
@stack('js')
