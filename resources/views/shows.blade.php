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
    <div class="pic_shows mdc-elevation--z2">

        <center>
            <img src="{{ asset('img/preview_performances.png') }}">
        </center>

        <h2>{{ __('pages.previewtitle_show') }}</h2>
        <h4>{{ __('pages.previewtext_show') }}</h4>

    </div>

    <div class="contentWrap">

        <h2 class="titleBar">
            {{ __('pages.show_title') }}
        </h2>

        <div class="performances">

            @if($shows->count())
                @foreach($shows as $show)

                    <x-show :show="$show">
                    </x-show>

                @endforeach
            @else()
                <p>{{ __('def.no_show') }}</p>
            @endif

        </div>

    </div>
@endsection
