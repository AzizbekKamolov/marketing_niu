<!DOCTYPE html>
<html lang="uz">
<head>
    <link rel="stylesheet" href="{{ asset('admin/js/vendor/dropify/dist/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- EOF CSS INCLUDE -->
</head>
<body>

<!-- APP WRAPPER -->
<div class="app">

    <!-- START APP CONTAINER -->
    <div class="app-container">
        <!-- START SIDEBAR -->
        <div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
            <a href="/backoffice" style="color:white;text-decoration: none;font-size: 22px;padding: 0px;font-family: cursive;">
                <p style="margin: 10px;">MANAGEMENT</p>
            </a>
            <nav>
                @include('admin.include.menu')
            </nav>
        </div>
        <!-- END SIDEBAR -->

        <!-- START APP CONTENT -->
        <div class="app-content app-sidebar-left">
            <!-- START APP HEADER -->
            @include('admin.include.header')
            <!-- END APP HEADER  -->

            <!-- END PAGE HEADING -->
            {{--<div class="app-heading app-heading-bordered app-heading-page">--}}
                {{--<div class="icon icon-lg">--}}
                    {{--<span class="icon-laptop-phone"></span>--}}
                {{--</div>--}}
                {{--<div class="title">--}}
                    {{--<h1>Boooya - Admin Template</h1>--}}
                    {{--<p>The revolution in admin template build</p>--}}
                {{--</div>--}}
                <!--<div class="heading-elements">
                    <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                    <a href="https://themeforest.net/item/boooya-revolution-admin-template/17227946?ref=aqvatarius&license=regular&open_purchase_for_item_id=17227946" class="btn btn-success btn-icon-fixed"><span class="icon-text">$24</span> Purchase</a>
                </div>-->
            {{--</div>--}}
            <div class="app-heading-container app-heading-bordered bottom">
                {{--<ul class="breadcrumb">--}}
                    {{--<li><a href="#">Application</a></li>--}}
                    {{--<li class="active">Dashboard</li>--}}
                {{--</ul>--}}
            </div>
            <!-- START PAGE CONTAINER -->

            <!-- START PAGE HEADING -->
            @yield('content')
            <!-- END PAGE CONTAINER -->

        </div>
        <!-- END APP CONTENT -->

    </div>
    <!-- END APP CONTAINER -->

    <!-- START APP FOOTER -->
    @include('admin.include.footer')
    <!-- END APP FOOTER -->

    <!-- START APP SIDEPANEL -->
    <div class="app-sidepanel scroll" data-overlay="show">
        <div class="container">

            <div class="app-heading app-heading-condensed app-heading-small">
                <div class="icon icon-lg">
                    <span class="icon-alarm"></span>
                </div>
                <div class="title">
                    <h2>Notifications</h2>
                    <p><strong>7 new</strong>, latest: July 19, 2016 at 10:14:32.</p>
                </div>
            </div>

            <div class="listing margin-bottom-10">
                <div class="listing-item margin-bottom-10">
                    <strong>Product Delivered</strong> <span class="label label-success pull-right">delivered</span>
                    <p class="margin-0 margin-top-5">#SPW-955-18 to st. StreetName SA, USA.</p>
                    <p class="text-muted">
                        <span class="fa fa-truck margin-right-5"></span> 19/07/2016 10:14:32 AM
                    </p>
                </div>
                <div class="listing-item margin-bottom-10">
                    <strong>Successful Payment</strong> <span class="label label-success pull-right">success</span>
                    <p class="margin-0 margin-top-5">Payment for order #SPW-955-17: <strong>$145.44</strong>.</p>
                    <p class="text-muted">
                        <span class="fa fa-bank margin-right-5"></span> 19/07/2016 09:55:12 AM
                    </p>
                </div>
                <div class="listing-item margin-bottom-10">
                    <strong>New Order #SPW-955-17</strong> <span class="label label-warning pull-right">waiting</span>
                    <p class="margin-0 margin-top-5">Added new order, waiting for payment. <a href="#">Order details</a>.</p>
                    <p class="text-muted">
                        <span class="fa fa-bank margin-right-5"></span> 19/07/2016 09:51:55 AM
                    </p>
                </div>
                <div class="listing-item margin-bottom-10">
                    <strong>Money Back Request</strong> <span class="label label-primary pull-right">return</span>
                    <p class="margin-0 margin-top-5">#SPW-955-17 return requested. <a href="#">Request details</a>.</p>
                    <p class="text-muted">
                        <span class="fa fa-bank margin-right-5"></span> 19/07/2016 08:44:51 AM
                    </p>
                </div>
                <div class="listing-item margin-bottom-10">
                    <strong>The critical amount of product</strong> <span class="label label-danger pull-right">important</span>
                    <p class="margin-0 margin-top-5">Product: <a href="#">Extra Awesome Product</a> (amount: <span class="text-danger">2</span>). <a href="#">Storehouse</a>.</p>
                    <p class="text-muted">
                        <span class="fa fa-cube margin-right-5"></span> 19/07/2016 08:30:00 AM
                    </p>
                </div>
                <div class="listing-item margin-bottom-10">
                    <strong>Product Delivery Start</strong> <span class="label label-warning pull-right">delivering</span>
                    <p class="margin-0 margin-top-5">#SPW-955-18 to st. StreetName SA, USA.</p>
                    <p class="text-muted">
                        <span class="fa fa-truck margin-right-5"></span> 18/07/2016 06:14:32 PM
                    </p>
                </div>
                <div class="listing-item margin-bottom-10">
                    <strong>Critical Server Load</strong> <span class="label label-danger pull-right">server</span>
                    <p class="margin-0 margin-top-5">Disk space: 248.1Gb/250Gb. <a href="#">Control panel</a>.</p>
                    <p class="text-muted">
                        <span class="fa fa-truck margin-right-5"></span> 18/07/2016 06:14:32 PM
                    </p>
                </div>
            </div>
            <div class="row margin-bottom-30">
                <div class="col-xs-6 col-xs-offset-3">
                    <button class="btn btn-default btn-block">All Notification</button>
                </div>
            </div>

            <div class="app-heading app-heading-condensed app-heading-small margin-bottom-20">
                <div class="icon icon-lg">
                    <span class="icon-cog"></span>
                </div>
                <div class="title">
                    <h2>Settings</h2>
                    <p>Notification Settings</p>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-2">
                        <label class="switch switch-sm margin-0">
                            <input type="checkbox" name="app_settings_1" checked="" value="0">
                        </label>
                    </div>
                    <div class="col-xs-10">
                        <label>Delivery Information</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-2">
                        <label class="switch switch-sm margin-0">
                            <input type="checkbox" name="app_settings_2" checked="" value="0">
                        </label>
                    </div>
                    <div class="col-xs-10">
                        <label>Product Amount Information</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-2">
                        <label class="switch switch-sm margin-0">
                            <input type="checkbox" name="app_settings_3" checked="" value="0">
                        </label>
                    </div>
                    <div class="col-xs-10">
                        <label>Order Information</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-2">
                        <label class="switch switch-sm margin-0">
                            <input type="checkbox" name="app_settings_4" checked="" value="0">
                        </label>
                    </div>
                    <div class="col-xs-10">
                        <label>Server Load</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-2">
                        <label class="switch switch-sm margin-0">
                            <input type="checkbox" name="app_settings_5" value="0">
                        </label>
                    </div>
                    <div class="col-xs-10">
                        <label>User Registrations</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-2">
                        <label class="switch switch-sm margin-0">
                            <input type="checkbox" name="app_settings_6" value="0">
                        </label>
                    </div>
                    <div class="col-xs-10">
                        <label>Purchase Information</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END APP SIDEPANEL -->

    <div class="app-overlay"></div>
</div>
<!-- page js begin-->
    @yield('js')
<!-- page js end-->
<script type="text/javascript" src="{{ asset('admin/js/vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/jquery/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/bootstrap/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/js/vendor/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/js/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/datatables/dataTables.bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('admin/js/vendor/rickshaw/d3.v3.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/rickshaw/rickshaw.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/app_plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/app_demo.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/app_demo_dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/dropify/dist/js/dropify.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/js/vendor/form-validator/jquery.form-validator.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/js/vendor/morris/raphael.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/morris/morris.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('admin/js/vendor/bootstrap-select/bootstrap-select.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/select2/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/bootstrap-daterange/daterangepicker.js')}}"></script>

<script type="text/javascript" src="{{ asset('admin/js/vendor/maskedinput/jquery.maskedinput.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/isotope/isotope.pkgd.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/js/vendor/smartwizard/jquery.smartWizard.js')}}"></script>

<script type="text/javascript" src="{{ asset('admin/js/draganddrop/bala.DualSelectList.jquery.js') }}"></script>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

@if(Route::currentRouteName() == 'schedule.create' || Route::currentRouteName() == 'switch')
    {!! $calendar_details->script() !!}
    <script>
        $('#calendar').fullCalendar({
            timeFormat: 'H(:mm)' // uppercase H for 24-hour clock
        });
    </script>
@endif
@if(Route::currentRouteName() == 'student')
    <script type="text/javascript" src="{{ asset('admin/js/vendor/fullcalendar/fullcalendar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/app_demo_calendar.js') }}"></script>
@endif

<script type="text/javascript" src="{{ asset('admin/js/vendor/nestable/jquery.nestable.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/vendor/noty/jquery.noty.packaged.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/js/albatross.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/defender.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/printing.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/summernote/summernote.min.js') }}"></script>

<script type="text/javascript">

    tinymce.init({
        selector: '.editor-base',
        height: 200,
        menubar: false,
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        skin_url: 'css/vendor/tinymce',
        content_css: 'css/vendor/tinymce/content-style.css'
    });

    tinymce.init({
        selector: '.editor-full',
        height: 400,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true,
        skin_url: 'css/vendor/tinymce',
        content_css: 'css/vendor/tinymce/content-style.css'
    });

    $(document).ready(function(){
        $('.editor-summernote').summernote({
            height: 200,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['picture','link','video']]
            ]
        });

        $(window).resize();
    });
    $( "#mailtouser" ).click(function() {
        html = $('.note-editable').html();
        $('#content').val(html);
        $('#message-form').submit();
    });
</script>

</body>
</html>