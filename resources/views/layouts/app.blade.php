<!doctype html>
<html lang="{{ App::getLocale() }}">
<head>

    @yield('meta')

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <!-- LIBS -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="img/png" sizes="32x32" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="img/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">

    <!-- VIEWPORTS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- OPENGRAPH -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://luwal-sining.xyz" />

</head>

<header class="sc-header">

    <div class="sc-header__wrap">
        <div class="sc-header__text">
            <a href="{{ route('home', app()->getLocale()) }}">
                <h3>
                    {{ __('def.title') }}
                </h3>
            </a>
        </div>

        <nav class="sc-appbar">
            <div class="sc-appbar__container">

                <div class="sc-appbar__item {{ Request::segment(2) == '' ? 'active' : '' }}" data-tooltip="{{ __('def.home') }}">
                    <a href="{{ route('home', App::getLocale()) }}">
                        <p class="sc-appbar__item__icon material-icons">home</p>
                        <p class="sc-appbar__item__text">{{ __('def.home') }}</p>
                    </a>
                </div>

                <div class="sc-appbar__item {{ Request::segment(2) == 'shows' ? 'active' : '' }}" data-tooltip="{{ __('def.shows') }}">
                    <a href="{{ route('shows', App::getLocale()) }}">
                        <p class="sc-appbar__item__icon material-icons">theater_comedy</p>
                        <p class="sc-appbar__item__text">{{ __('def.shows') }}</p>
                    </a>
                </div>

                <div class="sc-appbar__item {{ Request::segment(2) == 'directory' ? 'active' : '' }}" data-tooltip="{{ __('def.directory') }}">
                    <a href="{{ route('dir', App::getLocale()) }}">
                        <p class="sc-appbar__item__icon material-icons">account_box</p>
                        <p class="sc-appbar__item__text">{{ __('def.directory') }}</p>
                    </a>
                </div>

            </div>
        </nav>
    </div>

</header>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="KhrMPB0g"></script>

@yield('content')


</body>

<footer class="footer">
    <div class="footer__wrap">
        {{--<div class="footer__links">
            <div class="socials">
                <div class="socials__container">
                    <a class="fab fa-facebook" style="font-size: 24px;" href="https://facebook.com/luwaLSP"
                       target="_blank"></a>
                    <a class="fab fa-instagram" style="font-size: 24px;" href="#" target="_blank"></a>
                    <a class="fab fa-youtube" style="font-size: 24px;"
                       href="https://www.youtube.com/channel/UC95DmLJKQmunjWpB2HIiVvw" target="_blank"></a>
                </div>
            </div>
        </div>

        <hr>--}}

        <div class="footer__lang">
            <a href="{{ route('home', ['en']) }}" class="{{ App::getLocale() == 'en' ? 'active' : '' }}">English</a>
            <span class="footer__spacer">|</span>
            <a href="{{ route('home', ['tl']) }}" class="{{ App::getLocale() == 'tl' ? 'active' : '' }}">Tagalog</a>
            <span class="footer__spacer">|</span>
            <a href="{{ route('home', ['jp']) }}" class="{{ App::getLocale() == 'jp' ? 'active' : '' }}">日本語</a>
        </div>

        <p class="footer__copyright">{{ __('def.copyright') }}</p>
    </div>
</footer>
</html>
