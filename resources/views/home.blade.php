@extends('layouts.app')

@section('meta')

    <title>{{ __('def.home') }} - {{ __('def.title') }}</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="{{ __('def.home') }} - {{ __('def.title') }}" />
    <meta property="og:description" content="The official website of the Luwal Sining-Pagganap" />
    <meta name="description" content="The official website of the Luwal Sining-Pagganap" />
    <meta property="og:image" content="{{ asset('img/ogphoto.png') }}" />

@endsection

@section('content')

    <div class="pic_preview mdc-elevation--z2">

        <center>
            <img src="{{ asset('img/preview.jpg') }}">
        </center>

        <h2>{{ __('def.title') }}</h2>
        <h4>{{ __('pages.previewtext_home') }}</h4>

    </div>

    <div class="contentWrap">

        <h2 class="titleBar">
            {{ __('pages.perf_title') }}
        </h2>

        <div class="performances">
        @if($shows->count())
            @foreach($shows as $show)

                <x-show :show="$show">
                </x-show>

            @endforeach

            <a href="{{ route('shows', app()->getLocale()) }}"><div class="showMore mdc-elevation--z2" style="margin-top: 20px;">{{ __('def.showmore') }}</div></a>

        @else()

            <p>{{ __('def.no_show') }}</p>
        @endif

        </div>

        <div class="otherWrap">

        </div>

    </div>

@endsection
