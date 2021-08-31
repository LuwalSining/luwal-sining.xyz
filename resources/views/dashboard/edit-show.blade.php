@extends('layouts.portal')

@section('meta')

    <title>EDIT SHOWS - Luwal Sining-Pagganap</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="EDIT PROFILE - Luwal Sining-Pagganap"/>
    <meta property="og:description" content="Hello :)"/>
    <meta name="description" content="Hello :)"/>

@endsection

@section('content')

    <section class="dashboard-grid">

        @foreach($sdata as $data)

            <section>
                <div class="title-bar">
                    <h3>Poster preview</h3>
                </div>
                <div class="user-profile">
                    <div class="user-profile__img">
                        <img src="{{ asset('img/shows/') . '/' . $data->poster }}" alt="Show Poster" />
                    </div>
                </div>
                <div class="user-edit">
                    <form action="{{ route('perf.edit.poster', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="sc-text-field">
                            <input class="sc-text-field__input" id="poster" type="file" name="poster">
                            <label class="sc-text-field__label" for="poster">Poster</label>
                            <p class="sc-text-field__helper">@error('poster'){{ $message }}@enderror</p>
                        </div>

                        <button class="sc-button sc-button--filled" type="submit" name="publish">
                            <span class="sc-button__label">Edit Poster</span>
                        </button>
                    </form>
                </div>
            </section>

            <section>
                <div class="title-bar">
                    <h3>Edit "{{ $data->name }}"</h3>
                </div>

                <div class="user-edit">
                    <form action="{{ route('perf.edit', $data->id) }}" method="post">
                        @csrf

                        <div class="sc-text-field">
                            <input id="name" class="sc-text-field__input" placeholder="a" type="text" name="name"
                                   value="{{ $data->name }}">
                            <label for="name" class="sc-text-field__label">Show Name</label>
                            <p class="sc-text-field__helper">@error('name'){{ $message }}@enderror</p>
                        </div>

                        <div class="sc-text-field">
                            <input id="date" class="sc-text-field__input" placeholder="a" type="text" name="date"
                                   value="{{ $data->date }}">
                            <label for="date" class="sc-text-field__label">Show Name</label>
                            <p class="sc-text-field__helper">@error('date'){{ $message }}@enderror</p>
                        </div>

                        <div class="sc-text-field">
                        <textarea id="logline" class="sc-text-field__input" placeholder="a" type="text"
                                  name="logline">{{ $data->logline }}</textarea>
                            <label for="logline" class="sc-text-field__label">Logline</label>
                            <p class="sc-text-field__helper">@error('logline'){{ $message }}@enderror</p>
                        </div>

                        <div class="sc-text-field">
                        <textarea id="credits" class="sc-text-field__input" placeholder="a" type="text"
                                  name="credits">{{ $data->credits }}</textarea>
                            <label for="credits" class="sc-text-field__label">Credits (HTML)</label>
                            <p class="sc-text-field__helper">@error('credits'){{ $message }}@enderror</p>
                        </div>

                        <div class="sc-text-field">
                            <select class="sc-text-field__input" id="status" name="status">
                                <option class="selector" value="{{ $data->status }}">--SELECT STATUS--</option>
                                <option value="1">Upcoming Show</option>
                                <option value="2">Now Showing</option>
                                <option value="3">Past Show</option>
                            </select>
                            <label class="sc-text-field__label" for="status">Edit Status</label>
                        </div>

                        <div class="sc-text-field">
                            <input id="watchCode" class="sc-text-field__input" placeholder="a" type="text" name="watchCode" value="{{ $data->watch_code }}">
                            <label for="watchCode" class="sc-text-field__label">YT Watch-code</label>
                            <p class="sc-text-field__helper">@error('watchCode'){{ $message }}@enderror</p>
                        </div>

                        @foreach($pdata as $perf)

                            <div class="sc-text-field">
                                <input id="perfLink" class="sc-text-field__input" placeholder="a" type="text" name="perfLink" value="{{ $perf->link }}">
                                <label for="perfLink" class="sc-text-field__label">Performance Link</label>
                                <p class="sc-text-field__helper">@error('perfLink'){{ $message }}@enderror</p>
                            </div>

                        @endforeach

                        <div class="user-edit__actions">
                            <button class="sc-button sc-button--filled" type="submit" name="publish">
                                <span class="sc-button__label">Edit Show</span>
                            </button>
                            <a href="{{ route('shows', ['en']) }}/{{ str_replace(' ', '+', $data->slug) }}" target="_blank">
                                <button class="sc-button sc-button--outlined" type="button">
                                    <span class="sc-button__label">GO TO SHOW</span>
                                </button>
                            </a>
                        </div>
                    </form>
                </div>
            </section>

        @endforeach

    </section>

@endsection
