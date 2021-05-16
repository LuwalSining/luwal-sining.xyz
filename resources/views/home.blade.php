@extends('layouts.app')

@section('meta')

    <title>{{ __('def.home') }} - {{ __('def.title') }}</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="{{ __('def.home') }} - {{ __('def.title') }}"/>
    <meta property="og:description" content="The official website of the Luwal Sining-Pagganap"/>
    <meta name="description" content="The official website of the Luwal Sining-Pagganap"/>
    <meta property="og:image" content="{{ asset('img/ogphoto.png') }}"/>

@endsection

@section('content')

    <div class="pic_preview mdc-elevation--z2">

        <center>
            <img src="{{ asset('img/preview.jpg') }}">
        </center>

        <h2>{{ strtoupper(__('def.title')) }}</h2>
        <h4>{{ __('pages.previewtext_home') }}</h4>

    </div>

    <div class="wrap--content--no-margin-top">

        <h2 class="title-bar--on-card">
            {{ __('pages.perf_title') }}
        </h2>

        <div class="container--grid">

            @if($shows->count())

                @foreach($shows as $show)

                    <x-show :show="$show">
                    </x-show>

                @endforeach

            @else()

                <p>{{ __('def.no_show') }}</p>

            @endif

        </div>

        @if($shows->count())
            <a href="{{ route('shows', app()->getLocale()) }}">
                <div class="btn--bold mdc-elevation--z2" style="margin-top: 20px;">{{ __('def.showmore') }}</div>
            </a>
        @endif

        <div class="otherWrap">

        </div>

    </div>

@endsection
