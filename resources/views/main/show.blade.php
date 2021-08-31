@extends('layouts.app')

@section('meta')
    @foreach ($sdata as $data)

        <title>{{ $data->name }} - {{ __('def.title') }}</title>
        <meta charset="UTF-8">

        <meta property="title" content="{{ $data->name }} - {{ __('def.title') }}" />
        <meta name="description" content="{{ $data->logline }}" />

        <meta property="og:title" content="{{ $data->name }} - {{ __('def.title') }}" />
        <meta property="og:description" content="{{ $data->logline }}" />
        <meta property="og:image" content="{{ asset('img/shows') }}/{{ $data->poster }}" />

        <meta property="twitter:title" content="{{ $data->name }} - {{ __('def.title') }}" />
        <meta property="twitter:description" content="{{ $data->logline }}" />
        <meta property="twitter:image" content="{{ asset('img/shows') }}/{{ $data->poster }}" />

    @endforeach
@endsection

@section('content')

    <style>
        .video {
            border-radius: 7px;
        }
    </style>

    @foreach($sdata as $show)

        <div class="banner--show">
            <div class="show__img">
                <iframe width="320" height="215" src="https://www.youtube.com/embed/{{ $show->watch_code  }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    @endforeach

    <div class="wrap--content--no-margin-top">

        <div class="show__info">
            <div class="show__title">
                <h2>{{ $show->name }}</h2>
                <p class="date">({{ $show->date }})</p>
            </div>
            <div class="show__actions">
                @if($pdata->count())
                    @foreach($pdata as $data)

                        @if(!$data->link)

                            <button class="sc-button sc-button--filled" disabled>
                                <span class="sc-button__label">{{ __('pages.no_access') }}</span>
                            </button>

                        @else

                            <a href="{{ $data->link }}" target="_blank" nofollow>
                                <button class="sc-button sc-button--filled">
                                    <span class="sc-button__label">{{ __('pages.access') }}</span>
                                </button>
                            </a>

                        @endif

                    @endforeach
                @else

                    <button class="sc-button sc-button--filled" disabled>
                        <span class="sc-button__label">{{ __('pages.no_access') }}</span>
                    </button>

                @endif()
            </div>
        </div>

        <div class="container--flex">

            <div style="width: 100%; max-width: 920px; display: flex; flex-flow: row wrap; gap: 20px; justify-content: space-evenly">
                @if($sdata->count())

                    @foreach($sdata as $show)

                        <div class="performanceBox">
                            <div class="perfImg" style="height: auto; width: 300px">
                                <img style="width: 300px" class="mdc-elevation--z3" src="{{ asset('img/shows') }}/{{ $show->poster }}">
                            </div>
                        </div>

                        <div class="performanceBox" style="width: 600px;">

                            <h2 class="titleBar show__credits">{{ __('pages.credits') }}</h2>

                            <p class="show__credits">{!! $show->credits !!}</p>

                        </div>

                    @endforeach

                @else()
                    <p>{{ __('def.no_show') }}</p>
                @endif
            </div>

        </div>

    </div>
@endsection
