<!DOCTYPE html>
<html lang="en">
<head>
    @include('candidate.layouts.head')
</head>

<body>
<div class="body-inner">

    <div id="wrapper">

        <!-- header begin -->
        <header>
            @include('candidate.layouts.header')
        </header>
        <!-- header close -->
    </div>
    <div class="candidate-dashboard-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('candidate.layouts.sidebar')
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
<!-- footer begin -->
@include('candidate.layouts.footer')
</div>
</body>
</html>
