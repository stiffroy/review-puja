<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="assets/bootstrap.min.css" rel="stylesheet" type="text/css">
        @yield('pagestyle')
    </head>
    <body>
        @yield('pagesection')
        {{-- <button class="btn btn-primary"></button> --}}
        <script src="assets/bootstrap.min.js"></script>
    </body>
</html>