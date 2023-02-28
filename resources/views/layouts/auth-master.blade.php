<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ScanBC | Se Connecter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! url('plugins/fontawesome-free/css/all.min.css') !!}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{!! url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! url('dist/css/adminlte.min.css') !!}">

    <link rel="stylesheet" href="{!! url('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') !!}">

    <link rel="stylesheet" href="{!! url('plugins/toastr/toastr.min.css') !!}">
    <link rel="stylesheet" href="{!! url('plugins/dropzone/min/dropzone.min.css') !!}">


</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-danger">
            <div class="card-header text-center">
                <div class="h1"><b>Scan</b>BC</div>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

                @yield('content')

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{!! url('plugins/jquery/jquery.min.js') !!}"></script>
    <!-- Bootstrap 4 -->
    <script src="{!! url('plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <!-- AdminLTE App -->
    <script src="{!! url('dist/js/adminlte.min.js') !!}"></script>
     <!-- SweetAlert2 -->
     <script src="{!! url('plugins/sweetalert2/sweetalert2.min.js') !!}"></script>
     <!-- Toastr -->
     <script src="{!! url('plugins/toastr/toastr.min.js') !!}"></script>
     @yield('script')
</body>


</html>
