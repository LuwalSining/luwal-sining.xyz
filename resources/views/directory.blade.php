@extends('layouts.app')

@section('meta')
    <title>{{ __('def.directory') }} - {{ __('def.title') }}</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="{{ __('def.directory') }} - {{ __('def.title') }}" />
    <meta property="og:description" content="The listing of LSP's very own artists." />
    <meta name="description" content="The listing of LSP's very own artists." />
@endsection

@section('content')
    <div class="pic_dir mdc-elevation--z2">

        <center>
            <img src="{{ asset('img/preview_dir.png') }}">
        </center>

        <h2>{{ __('pages.previewtitle_dir') }}</h2>
        <h4>{{ __('pages.previewtext_dir') }}</h4>

    </div>

    <div class="contentWrap">

        <h2 class="titleBar">
            {{ __('pages.search_by_dept') }}
        </h2>

        <div class="departments">

            @if($data->count())
                @foreach($data as $user)
                    <a class="showLink" href="{{ route('dir', app()->getLocale()) }}/{{ $user->id }}?id={{ $user->id }}">
                        <div class="performanceBox mdc-elevation--z2">
                            <div class="perfImg">
                                <img src="{{ $user->image }}" alt="show_media">
                            </div>
                            <div class="textBox">
                                <h3>{{ $user->name }}</h3>
                                <p>{{ $user->department }} Department</p>
                                <p>{{ __('def.detmore') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else()
                <p>{{ __('def.no_show') }}</p>
            @endif

        </div>

    </div>
@endsection
