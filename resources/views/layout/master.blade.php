<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/logo-1.png') }}">
    <title>@yield('judul_halaman')</title>
    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/dist/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/libs/jquery-minicolors/jquery.minicolors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/libs/quill/dist/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/libs/datetimepicker/bootstrap-datepicker.min.css') }}">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('layout.topbar');
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layout.sidebar');
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">@yield('judul_halaman')</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">@yield('main_halaman')</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('halaman')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @yield('content');
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                    copyright ?? <script> document.write(new Date().getFullYear()); </script> - Developed System by <b><a href="https://github.com/febbynf" target="_blank">Febby Nurfitriyani</a></b>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('admin/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/dist/js/pages/chart/chart-page-init.js') }}"></script> --}}
    <script src="{{ asset('admin/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/pages/mask/mask.init.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/quill/dist/quill.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/assets/libs/chart/matrix.interface.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/assets/libs/chart/excanvas.min.js') }}"></script> --}}
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    {{-- <script src="{{ asset('admin/assets/libs/chart/jquery.peity.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/assets/libs/chart/matrix.charts.js') }}"></script> --}}
    <script src="{{ asset('admin/assets/libs/chart/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/chart/turning-series.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/datetimepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('admin/dist/js/pages/chart/chart-page-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    @stack('js')
</body>

</html>