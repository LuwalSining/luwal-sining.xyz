@extends('layouts.portal')

@section('meta')

    <title>EDIT SHOWS - Luwal Sining-Pagganap</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="EDIT PROFILE - Luwal Sining-Pagganap" />
    <meta property="og:description" content="Hello :)" />
    <meta name="description" content="Hello :)" />

@endsection

@section('content')

    <div class="contentWrap">

        <div class="title-bar">
            <h3>EDIT SHOWS</h3>
        </div>

        <section>
            @foreach($sdata as $data)

                <a href="{{ route('perf', App::getLocale()) }}/{{ str_replace(' ', '+', $data->slug) }}">
                    <div class="sc-card" style="margin-bottom: 10px">
                        <div class="sc-card__content">
                            <h3>{{ $data->name }} <small>({{ $data->date }})</small></h3>
                            <h5>Click here to edit...</h5>
                        </div>
                    </div>
                </a>

            @endforeach
        </section>

        <div class="title-bar">
            <h3>ADD SHOW</h3>
            <h6>(Only when you want to add a show)</h6>
        </div>

        <div class="user-edit">
            <form action="{{ route('perf.add') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="sc-text-field">
                    <input id="name" class="sc-text-field__input" placeholder="a" type="text" name="name">
                    <label for="name" class="sc-text-field__label">Show Name</label>
                    <p class="sc-text-field__helper">@error('name'){{ $message }}@enderror</p>
                </div>

                <div class="sc-text-field">
                    <input id="date" class="sc-text-field__input" placeholder="a" type="text" name="date">
                    <label for="date" class="sc-text-field__label">Show Year</label>
                    <p class="sc-text-field__helper">@error('date'){{ $message }}@enderror</p>
                </div>

                <div class="sc-text-field">
                    <textarea id="logline" class="sc-text-field__input" placeholder="a" type="text" name="logline"></textarea>
                    <label for="logline" class="sc-text-field__label">Logline</label>
                    <p class="sc-text-field__helper">@error('logline'){{ $message }}@enderror</p>
                </div>

                <div class="sc-text-field">
                    <textarea id="credits" class="sc-text-field__input" placeholder="a" type="text" name="credits"></textarea>
                    <label for="credits" class="sc-text-field__label">Credits (HTML)</label>
                    <p class="sc-text-field__helper">@error('credits'){{ $message }}@enderror</p>
                </div>

                <div class="sc-text-field">
                    <input id="watchCode" class="sc-text-field__input" placeholder="a" type="text" name="watchCode">
                    <label for="watchCode" class="sc-text-field__label">YT Watch-code</label>
                    <p class="sc-text-field__helper">@error('watchCode'){{ $message }}@enderror</p>
                </div>

                <div class="sc-text-field">
                    <input class="sc-text-field__input" id="poster" type="file" name="poster">
                    <label class="sc-text-field__label" for="poster">Poster</label>
                    <p class="sc-text-field__helper">@error('poster'){{ $message }}@enderror</p>
                </div>

                <button class="sc-button sc-button--filled" type="submit" name="publish">
                    <span class="sc-button__label">ADD SHOW</span>
                </button>
            </form>
        </div>

    </div>

@endsection
