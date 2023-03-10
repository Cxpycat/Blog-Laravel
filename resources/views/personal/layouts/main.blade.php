<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    {{--    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}"> --}}

    <link
        rel="stylesheet"href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/adminlte.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('plugins/summernote/summernote-bs4.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/codemirror/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/codemirror/theme/monokai.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/simplemde/simplemde.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }} ">



</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src=" {{ asset('dist/img/AdminLTELogo.png') }} " alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
            <!-- Left navbar links -->
            <div class="col-12 d-flex justify-content-between">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-outline-primary" value="??????????">
                        </form>
                    </li>

                </ul>
            </div>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src=" {{ asset('dist/img/AdminLTELogo.png') }} " alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>




            <!-- Sidebar -->
            <div class="sidebar"></div>


            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @include('personal.includes.sidebar')
        @yield('content')
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Dev by Cxpycat</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    {{--    <script src="{{ asset('plugins/jquery/jquery.min.js') }} "></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{--    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }} "></script> --}}
    <script src=" {{ asset('dist/js/adminlte.js') }} "></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('plugins/moment/moment.min.js') }} "></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }} "></script>
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }} "></script>
    {{-- <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}"> --}}
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }} "></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- AdminLTE App -->

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
        $(function() {
            bsCustomFileInput.init();
        });
        $('.select2').select2()
    </script>
    <style>
        .input-group-append {
            cursor: pointer;
        }

        .custom-file-input:lang(en)~.custom-file-label::after {
            content: "...";
            cursor: pointer;
        }
    </style>

</body>

</html>
