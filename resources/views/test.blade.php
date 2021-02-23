<!doctype html>
<html>
<head>

    <title>HOME - Luwal Sining-Pagganap</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="HOME - Luwal Sining-Pagganap" />
    <meta property="og:description" content="The official website of the Luwal Sining-Pagganap" />
    <meta name="description" content="The official website of the Luwal Sining-Pagganap" />

    <!-- VIEWPORTS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>
    <h2>Check Below!</h2>
    <p>{{ $show->sName }}</p>
    <p>{{ $show->sDate }}</p>
    <p>{{ $show->sLog }}</p>
    <img alt="pMedia" src="../img/{{ $show->sMedia }}">
</body>
</html>
