<!doctype html>
<html>
<head>

    @yield('meta')

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mobile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/medium.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/full.css') }}">
    <!--<link rel="stylesheet" type="text/css" href="CSS/style.min.css" id="changeStyle">-->

    <!-- LIBS -->
    <script src="https://kit.fontawesome.com/0fb562e3a8.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/md_icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/md_css.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/md_js.js') }}"></script>

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="img/png" sizes="32x32" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="img/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">

    <!-- VIEWPORTS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- OPENGRAPH -->
    <meta property="og:image" content="{{ asset('img/ogphoto.jpg') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://luwalsining.org" />
    <meta property="og:title" content="Luwal Sining-Panggap" />

</head>

<header class="mdc-elevation--z3">

    <div class="headerWrap">
        <a href="./">
            <div id="headerImg">
                <img src="{{ asset('img/luwal_logo.png') }}" alt="luwal_logo" class="mdc-elevation--z4">
            </div>
            <div id="headerText">
                <h2 style="color: #fff" id="title">LSP Dashboard</h2>
            </div>
        </a>
    </div>

</header>

<script type="text/javascript">
    $(document).ready(function(){$("#69420desu").click(function(){$("#drawer2").fadeToggle("fast"),$("#69420desu").toggleClass("close");var e=document.getElementById("69420desu");"bu4 material-icons"===e.className?e.innerHTML="settings":"bu4 material-icons close"===e.className&&(e.innerHTML="close")})});
</script>

<div class="navBar">
    <div class="navCont">
        <div>
            <a class="bu1 material-icons " title="HOME" data-mdc-ripple-is-unbounded="true" href="{{ route('dashboard') }}">home</a>
        </div>
        <div>
            <a class="bu2 material-icons " title="DATABASE" data-mdc-ripple-is-unbounded="true" href="../../../../phpmyadmin">storage</a>
        </div>
        <div>
            <a class="bu3 material-icons " title="LOGOUT" data-mdc-ripple-is-unbounded="true" href="{{ route('logout') }}">exit_to_app</a>
        </div>
        <div>
            <p class="bu4 material-icons" onClick="mCh()" id="69420desu" title="SITE SETTINGS" data-mdc-ripple-is-unbounded="true">settings</p>
        </div>
    </div>
</div>

<div class="menuDrawer mdc-elevation--z4" id="drawer2">

    <div class="textCont" style="margin: 0 auto;">

        <a href="{{ route('dashboard') }}">
            <span class="material-icons" style="font-size: 16px!important;">account_circle</span><p class="profile_name">{{ auth()->user()->name }}</p>
            <g class="profile_span">Edit Profile</g>
        </a>

        <a href="about.php"><span class="material-icons">list_alt</span><p>Changelogs</p></a>

        <center>

            <div class="textDivider">
                <p>SOCIAL MEDIA</p>
            </div>

            <div class="socials">
                <a class="fab fa-facebook-square" style="font-size: 24px;" href="https://facebook.com/luwaLSP" target="_blank"> &ensp;</a>
                <a class="fab fa-instagram" style="font-size: 24px;" href="" target="_blank">&ensp;&ensp;</a>
                <a class="fab fa-youtube-square" style="font-size: 24px;" href="" target="_blank">&ensp;&ensp;</a>
            </div>

        </center>

        <div class="textDivider">
            <p title="made with &hearts; by Matteu">Copyright Luwal Sining-Pagganap &copy; 2021</p>
        </div>

    </div>

</div>

<body style="background-color: #4a4a4a; margin-top: 70px">
@yield('content')
</body>
</html>
