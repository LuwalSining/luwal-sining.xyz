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
        <p class="label mdc-elevation--z1" style="width: calc(100% - 14px); background-color: #c80003; border-radius: 5px; color: white; padding: 7px; font-size: 14px">(NOTE: Due to the current system that is available at the moment, you are required to update everything if you want to update a portion of your profile. This will be changed later down the line so please bear with it. :<</p>
        <div class="s1">
            <div class="h1">
                <div class="titleBar" style="border-bottom-color: #9A7E5C">
                    <h3 style="color: #fff!important;">MY ARTIST PROFILE</h3>
                </div>
                <div class="formCont mdc-elevation--z1">
                    @if(count($userData))
                        @foreach($userData as $info)
                            <div class="profileImg">
                                <img src="{{ $info->image }}" alt="{{ $info->name }}'s photo">
                            </div>
                            <hr>
                            <div class="profileWrap">
                                <h4>{{ $info->name }}</h4>
                                <p style="margin-bottom: 5px"><i>{{ $info->department }} Department</i></p>
                                <p>{{ $info->bio }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="h2">
                <div class="titleBar" style="border-bottom-color: #9A7E5C">
                    <h3 style="color: #fff!important;">EDIT ARTIST PROFILE</h3>
                </div>
                <div class="formCont mdc-elevation--z1" style="margin-bottom: 10px;">
                    <p class="error">
                        @error('body')
                        {{ $message }}<br>
                        @enderror
                        @error('role')
                        {{ $message }}<br>
                        @enderror
                        @error('showlog')
                        {{ $message }}<br>
                        @enderror
                        @error('showcreds')
                        {{ $message }}<br>
                        @enderror
                        @error('showslug')
                        {{ $message }}<br>
                        @enderror
                    </p>
                    <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <p class="label" for="bio">Edit biography</p>
                        <textarea placeholder="I am a..." rows="10" name="bio"></textarea>
                        <p class="label" for="role">Edit art department</p>
                        <select name="role">
                            <option class="selector">--SELECT ROLE--</option>
                            <option value="Dance">Dance Department</option>
                            <option value="Music">Music Department</option>
                            <option value="Theatre Arts">Theatre Department</option>
                            <option value="Vocal">Vocal Department</option>
                        </select>
                        <p class="label" for="pfp">Change Profile Picture</p>
                        <input type="text" name="pfp" placeholder="Paste profile picture link..." required>
                        <button type="submit" name="publish">PUBLISH</button>
                    </form>
                </div>
                <div class="titleBar" style="border-bottom-color: #9A7E5C">
                    <h3 style="color: #fff!important;">EDIT LINKS (TEMPORARILY DISABLED)</h3>
                </div>
                <div class="formCont mdc-elevation--z1">
                    <p class="error">
                        @error('showname')
                        {{ $message }}<br>
                        @enderror
                        @error('showyear')
                        {{ $message }}<br>
                        @enderror
                        @error('showlog')
                        {{ $message }}<br>
                        @enderror
                        @error('showcreds')
                        {{ $message }}<br>
                        @enderror
                        @error('showslug')
                        {{ $message }}<br>
                        @enderror
                    </p>
                    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <p class="label">Social Links</p>
                        <!--<input type="text" name="fb" placeholder="Facebook Link (optional)">
                        <input type="text" name="twt" placeholder="Twitter Link (optional)">
                        <input type="text" name="ig" placeholder="Instagram Link (optional)">
                        <input type="text" name="linkedin" placeholder="LinkedIn Link (optional)">

                        <button type="submit" name="publish">PUBLISH</button>-->
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
