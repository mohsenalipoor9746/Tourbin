<!DOCTYPE html>
<html lang="en" class="ie8 no-js">
<html lang="en" class="ie9 no-js">
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8"/>
    <title>سیستم مدیریت</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta
            content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page ofRTL  Theme #5 for statistics, charts, recent events and reports"
            name="description"/>
    <meta content="" name="author"/>
    <link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href=" {{asset('/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/global/css/components-md-rtl.min.css')}}" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="{{asset('/assets/layouts/layout5/css/layout-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/pages/css/profile-2-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <script
            src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js')}}"></script>


    <link href="{{asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{asset('/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->

    <link href="{{asset('/assets/global/css/plugins-md-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{asset('/assets/layouts/layout5/css/custom-rtl.min.css')}}" rel="stylesheet" type="text/css"/>


    <style>
        @font-face {
            font-family: myFirstFont;
            src: url({{asset('/assets/iransans.ttf')}});
        }

        div {
            font-family: myFirstFont;
        }
    </style>
    <style>
        body {
            padding: 20px 20px;
        }

        .results tr[visible='false'],
        .no-result {
            display: none;
        }

        .results tr[visible='true'] {
            display: table-row;
        }

        .counter {
            padding: 8px;
            color: #ccc;
        }
    </style>

</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-md">
<div class="wrapper">
    <header class="page-header">
        <nav class="navbar mega-menu" role="navigation">
            <div class="container-fluid">
                <div class="clearfix navbar-fixed-top">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                    </button>
                    <div class="topbar-actions">
                        <div class="btn-group-notification btn-group" id="header_notification_bar">
                            <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown"
                                    data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge">0</span>
                            </button>
                            <ul class="dropdown-menu-v2">
                                <li class="external">
                                    <h3>
                                        <span class="bold"></span>اعلانهای شما</h3>
                                    <a href="#">دیدن همه</a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;"
                                        data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                        <span class="details">
                                                            <span
                                                                    class="label label-sm label-icon label-success md-skip">
                                                                <i class="fa fa-plus"></i>
                                                            </span>متن پیام</span>
                                                <span class="time">تاریخ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group-red btn-group">
                        </div>
                        <div class="btn-group-img btn-group">
                            <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown"
                                    data-hover="dropdown" data-close-others="true">
                                <span>{{auth()->user()->name}}</span>

                                <img src="{{auth()->user()->image}}" alt=""></button>
                            <ul class="dropdown-menu-v2" role="menu">
                                <li>
                                    <a href="{{url('/profile')}}/{{auth()->user()->id}}">
                                        <i class="icon-user"></i>پروفایل من
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-envelope-open"></i> پیام های من
                                        <span class="badge badge-danger"> 0 </span>
                                    </a>
                                </li>

                                <li class="divider"></li>
                                <li>
                                    <a href="{{url('/look')}}/{{auth()->user()->id}}">
                                        <i class="icon-lock"></i> قفل صفحه </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-key"></i> خروج </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <button type="button" class="quick-sidebar-toggler md-skip" data-toggle="collapse">
                            <span class="sr-only">Toggle Quick Sidebar</span>
                            <i class="icon-logout"></i>
                        </button>
                    </div>
                </div>
                    <div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown dropdown-fw dropdown-fw-disabled  active open selected">
                                    <a href="javascript:;" class="text-uppercase">
                                         عملیات حضور غیاب </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="dropdown more-dropdown-sub">
                                        <li>
                                            <a href="/TimeRecording"><img src="{{asset('/icon/clock.png')}}"
                                                                  title="ثبت ساعت" width="45"
                                                                  height="45"><br/></a>
                                        </li>
                                        <li>
                                            <a href="/Leave"><img src="{{asset('/icon/Leave.png')}}"
                                                                          title="درخواست مرخصی" width="45"
                                                                          height="45"><br/></a>
                                        </li>

                                        </li>
                                    </ul>
                                </li>
                            <li class="dropdown dropdown-fw dropdown-fw-disabled">
                                <a href="javascript:;" class="text-uppercase">
                                    مدیریت</a>
                                <ul class="dropdown-menu dropdown-menu-fw">
                                    <li class="dropdown more-dropdown-sub">
                                    <li>
                                        <a href="/TimeRecordingView"><img src="{{asset('/icon/icons8-checked-user-male-50.png')}}"
                                                                      title="پرسنل" width="45"
                                                                      height="45"><br/></a>
                                    </li>
                                    <li>
                                        <a href="/Leave"><img src="{{asset('/icon/Leavee.png')}}"
                                                              title="درخواست های مرخصی" width="45"
                                                              height="45"><br/></a>
                                    </li>
                                    <li>
                                        <a href="/Add"><img src="{{asset('/icon/icons8-add-user-male-50.png')}}"
                                                              title="ثبت پرسنل" width="45"
                                                              height="45"><br/></a>
                                    </li>




                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="page-content">

            @yield('form')
            @yield('form1')
        </div>
    </div>
</div>
<a href="javascript:;" class="page-quick-sidebar-toggler">
    <i class="icon-login"></i>
</a>
<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
    <div class="page-quick-sidebar">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> پرسنل
                    <span class="badge badge-danger">0</span>
                </a>
            </li>
            <li>
                <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> اخطارها
                    <span class="badge badge-success">0</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> بیشتر
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_31" data-toggle="tab">
                            <i class="icon-bell"></i> اعلانها </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_32" data-toggle="tab">
                            <i class="icon-info"></i> خطاها </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_33" data-toggle="tab">
                            <i class="icon-speech"></i> فعالیت ها </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-settings"></i> تنظیمات </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="tab-content">

            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd"
                     data-wrapper-class="page-quick-sidebar-list">

                    @foreach(auth()->user()->get() as $user)
                        <ul class="media-list list-items">
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-success">0</span>
                                </div>

                                <img class="media-object" src="{{$user->image}}" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">{{$user->name}}</h4>
                                </div>

                            </li>
                        </ul>
                    @endforeach

                </div>

                <div class="page-quick-sidebar-item">
                    <div class="page-quick-sidebar-chat-user">
                        <div class="page-quick-sidebar-nav">
                            <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                <i class="icon-arrow-left"></i>بازگشت</a>
                        </div>
                        {{--<div class="page-quick-sidebar-chat-user-messages">--}}
                        {{--<div class="post out">--}}
                        {{--<img class="avatar" alt="" src="{{auth()->user()->image}}"/>--}}
                        {{--<div class="message">--}}
                        {{--<span class="arrow"></span>--}}
                        {{--<a href="javascript:;" class="name">{{$user->name}}</a>--}}
                        {{--<span class="body"> متن شما</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="post in">--}}
                        {{--<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg"/>--}}
                        {{--<div class="message">--}}
                        {{--<span class="arrow"></span>--}}
                        {{--<a href="javascript:;" class="name">نام کاربر</a>--}}
                        {{--<span class="datetime">تاریخ</span>--}}
                        {{--<span class="body"> متن </span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <div class="page-quick-sidebar-chat-user-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="متن پیام ...">
                                <div class="input-group-btn">
                                    <button type="button" class="btn green">
                                        ارسال
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                <div class="page-quick-sidebar-alerts-list">
                    <h3 class="list-heading">خطا ها</h3>
                    <ul class="feeds list-items">
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> تعداد خطاها
                                            <br/>
                                            <span class="label label-sm label-warning ">پاسخ
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">تاریخ</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                <div class="page-quick-sidebar-settings-list">
                    <h3 class="list-heading">تنظیمات</h3>
                    <ul class="list-items borderless">
                        <li> صدای اعلان
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success"
                                   data-on-text="ON" data-off-color="default" data-off-text="OFF"></li>
                        <li> خطاهای رخ داده
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger"
                                   data-on-text="ON" data-off-color="default" data-off-text="OFF"></li>
                        <li>صدای پیام
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success"
                                   data-on-text="ON" data-off-color="default" data-off-text="OFF"></li>
                    </ul>
                    <div class="inner-content">
                        <button class="btn btn-success">
                            <i class="icon-settings"></i>ذخیره تغیرات
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="quick-nav-overlay"></div>

<script src="{{asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/layouts/layout5/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}"
        type="text/javascript"></script>
<script src="{{asset('http://maps.google.com/maps/api/js?sensor=false')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/gmaps/gmaps.min.js')}}" type="text/javascript"></script>


<script src="{{asset('/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('/assets/global/plugins/excanvas.min.js')}}"></script>
<script src="{{asset('/assets/global/plugins/ie8.fix.min.js')}}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{asset('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('/assets/apps/scripts/calendar.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('/assets/layouts/layout5/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

<script>
    $(document).ready(function () {
        $(".search").keyup(function () {
            var searchTerm = $(".search").val();
            var listItem = $('.results tbody').children('tr');
            var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

            $.extend($.expr[':'], {
                'containsi': function (elem, i, match, array) {
                    return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                }
            });

            $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function (e) {
                $(this).attr('visible', 'false');
            });

            $(".results tbody tr:containsi('" + searchSplit + "')").each(function (e) {
                $(this).attr('visible', 'true');
            });

            var jobCount = $('.results tbody tr[visible="true"]').length;
            $('.counter').text(jobCount + ' item');

            if (jobCount == '0') {
                $('.no-result').show();
            }
            else {
                $('.no-result').hide();
            }
        });
    });
</script>
@yield('script')
</body>
</html>

