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
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
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
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://luwalsining.org" />

</head>

<header class="mdc-elevation--z3">

    <div class="headerWrap">
        <a href="{{ route('home', app()->getLocale()) }}">
            <div id="headerImg">
                <img src="{{ asset('img/luwal_logo.png') }}" alt="luwal_logo" class="mdc-elevation--z4">
            </div>
            <div id="headerText">
                <h2 style="color: #fff" id="title">{{ __('def.title') }}</h2>
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
            <a class="{{ Request::segment(2) == "" ? 'material-icons' : 'material-icons-outlined' }}" title="{{ __('def.home') }}" data-mdc-ripple-is-unbounded="true" href="{{ route('home', app()->getLocale()) }}">home</a>
            <p class="nav-text">{{ __('def.home') }}</p>
        </div>
        <div>
            <a class="{{ Request::segment(2) == "shows" ? 'material-icons' : 'material-icons-outlined' }}" title="{{ __('def.shows') }}" data-mdc-ripple-is-unbounded="true" href="{{ route('shows', app()->getLocale()) }}">theater_comedy</a>
            <p class="nav-text">{{ __('def.shows') }}</p>
        </div>
        <div>
            <a class="{{ Request::segment(2) == "directory" ? 'material-icons' : 'material-icons-outlined' }}" title="{{ __('def.directory') }}" data-mdc-ripple-is-unbounded="true" href="{{ route('dir', app()->getLocale()) }}">account_box</a>
            <p class="nav-text">{{ __('def.directory') }}</p>
        </div>
    </div>
</div>

<body>
    @yield('content')

</body>
<footer>
    <div class="textWrap">
        <div class="varLinks">
            <a href="#"><p>{{ __('def.privpol') }}</p></a>
            <a href="#"><p>{{ __('def.tos') }}</p></a>
            <div class="socials">
                <div class="socialsCont">
                    <a class="fab fa-facebook-square" style="font-size: 24px;" href="https://facebook.com/luwaLSP" target="_blank"></a>
                    <a class="fab fa-instagram" style="font-size: 24px;" href="#" target="_blank"></a>
                    <a class="fab fa-youtube-square" style="font-size: 24px;" href="https://www.youtube.com/channel/UC95DmLJKQmunjWpB2HIiVvw" target="_blank"></a>
                    <!--<a class="fab fa-patreon" style="font-size: 24px;" href="https://patreon.com/growstocks" target="_blank"></a>-->
                </div>
            </div>
        </div>
        <hr>
        <div class="lang" style="margin-bottom: 10px">
            <a href="{{ route('home', ['en']) }}" class="langLink active"><li>English</li></a><span class="blueFont">|</span>
            <a href="{{ route('home', ['tl']) }}" class="langLink active"><li>Tagalog</li></a><span class="blueFont">|</span>
            <a href="{{ route('home', ['jp']) }}" class="langLink active"><li>日本語</li></a>
        </div>
        <p class="nodecor" style="font-family: CenturyGothicBold">{{ __('def.copyright') }}</p>
    </div>
</footer>
</html>
