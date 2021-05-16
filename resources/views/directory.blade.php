@extends('layouts.app')

@section('meta')
    <title>{{ __('def.directory') }} - {{ __('def.title') }}</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="{{ __('def.directory') }} - {{ __('def.title') }}" />
    <meta property="og:description" content="The listing of LSP's very own artists." />
    <meta name="description" content="The listing of LSP's very own artists." />
    <meta property="og:image" content="{{ asset('img/ogphoto.png') }}" />
@endsection

@section('content')

    <div class="pic_dir mdc-elevation--z2">

        <center>
            <img src="{{ asset('img/preview_dir.png') }}">
        </center>

        <h2>{{ __('pages.previewtitle_dir') }}</h2>
        <h4>{{ __('pages.previewtext_dir') }}</h4>

    </div>

    <div class="wrap--content--no-margin-top">

        <h2 class="title-bar--on-card">
            {{ __('pages.search_by_dept') }}
        </h2>

        <div class="container--grid">

            @if($data->count())
                @foreach($data as $user)

                    <x-artist :user="$user">
                    </x-artist>

                @endforeach
            @else()
                <p>{{ __('def.no_show') }}</p>
            @endif

        </div>

    </div>
@endsection
