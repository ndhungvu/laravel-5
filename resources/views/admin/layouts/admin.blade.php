<!DOCTYPE html>
<html>
    <head>
        @include('masters.head')
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            @include('masters.header')
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            @yield('content')
        </div><!-- ./wrapper -->
        <!-- add new calendar event modal -->
        @include('masters.footer')
    </body>
</html>
