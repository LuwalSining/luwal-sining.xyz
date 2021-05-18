<!doctype html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Across Rooms</title>

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="img/png" sizes="32x32" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="img/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">
</head>

<style type="text/css">

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
    }

    body {
        background: url({{ asset('img/pappel.jpg') }});
        display: grid;
        place-items: center;
        width: 100%;
        height: 100vh;
    }

    .rooms__container {
        width: calc(100% - 50px);
        max-width: 700px;
        display: grid;
        grid-column: 1 / -1;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1rem;
    }

    @media (min-width: 520px) {
        .rooms__container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (min-width: 700px) {
        .rooms__container {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .rooms__door {
        display: flex;
    }

    .rooms__door a {
        margin: 0 auto;
    }

    img {
        width: auto;
        height: 200px;
    }

</style>

<body>

 <div class="rooms__container">
     <div class="rooms__door">
         <a target="_blank" href="#">
             <img src="{{ asset('img/rooms/Room 1.jpg') }}" alt="Room 1 Door">
         </a>
     </div>
     <div class="rooms__door">
         <a target="_blank" href="#">
            <img src="{{ asset('img/rooms/Room 2.png') }}" alt="Room 2 Door">
         </a>
     </div>
     <div class="rooms__door">
         <a target="_blank" href="https://youtu.be/JFqb48qKuWY">
            <img src="{{ asset('img/rooms/Room 3.png') }}" alt="Room 3 Door">
         </a>
     </div>
     <div class="rooms__door">
         <a target="_blank" href="https://youtu.be/yTj02mVQ8rs">
            <img src="{{ asset('img/rooms/Room 4.jpg') }}" alt="Room 4 Door">
         </a>
     </div>
 </div>

</body>
</html>
