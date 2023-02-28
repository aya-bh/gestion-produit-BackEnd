<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (request()->route()->uri != '/')
        <title>ScanBC | {{ request()->route()->uri }}</title>
    @else
        <title>ScanBC | Dashboard</title>
    @endif
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! url('plugins/fontawesome-free/css/all.min.css') !!}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{!! url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{!! url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{!! url('plugins/jqvmap/jqvmap.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! url('dist/css/adminlte.min.css') !!}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{!! url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{!! url('plugins/daterangepicker/daterangepicker.css') !!}">
    <!-- summernote -->
    <link rel="stylesheet" href="{!! url('plugins/summernote/summernote-bs4.min.css') !!}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{!! url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! url('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') !!}">

    <link rel="stylesheet" href="{!! url('plugins/toastr/toastr.min.css') !!}">
    <link rel="stylesheet" href="{!! url('plugins/dropzone/min/dropzone.min.css') !!}">



</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        @auth

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <div class="user-panel d-flex">
                                <div class="image">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                                </div>
                                <div class="info">
                                    <div>{{ auth()->user()->name }}&nbsp;</div>
                                </div>
                                <i class="fas fa-angle-down m-2"></i>
                            </div>

                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">

                            <a href="{{ route('deconnecter') }}" class="dropdown-item">
                                <i class="fas fa-power-off mr-2"></i>Se déconnecter
                            </a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt m-2"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="{!! URL('dist/img/scanbc_logo.jpg') !!}" alt="ScanBC Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">ScanBC</span>
                </a>

                @include('layouts.partials.navbar')
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            @if (request()->route()->uri != '/')
                                <div class="col-sm-6">
                                    <h1 class="m-0"> {{ request()->route()->uri }}</h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                        <li class="breadcrumb-item active">{{ request()->route()->uri }}</li>
                                    </ol>
                                </div><!-- /.col -->
                            @endif
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                @yield('content')
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>droits d'auteur &copy; {{ now()->year }} <a href="#">ScanBC</a>.</strong>
                Tous les droits sont réservés.

            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>



        <div class="modal fade" id="modaldefault">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="mediumBody">
                        <div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="modalsm">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="smallBody">
                        <div>

                        </div>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- jQuery -->
        <script src="{!! url('plugins/jquery/jquery.min.js') !!}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{!! url('plugins/jquery-ui/jquery-ui.min.js') !!}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{!! url('plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
        <!-- ChartJS -->
        <script src="{!! url('plugins/chart.js/Chart.min.js') !!}"></script>
        <!-- Sparkline -->
        <script src="{!! url('plugins/sparklines/sparkline.js') !!}"></script>

        <!-- jQuery Knob Chart -->
        <script src="{!! url('plugins/jquery-knob/jquery.knob.min.js') !!}"></script>
        <!-- daterangepicker -->
        <script src="{!! url('plugins/moment/moment.min.js') !!}"></script>
        <script src="{!! url('plugins/daterangepicker/daterangepicker.js') !!}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{!! url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}"></script>
        <!-- Summernote -->
        <script src="{!! url('plugins/summernote/summernote-bs4.min.js') !!}"></script>
        <!-- overlayScrollbars -->
        <script src="{!! url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}"></script>
        <!-- AdminLTE App -->
        <script src="{!! url('dist/js/adminlte.js') !!}"></script>

        <script src="{!! url('dist/js/pages/dashboard.js') !!}"></script>

        <!-- DataTables  & Plugins -->
        <script src="{!! url('plugins/datatables/jquery.dataTables.min.js') !!}"></script>
        <script src="{!! url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
        <script src="{!! url('plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
        <script src="{!! url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>
        <script src="{!! url('plugins/datatables-buttons/js/dataTables.buttons.min.js') !!}"></script>
        <script src="{!! url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') !!}"></script>
        <script src="{!! url('plugins/jszip/jszip.min.js') !!}"></script>
        <script src="{!! url('plugins/pdfmake/pdfmake.min.js') !!}"></script>
        <script src="{!! url('plugins/pdfmake/vfs_fonts.js') !!}"></script>
        <script src="{!! url('plugins/datatables-buttons/js/buttons.html5.min.js') !!}"></script>
        <script src="{!! url('plugins/datatables-buttons/js/buttons.print.min.js') !!}"></script>
        <script src="{!! url('plugins/datatables-buttons/js/buttons.colVis.min.js') !!}"></script>
        <!-- SweetAlert2 -->
        <script src="{!! url('plugins/sweetalert2/sweetalert2.min.js') !!}"></script>
        <!-- Toastr -->
        <script src="{!! url('plugins/toastr/toastr.min.js') !!}"></script>

        <script>
            $(function() {
                $("#example1").DataTable({
                    "language": {
                        "sProcessing": "Traitement en cours ...",
                        "sLengthMenu": "Afficher _MENU_ lignes",
                        "sZeroRecords": "Aucun résultat trouvé",
                        "sEmptyTable": "Aucune donnée disponible",
                        "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
                        "sInfoEmpty": "Aucune ligne affichée",
                        "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
                        "sInfoPostFix": "",
                        "sSearch": "Chercher:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Chargement...",
                        "oPaginate": {
                            "sFirst": "Premier",
                            "sLast": "Dernier",
                            "sNext": "Suivant",
                            "sPrevious": "Précédent"
                        },
                        "oAria": {
                            "sSortAscending": ": Trier par ordre croissant",
                            "sSortDescending": ": Trier par ordre décroissant"
                        }
                    },
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                    "buttons": {
                        dom: {
                            button: {
                                className: 'btn btn-danger'
                            }
                        },
                        buttons: [{
                                //EXCEL
                                extend: 'excelHtml5',
                                text: '<i class="fas fa-file-excel"></i> EXCEL',
                            },
                            {
                                //PRINT
                                extend: 'print',
                                text: '<i class="fas fa-print"></i> IMPRIMER',
                            },
                            {
                                //PDF
                                extend: 'pdfHtml5',
                                text: '<i class="fas fa-file-pdf"></i> PDF',

                            },
                            {
                                //COLVIS
                                extend: 'colvis',
                                text: '<i class="fas fa-eye"></i> COLVIS',
                            }
                        ]
                    },

                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            });
        </script>
        <script>
            // display a modal (small modal)
            $(document).on('click', '#smallButton', function(event) {
                event.preventDefault();
                let href = $(this).attr('data-attr');
                $.ajax({
                    url: href,
                    beforeSend: function() {
                        $('#loader').show();
                    },
                    // return the result
                    success: function(result) {
                        $('#modalsm').modal("show");
                        $('#smallBody').html(result).show();
                    },
                    complete: function() {
                        $('#loader').hide();
                    },
                    error: function(jqXHR, testStatus, error) {
                        console.log(error);
                        alert("Page " + href + " cannot open. Error:" + error);
                        $('#loader').hide();
                    },
                    timeout: 8000
                })
            });


            // display a modal (medium modal)
            $(document).on('click', '#buttondefault', function(event) {
                event.preventDefault();
                let href = $(this).attr('data-attr');
                $.ajax({
                    url: href,
                    beforeSend: function() {
                        $('#loader').show();
                    },
                    // return the result
                    success: function(result) {
                        $('#modaldefault').modal("show");
                        $('#mediumBody').html(result).show();
                    },
                    complete: function() {
                        $('#loader').hide();
                    },
                    error: function(jqXHR, testStatus, error) {
                        console.log(error);
                        alert("Page " + href + " cannot open. Error:" + error);
                        $('#loader').hide();
                    },
                    timeout: 8000
                })
            });
        </script>

        @yield('script')


    @endauth

</body>

</html>
