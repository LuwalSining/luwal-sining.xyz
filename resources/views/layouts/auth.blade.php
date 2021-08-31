<!doctype html>
<html>
<head>
    @yield('meta')
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <!-- LIBS -->
    <script src="https://kit.fontawesome.com/0fb562e3a8.js" crossorigin="anonymous"></script>
    <link href="css/md_icons.css" rel="stylesheet" />
    <link href="css/md_css.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="js/md_js.js"></script>

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon.png">
    <link rel="icon" type="img/png" sizes="32x32" href="../img/favicon.png">
    <link rel="icon" type="img/png" sizes="16x16" href="../img/favicon.png">

    <!-- VIEWPORTS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- OPENGRAPH -->
    <meta property="og:image" content="img/ogphoto.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://luwalsining.org" />
    <meta property="og:title" content="Luwal Sining-Pagganap" />
</head>
<body>
    @yield('content')
</body>
</html>
