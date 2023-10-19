{{--  --}}
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
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets_admin/assets/images/favicon.png') }}">

    <title>NIU</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets_admin/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets_admin/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    @yield('link')


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    @if(url()->current() == route('attendance.all'))
    {{-- <style type="text/css">

        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .left-sidebar {
            width: 65px !important;
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .left-sidebar:hover {
            width: 260px !important;
        }

        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .sidebar-nav .has-arrow:after, #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .sidebar-nav .hide-menu, #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .sidebar-nav ul .sidebar-item .first-level .sidebar-item.active .sidebar-link{
            display: none !important;
        }
        .hide-menu{
            display: none !important;
        }
        .sidebar-nav #sidebarnav .sidebar-item .sidebar-link{
            padding: 12px 15px !important;
        }
        .left-sidebar{
            width: 65px;
        }
    </style> --}}
    @endif
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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="/backoffice">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                {{-- <img src="{{ asset('assets_admin/assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" /> --}}
                                <!-- Light Logo icon -->
                                {{-- <img src="{{ asset('assets_admin/assets/images/logo-icon.png') }}" alt="homepage" class="light-logo" /> --}}
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                {{-- <img src="{{ asset('assets_admin/assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" /> --}}
                                <!-- Light Logo text -->
                                {{-- <img src="{{ asset('assets_admin/assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" /> --}}
                                <h3><b style="color: black;">Navoiy Innovatsiyalar <br>Universiteti</b></h3>
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" style="display: flex; justify-content: flex-end;">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('assets_admin/assets/images/users/profile-pic.jpg') }}" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"> <span
                                        class="text-dark">{{ Auth::user()->name }}</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">

                                <a class="dropdown-item button_for_logout"  style="cursor: pointer;"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1 "></i>
                                    Chiqish</a>
                                <div class="dropdown-divider"></div>

                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        @include('admin.include.menu_jamshid')

                        {{-- <li class="sidebar-item" style="bottom: 0px; padding-bottom: 30px; position: fixed; cursor: pointer; color: #6C75EA !important; background-color: white;  border: 1px solid #7574ea; "> <a class="sidebar-link  button_for_logout" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Chiqish</span></a></li> --}}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
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
            {{-- <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"> Jason!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          @yield('content')
            <footer class="footer text-center text-muted">
               {{--  All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>. --}}
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <style type="text/css">
        .message{
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 12px;
            border-radius: 12px;
            z-index: 100;
            font-weight: bold;
            opacity: 0.9;
            min-width: 500px;
            min-height: 60px;
            max-width: 600px;
            display: flex;
            justify-content: space-between;
            display: none;



        }
        .message p{
            opacity: 1;
        }
        .error-message{
            background-color: #E15B56;
            color: white;

        }
         .success{
            background-color: #96E1B8;
            color: black;

        }
        .close-message{
            cursor: pointer;
        }
    </style>
    <div class="message @if(session('error')) error-message @elseif(session('success')) success @endif  " style="@if(session('error') || session('success')) display:flex; @endif" >
        <p>
           @if(session('error')) {{ session('error') }} @elseif(session('success')) {{ session('success') }}  @endif
        </p>
        <i class="fa fa-times close-message"></i>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="{{ asset('assets_admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets_admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('assets_admin/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('assets_admin/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets_admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets_admin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets_admin/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('assets_admin/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('assets_admin/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('assets_admin/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets_admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script> -->
    <!-- <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script> -->
    <script src="{{ asset('assets_admin/dist/js/pages/dashboards/dashboard1.min.js') }}"></script>
        <script src="{{ asset('assets_admin/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets_admin/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
    <script src="{{ asset('inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>

    <script src="{{ asset('tabletoexcel/jquery.tableToExcel.js') }}"></script>



    <script type="text/javascript">
            function tabletoexcel(name){
                var cl = '.'+name;
            $(cl).tblToExcel();
    }

    </script>
    <script type="text/javascript">
        $('.button_for_logout').click(function(){
            $('#logout-form').submit();
        });
    </script>
    <script type="text/javascript">
        $('.close-message').click(function(){
            $('.message').css({
                'display':'none',
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            function close_message(){
                 $('.message').css({
                    'display':'none',
                });
            }
            setTimeout(close_message, 5000);
        });
    </script>
    <script type="text/javascript">
        $('.phone-inputmask').inputmask({
            'mask':'+\\9\\98999999999'
        });
        $('.passport-seria-inputmask').inputmask({
            'mask':'AA'
        });
        $('.passport-number-inputmask').inputmask({
            'mask':'9999999'
        });
        $('.number-inputmask').inputmask({
            'regex' : '[0-9]*'
        });
    </script>


    <script type="text/javascript">

        {{--$(document).ready(function(){--}}
        {{--    var url = '{{ route('check_user_session') }}';--}}
        {{--    var tt = 1;--}}
        {{--setInterval(function(){--}}

        {{--    $.ajax({--}}
        {{--        url: url,--}}
        {{--        method: "GET",--}}
        {{--        success: function(result) {--}}
        {{--            console.log(result);--}}
        {{--           tt = result;--}}
        {{--        }--}}
        {{--    });--}}
        {{--        console.log(tt);--}}


        {{--    if (tt==1) {--}}
        {{--        console.log('kerak');--}}
        {{--    }--}}
        {{--    else{--}}
        {{--        // $('#logout-form').submit();--}}
        {{--    }--}}

        {{--}, 3000);--}}
        {{--});--}}
    </script>

        <script>
            $('.back_button_js').click(function(){
                window.history.back();
            });
        </script>

        <script src="{{asset('assets/export_table/src/tableHTMLExport.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
        <script>
            // $('.pdf_button').click(function(){
            //     $('export').tableHTMLExport({
            //         type:'pdf',
            //         orientation:'p'
            //     });
            //
            //
            // });
            $('.excel_button').click(function(){
                $('.export').tableHTMLExport({
                    type:'csv',
                    filename:'tableHTMLExport.csv',
                    separator:',',
                    newline:'\r\n',
                    trimContent:true,
                    quoteFields:true,
                    ignoreColumns:'',
                    ignoreRows:'',
                    htmlContent:false,
                    consoleLog:false,
                });

            });
            $('#datatable').DataTable();
        </script>

    @yield('js')


</body>

</html>
