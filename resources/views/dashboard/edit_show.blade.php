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

        <div class="titleBar" style="border-bottom-color: #9A7E5C">
            <h3 style="color: #fff!important;">EDIT SHOWS</h3>
        </div>

        <section style="margin-bottom: 20px">
            @foreach($sdata as $data)

                <a href="{{ route('perf', app()->getLocale()) }}/{{ str_replace(' ', '+', $data->slug) }}">
                    <div class="formCont" style="margin-bottom: 10px">
                        <h3 style="flex-shrink: 0">{{ $data->name }}<p style="font-size: 14px;display:inline-block; margin-left: 5px">({{ $data->date }})</p></h3>
                        <h5>Click here to edit...</h5>
                    </div>
                </a>

            @endforeach
        </section>

        <div class="titleBar" style="border-bottom-color: #9A7E5C">
            <h3 style="color: #fff!important; display: inline-block">ADD SHOW</h3>
            <h6 style="color: #fff!important; display: inline-block; margin-left: 5px">(Only when you want to add a show)</h6>
        </div>

        <div class="formCont">
            <form action="{{ route('perf.add') }}" method="post" enctype="multipart/form-data">
                @csrf

                <label for="name" style="font-size: 14px; margin-bottom: 10px">Show Name</label>
                <input id="name" placeholder="Show name..." type="text" name="name">

                <label for="date" style="font-size: 14px; margin-bottom: 10px">Show Year</label>
                <input id="date" placeholder="Show date..." type="number" name="date">

                <label for="logline" style="font-size: 14px; margin-bottom: 10px">Logline</label>
                <textarea id="logline" placeholder="Insert logline..." rows="5" name="logline"></textarea>

                <label for="credits" style="font-size: 14px; margin-bottom: 10px">Credits (Markup)</label>
                <textarea id="credits" placeholder="Paste credits here..." rows="10" name="credits"></textarea>

                <label for="poster" style="font-size: 14px; margin-bottom: 10px">Poster file name</label>
                <input id="poster" placeholder="Poster file name..." type="text" name="poster">

                <button type="submit" name="publish">ADD SHOW</button>
            </form>
        </div>

    </div>

@endsection
