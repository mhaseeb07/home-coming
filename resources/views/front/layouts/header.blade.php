<!-- Header start -->
<header id="header" class="header header-transparent">
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
                        <a href="{{route('main')}}">home</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ route('convocation-instructions') }}">Instructions</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="" data-toggle="dropdown">Medal List <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($MedalListCategory as $Cate)
                                <li><a href="{{route('medal-lists',$Cate->slug)}}">{{$Cate->title}}</a></li>
                            @endforeach
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="" data-toggle="dropdown">Student List <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="{{route('tuf-students-list')}}">TUF</a></li>
                           <li><a href="{{route('umdc-students-list')}}">UMDC</a></li>
                        </ul>
                     </li>
                     <li class="header-ticket nav-item">
                        <a class="ticket-btn btn" href="{{route('login')}}">Login
                        </a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div><!-- container end-->
      </header>
      <!--/ Header end -->
