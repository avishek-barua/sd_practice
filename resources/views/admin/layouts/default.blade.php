<!DOCTYPE html>
<html lang="en">
    @include('admin.includes.head')
    <body class="sb-nav-fixed">
        @include('admin.includes.nav')
        <div id="layoutSidenav">
            @include('admin.includes.sidebar')
            <div id="layoutSidenav_content">
                
                @yield('content')
                @include('admin.includes.footer')
            </div>
        </div>
        @include('admin.includes.scripts')
        @yield('myscript')
    </body>
</html>
