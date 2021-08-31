@extends('layouts.app')

@section('meta')

    <title>404 - {{ __('def.title') }}</title>
    <meta charset="UTF-8">

    <meta property="title" content="404 - {{ __('def.title') }}" />
    <meta name="description" content="PAGE NOT FOUND!" />

    <meta property="og:title" content="404 - {{ __('def.title') }}" />
    <meta property="og:description" content="PAGE NOT FOUND!" />
    <meta property="og:image" content="{{ asset('img/favicon.png') }}" />

    <meta property="twitter:title" content="404 - {{ __('def.title') }}" />
    <meta property="twitter:description" content="PAGE NOT FOUND!" />
    <meta property="twitter:image" content="{{ asset('img/favicon.png') }}" />

@endsection

@section('content')

    <div class="banner--directory">

        <div class="banner__text">
            <h2>404 PAGE NOT FOUND!</h2>
            <h4>Yikes!</h4>
        </div>

    </div>

@endsection
