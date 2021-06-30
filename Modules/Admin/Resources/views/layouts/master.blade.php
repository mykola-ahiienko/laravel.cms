<!doctype html>
<html>
<head>
    @include('admin::layouts.head')
</head>
<body>
@include('admin::layouts.preloader')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('admin::layouts.header')
    @include('admin::layouts.sidebar')
    <div class="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    @include('admin::layouts.footer')
</div>

@include('admin::layouts.footer-scripts')
</body>
</html>
