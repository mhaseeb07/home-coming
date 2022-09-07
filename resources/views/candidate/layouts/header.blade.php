<!-- Header start -->
<header id="header" class="header header-transparent candidate-menu">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- logo-->
            <a class="navbar-brand" href="{{route('main')}}">
                <img src="{{asset('front/images/logos/logo.png')}}" width="200" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{route('candidate_dashboard')}}">Dashboard</a>
                    </li>
                    <li class="header-ticket nav-item">
                        <a class="ticket-btn btn" href="{{route('logout')}}">Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- container end-->
</header>
<!--/ Header end -->
