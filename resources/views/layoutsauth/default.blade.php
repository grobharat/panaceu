<!DOCTYPE html>
<html lang="en">

<head>
   @include('layoutsauth.head')
   @yield('customhead')
</head>

<body class="text-center">

   @include('layoutsauth.header')


        @yield('content')


   @include('layoutsauth.foot')
        @yield('customfooter')
   @include('layoutsauth.footer')

</body>

</html>