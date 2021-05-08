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
        <p class="label mdc-elevation--z1" style="width: calc(100% - 14px); background-color: #c80003; border-radius: 5px; color: white; padding: 7px; font-size: 14px; margin-bottom: 20px">(NOTE: Due to the current system that is available at the moment, profile photos are handled manually by the website developer; considering this, it might take a few hours to successfully update your profile photo. This will be changed later down the line so please bare with it. :<  )</p>
        <div class="s1">
            <div class="h1" style="margin-bottom: 15px">
                <div class="titleBar" style="border-bottom-color: #9A7E5C">
                    <h3 style="color: #fff!important;">MY ARTIST PROFILE</h3>
                </div>

                @livewire('show-profile')

            </div>

            @livewire('edit-profile')

        </div>
    </div>

@endsection
