<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="author" content="n">
    <title>Admin @yield('title')</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href="asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="asset/ckeditor/ckeditor.js" ></script>
    <script type="text/javascript" language="javascript" src="asset/ckfinder/ckfinder.js" ></script>
    <script type="text/javascript">
        var baseURL = "{{ url('/')}}";  
    </script>
     <script type="text/javascript" language="javascript" src="asset/js/func_ckfinder.js" ></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.layout.header')
        @include('admin.message.errors')
        <!-- Page Content -->
        @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="asset/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/my.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    @yield('script')
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>
