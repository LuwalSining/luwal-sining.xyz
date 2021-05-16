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

    <div class="wrap--content" style="margin-top: 70px">

        <div class="title-bar--on-card">
            <h3>ARTIST PROFILE</h3>
        </div>

        <div class="container--flex">

            @if($data->count())

                @foreach($data as $user)

                    <div class="performanceBox">
                        <div class="perfImg mdc-elevation--z2" style="height: auto!important; width: 300px">
                            <img style="border-radius: 5px!important; width: 300px" src="{{ $user->image }}" alt="show_media">
                        </div>

                        <div class="socials" style="margin: 10px auto 0 auto; width: 200px; display: flex; justify-content: space-evenly;">

                            @foreach($links as $link)

                                    @if($link->facebook)
                                        <a class="fab fa-facebook-square" style="font-size: 24px;" href="{{ $link->facebook }}" target="_blank"></a>
                                    @endif

                                    @if($link->twitter)
                                        <a class="fab fa-twitter" style="font-size: 24px;" href="https://twitter.com/{{ $link->twitter }}" target="_blank"></a>
                                    @endif

                                    @if($link->instagram)
                                        <a class="fab fa-instagram" style="font-size: 24px;" href="https://instagram.com/{{ $link->instagram }}" target="_blank"></a>
                                    @endif

                                    @if($link->youtube)
                                        <a class="fab fa-youtube" style="font-size: 24px;" href="{{ $link->youtube }}" target="_blank"></a>
                                    @endif

                                    @if($link->linkedin)
                                        <a class="fab fa-linkedin" style="font-size: 24px;" href="{{ $link->linkedin }}" target="_blank"></a>
                                    @endif

                                    @if(substr($link->website, 0, 31) == "https://open.spotify.com/artist")
                                        <a class="fab fa-spotify" style="font-size: 24px;" href="{{ $link->website }}" target="_blank"></a>
                                    @elseif(substr($link->website, 0, 22) == "https://musescore.com/")
                                         <a class="fas fa-music" style="font-size: 24px;" href="{{ $link->website }}" target="_blank"></a>
                                    @elseif($link->website)
                                        <a class="fas fa-user" style="font-size: 24px;" href="{{ $link->website }}" target="_blank"></a>
                                    @endif

                            @endforeach

                        </div>

                    </div>

                    <div class="performanceBox" style="width: 600px; text-align: justify">

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
