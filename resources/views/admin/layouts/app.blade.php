
<!doctype html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav class="sidebar">
        @include('admin.layouts.sidebar')
    </nav>
    <!-- Page Content  -->
    <div class="content">
        @include('admin.layouts.header')
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>
@include('admin.layouts.footer')
</body>
</html>
