<!doctype html>
<html lang="en">
<head>

    @yield('meta')

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/portal.css') }}">
    <!--<link rel="stylesheet" type="text/css" href="CSS/style.min.css" id="changeStyle">-->

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <!-- LIBS -->
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>

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

<body>

<header class="sc-header">
    <div class="sc-header__wrap">
        <a href="{{ route('dashboard') }}" class="sc-header__text">
            <h3>LSP Dashboard</h3>
        </a>

        <nav class="sc-appbar">
            <div class="sc-appbar__container">
                <div class="sc-appbar__item {{ Request::segment(2) == '' ? 'active' : '' }}" data-tooltip="Dashboard">
                    <a href="{{ route('dashboard') }}">
                        <p class="sc-appbar__item__icon material-icons">dashboard</p>
                        <p class="sc-appbar__item__text">Dashboard</p>
                    </a>
                </div>
                <div class="sc-appbar__item" data-tooltip="Logout">
                    <a href="{{ route('logout') }}">
                        <p class="sc-appbar__item__icon material-icons">logout</p>
                        <p class="sc-appbar__item__text">Logout</p>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>

    <main class="wrap--content">
        @yield('content')
    </main>

</body>
</html>
