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
            <h2>ARTIST PROFILE</h2>
        </div>

        <div class="artist-container">

            @if($data->count())

                <div class="sc-card sc-card--artist">
                    <div class="sc-card__media">
                        <img src="{{ asset('img/pfp/' . $user->image) }}" alt="show_media">
                    </div>

                    <div class="sc-card__content" style="font-size: 24px;">

                        @foreach($links as $link)

                            @if($link->facebook)
                                <a href="{{ $link->facebook }}" target="_blank">
                                    <i class="ri-fw ri-facebook-fill"></i>
                                </a>
                            @endif

                            @if($link->twitter)
                                <a href="https://twitter.com/{{ $link->twitter }}" target="_blank">
                                    <i class="ri-fw ri-twitter-fill"></i>
                                </a>
                            @endif

                            @if($link->instagram)
                                <a href="https://instagram.com/{{ $link->instagram }}" target="_blank">
                                    <i class="ri-fw ri-instagram-line"></i>
                                </a>
                            @endif

                            @if($link->youtube)
                                <a href="{{ $link->youtube }}" target="_blank">
                                    <i class="ri-fw ri-youtube-fill"></i>
                                </a>
                            @endif

                            @if($link->linkedin)
                                <a href="{{ $link->linkedin }}" target="_blank">
                                    <i class="ri-fw ri-linkedin-fill"></i>
                                </a>
                            @endif

                            @if(substr($link->website, 0, 31) == "https://open.spotify.com/artist")
                                <a href="{{ $link->website }}" target="_blank">
                                    <i class="ri-fw ri-spotify-fill"></i>
                                </a>
                            @elseif(substr($link->website, 0, 22) == "https://musescore.com/")
                                <a href="{{ $link->website }}" target="_blank">
                                    <i class="ri-fw ri-folder-music-fill"></i>
                                </a>
                            @elseif($link->website)
                                <a href="{{ $link->website }}" target="_blank">
                                    <i class="ri-fw ri-laptop-line"></i>
                                </a>
                            @endif

                        @endforeach

                    </div>
                </div>

                @foreach($data as $user)

                    <div>

                        <h2 class="title-bar">
                            <span style="font-weight: 700;">{{ $user->name }}</span>
                            <span class="date" style="font-size: 14px!important; margin-left: 3px">({{ $user->department }} Department)</span>
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
