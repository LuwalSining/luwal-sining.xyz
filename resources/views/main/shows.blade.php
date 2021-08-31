@extends('layouts.app')

@section('meta')
    <title>{{ __('def.shows') }} - {{ __('def.title') }}</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="{{ __('def.shows') }} - {{ __('def.title') }}" />
    <meta property="og:description" content="The official listing of LSP's past, current, and future projects." />
    <meta name="description" content="The official listing of LSP's past, current, and future projects." />
    <meta property="og:image" content="{{ asset('img/ogphoto.png') }}" />
@endsection

@section('content')
    <div class="banner banner--shows">
        <center>
            <img class="banner__img" src="{{ asset('img/preview_performances.png') }}" alt="Home Banner">
        </center>
        <div class="banner__text">
            <h2>{{ strtoupper(__('pages.previewtitle_show')) }}</h2>
            <h4>{{ __('pages.previewtext_show') }}</h4>
        </div>
    </div>

    <div class="wrap--content--no-margin-top">

        <h2 class="title-bar">
            {{ __('pages.current') }}
        </h2>

        <div class="container--grid">

            @foreach($shows as $show)

                @if($show->status == 2)

                    <x-show :show="$show"/>

                @else

                    <p>{{ __('def.no_show') }}</p>

                @endif

            @endforeach

        </div>

        <h2 class="title-bar">
            {{ __('pages.future') }}
        </h2>

        <div class="container--grid">

            @foreach($shows as $show)

                @if($show->status == 1)

                    <x-show :show="$show"/>

                @else

                    <p>{{ __('def.no_show') }}</p>

                @endif

            @endforeach

        </div>

        <h2 class="title-bar">
            {{ __('pages.show_title') }}
        </h2>

        <div class="container--grid">

            @if($shows->count())
                @foreach($shows as $show)

                    <x-show :show="$show"/>

                @endforeach
            @else
                <p>{{ __('def.no_show') }}</p>
            @endif

        </div>

    </div>
@endsection
