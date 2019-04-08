<!DOCTYPE html>
<html lang="en" class="ie8 no-js">
<html lang="en" class="ie9 no-js">

<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8" />
    <title>سیستم حضور غیاب سامانه توربین</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page ofRTL  Theme #5 for "
          name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/global/css/components-md-rtl.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{asset('/assets/global/css/plugins-md-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/pages/css/login-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">

    <h3 style="color: blue">Tourbin</h3>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> لطفا ایمیل و کلمه عبور خود را وارد کنید! </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">ایمیل</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" placeholder="ایمیل" name="email"  required />


        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">کلمه عبور</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" placeholder="کلمه عبور" name="password" required />


        </div>
        <div class="form-actions">
            <button type="submit" class="btn red btn-block uppercase">ورود</button>
        </div>
        <div class="form-actions">
            <div class="pull-left">
                <label class="rememberme mt-checkbox mt-checkbox-outline">
                    <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }} /> من را به خاطر بسپار
                    <span></span>
                </label>
            </div>
            <div class="pull-right forget-password-block">
                <a href="javascript:;" id="forget-password" class="forget-password">کلمه عبور خود را فراموش کرده اید؟</a>
            </div>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="{{ route('password.request') }}" method="post">
        <div class="form-title">

            <span class="form-subtitle">لطفا ایمیل خود را وارد کنید</span>
        </div>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" placeholder="ادرس ایمیل" name="email" required /> </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn btn-default">بازگشت</button>
            <button type="submit" class="btn btn-primary uppercase pull-right">ارسال</button>
        </div>
    </form>
</div>




<div class="copyright"><h4>سیستم حضور غیاب کارمندان توربین</h4></div>
<script src="{{asset('/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('/assets/global/plugins/excanvas.min.js')}}"></script>
<script src="{{asset('/assets/global/plugins/ie8.fix.min.js')}}"></script>
<script src="{{asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/login.min.js')}}" type="text/javascript"></script>
</body>
</html>