<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.layouts.head')
</head>

<body>
  <div class="body-inner">

    <div id="wrapper">

        <!-- header begin -->
        <header>
            @include('front.layouts.header')
        </header>
        <!-- header close -->
    </div>
        @yield('content')
    
        <!-- footer begin -->
        @include('front.layouts.footer')
        <!-- footer close -->
        @include('front.layouts.footerScript')
  </div>
</body>
</html>
