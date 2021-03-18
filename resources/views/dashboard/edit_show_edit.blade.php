@extends('dashboard.layouts.app')

@section('meta')

    <title>EDIT SHOWS - Luwal Sining-Pagganap</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="EDIT PROFILE - Luwal Sining-Pagganap" />
    <meta property="og:description" content="Hello :)" />
    <meta name="description" content="Hello :)" />

@endsection

@section('content')

    <div class="contentWrap">

        @foreach($sdata as $data)

        <div class="titleBar" style="border-bottom-color: #9A7E5C">
            <h3 style="color: #fff!important;">Edit "{{ $data->name }}"</h3>
        </div>

            <div class="formCont mdc-elevation--z1" style="margin-bottom: 10px;">
                <p class="error">
                    @error('bio')
                    {{ $message }}<br>
                    @enderror
                </p>

                <div class="edit-show-form">
                    <form action="{{ route('perf.edit') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <label for="id" style="font-size: 14px; margin-bottom: 10px">Show ID (UNEDITABLE)</label>
                        <input id="id" placeholder="Show name..." type="text" name="show_id" value="{{ $data->id }}" readonly>

                        <label for="name" style="font-size: 14px; margin-bottom: 10px">Show Name</label>
                        <input id="name" placeholder="Show name..." type="text" name="name" value="{{ $data->name }}">

                        <label for="date" style="font-size: 14px; margin-bottom: 10px">Show Year</label>
                        <input id="date" placeholder="Show date..." type="number" name="date" value="{{ $data->date }}">

                        <label for="logline" style="font-size: 14px; margin-bottom: 10px">Logline</label>
                        <textarea id="logline" placeholder="Insert logline..." rows="5" name="logline">{{ $data->logline }}</textarea>

                        <label for="credits" style="font-size: 14px; margin-bottom: 10px">Credits (Markup)</label>
                        <textarea id="credits" placeholder="Paste credits here..." rows="10" name="credits">{{ $data->credits }}</textarea>

                        <label for="poster" style="font-size: 14px; margin-bottom: 10px">Poster file name</label>
                        <input id="poster" placeholder="Poster file name..." type="text" name="poster" value="{{ $data->poster }}">

                        @foreach($mdata as $media)

                            <label for="embed" style="font-size: 14px; margin-bottom: 10px">Trailer YouTube Embed (Markup)</label>
                            <input id="embed" placeholder="Youtube embed..." type="text" name="embed" value="{{ $media->file }}">

                        @endforeach

                        @foreach($pdata as $perf)

                            <label for="perf" style="font-size: 14px; margin-bottom: 10px">Performance link</label>
                            <input id="perf" placeholder="Performance link..." type="text" name="link" value="{{ $perf->link }}">

                        @endforeach

                        <button type="submit" name="publish">PUBLISH</button>
                        <a href="{{ route('shows', ['en']) }}/{{ str_replace(' ', '+', $data->slug) }}" target="_blank">
                            <button type="button">GO TO SHOW</button>
                        </a>
                    </form>

                </div>

            </div>

        @endforeach

    </div>

@endsection
