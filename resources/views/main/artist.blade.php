@extends('layouts.app')

@section('meta')
    @foreach($data as $user)

    <title>{{ $user->name }} - {{ __('def.title') }}</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="{{ $user->name }} - {{ __('def.title') }}" />
    <meta property="og:description" content="{{ $user->bio }}" />
    <meta name="description" content="{{ $user->bio }}" />
    <meta property="og:image" content="{{ $user->image }}" />

    @endforeach
@endsection

@section('content')

    <div class="wrap--content">

        <div class="title-bar">
            <h3>ARTIST PROFILE</h3>
        </div>

        <div class="artist-container">

            @if($data->count())

                <div class="sc-card sc-card--artist">
                    <div class="sc-card__img">
                        <img src="{{ asset('img/pfp/' . $user->image) }}" alt="show_media">
                    </div>

                    <div class="sc-card__content">

                        @foreach($links as $link)

                            @if($link->facebook)
                                <a style="font-size: 24px;" href="{{ $link->facebook }}" target="_blank">
                                    <i class="bx bxl-facebook-circle"></i>
                                </a>
                            @endif

                            @if($link->twitter)
                                <a style="font-size: 24px;" href="https://twitter.com/{{ $link->twitter }}" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            @endif

                            @if($link->instagram)
                                <a style="font-size: 24px;" href="https://instagram.com/{{ $link->instagram }}" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            @endif

                            @if($link->youtube)
                                <a style="font-size: 24px;" href="{{ $link->youtube }}" target="_blank">
                                    <i class="bx bxl-youtube"></i>
                                </a>
                            @endif

                            @if($link->linkedin)
                                <a style="font-size: 24px;" href="{{ $link->linkedin }}" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            @endif

                            @if(substr($link->website, 0, 31) == "https://open.spotify.com/artist")
                                <a style="font-size: 24px;" href="{{ $link->website }}" target="_blank">
                                    <i class="bx bxl-spotify"></i>
                                </a>
                            @elseif(substr($link->website, 0, 22) == "https://musescore.com/")
                                <a style="font-size: 24px;" href="{{ $link->website }}" target="_blank">
                                    <i class="bx bxs-music"></i>
                                </a>
                            @elseif($link->website)
                                <a style="font-size: 24px;" href="{{ $link->website }}" target="_blank">
                                    <i class="bx bx-laptop"></i>
                                </a>
                            @endif

                        @endforeach

                    </div>
                </div>

                @foreach($data as $user)

                    <div>

                        <h2 class="title-bar--on-card">
                            <p style="font-weight: 700; display: inline">{{ $user->name }}</p>
                            <p class="date" style="font-size: 14px!important; display: inline; margin-left: 3px">({{ $user->department }} Department)</p>
                        </h2>

                        <p>{!! $user->bio !!}</p>

                    </div>

                @endforeach

            @else()
                <p>{{ __('def.no_show') }}</p>
            @endif

        </div>

    </div>
@endsection
