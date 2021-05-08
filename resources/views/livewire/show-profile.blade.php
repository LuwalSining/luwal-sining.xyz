<div>
    @if(count($userData))
        @foreach($userData as $info)
            <div class="formCont mdc-elevation--z1">
                <div class="profileImg">
                    <img src="{{ $info->image }}" alt="{{ $info->name }}'s photo">
                </div>
                <hr>
                <div class="socials" style="margin-top: 10px; width: 200px; display: flex">

                    @foreach($linkData as $link)

                        @if($link->facebook)
                            <a class="fab fa-facebook-square" style="font-size: 24px;" href="{{ $link->facebook }}" target="_blank"></a>
                        @endif

                        @if($link->twitter)
                            <a class="fab fa-twitter" style="font-size: 24px;" href="https://twitter.com/{{ $link->twitter }}" target="_blank"></a>
                        @endif

                        @if($link->instagram)
                            <a class="fab fa-instagram" style="font-size: 24px;" href="https://instagram.com/{{ $link->instagram }}" target="_blank"></a>
                        @endif

                        @if($link->youtube)
                            <a class="fab fa-youtube" style="font-size: 24px;" href="{{ $link->youtube }}" target="_blank"></a>
                        @endif

                        @if($link->linkedin)
                            <a class="fab fa-linkedin" style="font-size: 24px;" href="{{ $link->linkedin }}" target="_blank"></a>
                        @endif

                        @if(substr($link->website, 0, 31) == "https://open.spotify.com/artist")
                            <a class="fab fa-spotify" style="font-size: 24px;" href="{{ $link->website }}" target="_blank"></a>
                        @elseif(substr($link->website, 0, 22) == "https://musescore.com/")
                            <a class="fas fa-music" style="font-size: 24px;" href="{{ $link->website }}" target="_blank"></a>
                        @elseif($link->website)
                            <a class="fas fa-user" style="font-size: 24px;" href="{{ $link->website }}" target="_blank"></a>
                        @endif

                    @endforeach

                </div>
                <div class="profileWrap">
                    <h4>{{ $info->name }}</h4>
                    <p style="margin-bottom: 5px"><i>{{ $info->department }} Department</i></p>
                    <p>{{ $info->bio }}</p>
                </div>
            </div>
            <a href="{{ route('dir', ['en']) }}/{{ str_replace(' ', '+', $info->name) }}" target="_blank">
                <button type="submit" class="mdc-elevation--z1" style="width: 100%">GO TO PROFILE</button>
            </a>
        @endforeach
    @endif
</div>
