
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layoutscrm.head')
        @yield('customhead')
    </head>
    <body class="sb-nav-fixed">
        @include('layoutscrm.header')

        <div id="layoutSidenav">
        @include('layoutscrm.sidebar')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('layoutscrm.foot')
            </div>
        </div>
        
       
        @include('layoutscrm.footer')
    </body>
</html>
