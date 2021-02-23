@extends('layouts.app')

@section('meta')
    <title>{{ __('def.directory') }} - {{ __('def.title') }}</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="{{ __('def.directory') }} - {{ __('def.title') }}" />
    <meta property="og:description" content="The listing of LSP's very own artists." />
    <meta name="description" content="The listing of LSP's very own artists." />
@endsection

@section('content')

    <div class="contentWrap" style="margin-top: 60px">

        <div class="departments">

            @if($data->count())

                @foreach($data as $user)

                    <h2 class="titleBar">
                        {{ $user->name }}
                    </h2>

                    <div class="performanceBox mdc-elevation--z2">
                        <div class="perfImg" style="height: auto!important;">
                            <img style="border-radius: 5px!important;" src="{{ $user->image }}" alt="show_media">
                        </div>
                    </div>

                    <div class="performanceBox" style="width: 600px">

                        <p>{{ $user->bio }}</p>

                    </div>

                @endforeach

            @else()
                <p>{{ __('def.no_show') }}</p>
            @endif

        </div>

    </div>
@endsection
