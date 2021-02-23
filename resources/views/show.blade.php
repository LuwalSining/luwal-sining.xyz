@extends('layouts.app')

@section('meta')
    <title>{{ __('def.shows') }} (Specific_Selection) - {{ __('def.title') }}</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="{{ __('def.shows') }} - {{ __('def.title') }}" />
    <meta property="og:description" content="The official listing of LSP's past, current, and future projects." />
    <meta name="description" content="The official listing of LSP's past, current, and future projects." />
@endsection

@section('content')

    <div class="contentWrap" style="margin-top: 60px">

        <div id="topPortion" style="display: block">
            <h2 class="titleBar">
                {{ __('pages.trailer') }}
            </h2>
        </div>

        <div class="performances">

            @if($sdata->count())

                @foreach($sdata as $show)

                    @if($mdata->count())
                        @foreach($mdata as $media)
                            <div class="video" style="overflow-x: scroll; margin-bottom: 10px">
                                <iframe width="560" height="315" src="{{ $media->file }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        @endforeach
                    @else
                        <p>no_video.err</p>
                    @endif



                    <h2 class="titleBar">
                        {{ $show->name }}
                    </h2>

                    <div class="performanceBox mdc-elevation--z2">
                        <div class="perfImg" style="height: auto!important;">
                            <img style="border-radius: 5px!important;" src="{{ asset('img/') }}/{{ $show->poster }}" alt="show_media">
                        </div>
                    </div>

                    <div class="performanceBox" style="width: 600px">

                            <p>{!! $show->credits !!}</p>

                    </div>

                @endforeach

            @else()
                <p>{{ __('def.no_show') }}</p>
            @endif

        </div>

    </div>
@endsection
