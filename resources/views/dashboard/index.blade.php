@extends('layouts.portal')

@section('meta')
    <title>DASHBOARD - Luwal Sining-Pagganap</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="DASHBOARD - Luwal Sining-Pagganap" />
    <meta property="og:description" content="Hello :)" />
    <meta name="description" content="Hello :)" />
@endsection

@section('content')

    <section class="dashboard-grid">
        <div class="h1">
            <div class="title-bar">
                <h3>MY ARTIST PROFILE</h3>
            </div>

            @if(count($userData))
                @foreach($userData as $info)
                    <div class="user-profile">
                        <div class="user-profile__img">
                            <img src="{{ asset('img/pfp/' . $info->image) }}" alt="{{ $info->name }}'s photo">
                        </div>
                        <div class="user-profile__info">
                            <h3>{{ $info->name }}</h3>
                            <small>{{ $info->department }} Department</small>
                            <p>{{ $info->bio }}</p>
                        </div>
                        <div class="user-profile__actions">
                            <a href="{{ route('dir', ['en']) }}/{{ str_replace(' ', '+', $info->name) }}" target="_blank">
                                <button type="submit" class="sc-button sc-button--outlined">
                                    <span class="sc-button__label">GO TO PROFILE</span>
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>

        <div class="h2">

            <div class="title-bar">
                <h3>EDIT ARTIST PROFILE</h3>
            </div>

            <div class="user-edit">
                <form action="{{ route('profile.bio') }}" method="post">
                    @csrf

                    @foreach($userData as $data)

                        <div class="sc-text-field">
                            <textarea class="sc-text-field__input" id="bio" placeholder="I am a..." rows="10" name="bio">{{ $data->bio  }}</textarea>
                            <label class="sc-text-field__label" for="bio">Edit biography</label>
                            <p class="sc-text-field__helper">@error('bio'){{ $message }}@enderror</p>
                        </div>

                    @endforeach

                    <button class="sc-button sc-button--filled" type="submit" name="publish">
                        <span class="sc-button__label">Update Bio</span>
                    </button>
                </form>
            </div>

            <div class="user-edit">

                <form action="{{ route('profile.pfp') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @foreach($userData as $data)

                        <div class="sc-text-field">
                            <input class="sc-text-field__input" id="pfp" type="file" name="pfp">
                            <label class="sc-text-field__label" for="pfp">Edit profile picture</label>
                            <p class="sc-text-field__helper">@error('pfp'){{ $message }}@enderror</p>
                        </div>

                    @endforeach

                    <button class="sc-button sc-button--filled" type="submit" name="publish">
                        <span class="sc-button__label">Update Profile Picture</span>
                    </button>
                </form>

            </div>

            <div class="user-edit">
                <form action="{{ route('profile.role') }}" method="post">
                    @csrf

                    <div class="sc-text-field">
                        <select class="sc-text-field__input" id="role" name="role">
                            <option class="selector">--SELECT ROLE--</option>
                            <option value="Dance">Dance Department</option>
                            <option value="Music">Music Department</option>
                            <option value="Theatre Arts">Theatre Department</option>
                            <option value="Vocal">Vocal Department</option>
                        </select>
                        <label class="sc-text-field__label" for="role">Edit art department</label>
                        <p class="sc-text-field__helper">@error('role'){{ $message }}@enderror</p>
                    </div>

                    <button class="sc-button sc-button--filled" type="submit" name="publish">
                        <span class="sc-button__label">Update Role</span>
                    </button>
                </form>
            </div>

            <div class="user-edit">
                <form action="{{ route('profile.links') }}" method="post">
                    @csrf
                    @foreach($linkData as $link)
                        <div class="sc-text-field">
                            <input id="fb" name="fb" class="sc-text-field__input" type="text" value="{{ $link->facebook }}" placeholder="a">
                            <label for="fb" class="sc-text-field__label">Facebook Link</label>
                        </div>
                        <div class="sc-text-field">
                            <input id="twt" name="twt" class="sc-text-field__input" type="text" value="{{ $link->twitter }}" placeholder="b">
                            <label for="twt" class="sc-text-field__label">Twitter Handle (no @)</label>
                        </div>
                        <div class="sc-text-field">
                            <input id="ig" name="ig" class="sc-text-field__input" type="text" value="{{ $link->instagram }}" placeholder="b">
                            <label for="ig" class="sc-text-field__label">Instagram Handle (no @)</label>
                        </div>
                        <div class="sc-text-field">
                            <input id="yt" name="yt" class="sc-text-field__input" type="text" value="{{ $link->youtube }}" placeholder="b">
                            <label for="yt" class="sc-text-field__label">Youtube Channel</label>
                        </div>
                        <div class="sc-text-field">
                            <input id="linkedin" name="linkedin" class="sc-text-field__input" type="text" value="{{ $link->linkedin }}" placeholder="b">
                            <label for="linkedin" class="sc-text-field__label">LinkedIn</label>
                        </div>
                        <div class="sc-text-field">
                            <input id="website" name="website" class="sc-text-field__input" type="text" value="{{ $link->website }}" placeholder="b">
                            <label for="website" class="sc-text-field__label">Personal website link</label>
                        </div>
                    @endforeach

                    <button class="sc-button sc-button--filled" type="submit" name="publish">
                        <span class="sc-button__label">Update Links</span>
                    </button>

                </form>
            </div>

        </div>
    </section>

@endsection
