@extends('dashboard.layouts.app')

@section('meta')
    <title>DASHBOARD - Luwal Sining-Pagganap</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="DASHBOARD - Luwal Sining-Pagganap" />
    <meta property="og:description" content="Hello :)" />
    <meta name="description" content="Hello :)" />
@endsection

@section('content')

    <div class="contentWrap">
        {{--<p class="label mdc-elevation--z1" style="width: calc(100% - 14px); background-color: #c80003; border-radius: 5px; color: white; padding: 7px; font-size: 14px; margin-bottom: 20px">(NOTE: Due to the current system that is available at the moment, profile photos are handled manually by the website developer; considering this, it might take a few hours to successfully update your profile photo. This will be changed later down the line so please bare with it. :<  )</p>--}}
        <div class="s1">
            <div class="h1" style="margin-bottom: 15px">
                <div class="titleBar" style="border-bottom-color: #9A7E5C">
                    <h3 style="color: #fff!important;">MY ARTIST PROFILE</h3>
                </div>

                @livewire('show-profile')

            </div>

            <div class="h2" style="width: calc(100% - 25px)">

                <div class="titleBar" style="border-bottom-color: #9A7E5C">
                    <h3 style="color: #fff!important;">EDIT ARTIST PROFILE</h3>
                </div>

                <div class="formCont mdc-elevation--z1" style="margin-bottom: 10px;">

                    <form action="{{ route('profile.edit') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        @foreach($userData as $data)

                            <label class="label" for="bio">Edit biography</label>
                            <p class="error">
                                @error('bio')
                                {{ $message }}<br>
                                @enderror
                            </p>
                            <textarea placeholder="I am a..." rows="10" name="bio">{{ $data->bio }}</textarea>

                            <label class="label" for="role">Edit profile picture</label>
                            <p class="error">
                                @error('pfp')
                                {{ $message }}<br>
                                @enderror
                            </p>
                            <input type="text" name="pfp" value="{{ $data->image }}" placeholder="Example: https://imgur.com/ewm7Xbd.jpg">

                        @endforeach

                        <button name="publish" type="submit">PUBLISH</button>
                    </form>
                </div>

                <div class="formCont mdc-elevation--z1" style="margin-bottom: 10px;">

                    <p class="error">
                        @error('role')
                        {{ $message }}<br>
                        @enderror
                    </p>

                    <form action="{{ route('profile.role') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <p class="label" for="role">Edit art department</p>
                        <select name="role">
                            <option class="selector">--SELECT ROLE--</option>
                            <option value="Dance">Dance Department</option>
                            <option value="Music">Music Department</option>
                            <option value="Theatre Arts">Theatre Department</option>
                            <option value="Vocal">Vocal Department</option>
                        </select>
                        <button type="submit" name="publish">PUBLISH</button>
                    </form>
                </div>
                <div class="formCont mdc-elevation--z1">
                    <p class="error">

                    </p>
                    <form action="{{ route('profile.links') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <p class="label">Social Links</p>
                        @foreach($linkData as $link)
                            <input type="text" name="fb" value="{{ $link->facebook }}" placeholder="Facebook Page Link w/o @ (optional)">
                            <input type="text" name="twt" value="{{ $link->twitter }}" placeholder="Twitter Handle w/o @ (optional)">
                            <input type="text" name="ig" value="{{ $link->instagram }}" placeholder="Instagram Handle w/o @ (optional)">
                            <input type="text" name="yt" value="{{ $link->youtube }}" placeholder="Youtube Channel Link (optional)">
                            <input type="text" name="linkedin" value="{{ $link->linkedin }}" placeholder="LinkedIn Link (optional)">
                            <input type="text" name="website" value="{{ $link->website }}" placeholder="Personal Website Link (optional)">
                        @endforeach

                        <button type="submit" name="publish">PUBLISH</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
