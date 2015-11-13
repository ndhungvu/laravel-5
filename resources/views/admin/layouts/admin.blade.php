<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        {!! HTML::style('/assets/admin/bootstrap/css/bootstrap.min.css') !!}
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jvectormap -->
        {!! HTML::style('/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
        <!-- Theme style -->
        {!! HTML::style('/assets/admin/dist/css/AdminLTE.min.css') !!}
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        {!! HTML::style('/assets/admin/dist/css/skins/_all-skins.min.css') !!}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('admin.masters.header')
            <!-- Left side column. contains the logo and sidebar -->
            @include('admin.masters.sliderbar')
            <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
               @yield('content')
          </div><!-- /.content-wrapper -->

            @include('admin.masters.footer')
        </div><!-- ./wrapper -->
        <!-- jQuery 2.1.4 -->
        {!! HTML::script('/assets/admin/plugins/jQuery/jQuery-2.1.4.min.js'); !!}
        <!-- Bootstrap 3.3.5 -->
        {!! HTML::script('/assets/admin/bootstrap/js/bootstrap.min.js'); !!}
        <!-- FastClick -->
        {!! HTML::script('/assets/admin/plugins/fastclick/fastclick.min.js'); !!}
        <!-- AdminLTE App -->
        {!! HTML::script('/assets/admin/dist/js/app.min.js'); !!}
        <!-- Sparkline -->
        {!! HTML::script('/assets/admin/plugins/sparkline/jquery.sparkline.min.js'); !!}
        <!-- jvectormap -->
        {!! HTML::script('/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); !!}

        {!! HTML::script('/assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); !!}
        <!-- SlimScroll 1.3.0 -->
        {!! HTML::script('/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js'); !!}
        <!-- ChartJS 1.0.1 -->
        {!! HTML::script('/assets/admin/plugins/chartjs/Chart.min.js'); !!}
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        {!! HTML::script('/assets/admin/dist/js/pages/dashboard2.js'); !!}
        <!-- AdminLTE for demo purposes -->
        {!! HTML::script('/assets/admin/dist/js/demo.js'); !!}
    </body>
</html>
