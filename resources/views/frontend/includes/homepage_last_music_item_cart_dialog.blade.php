<audio id="myAudioq{{$lastestMusic->id}}">
    <source src="{{url('files/preview_files/'.$lastestMusic->preview_link)}}" type="audio/ogg">
    <source src="{{url('files/preview_files/'.$lastestMusic->preview_link)}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<div class="player-margin col-lg-4 col-md-6 col-12 animscroll-init" data-animscroll="fade-up">
    <div class="player">
        <div class="play-button">
            <a onclick="playAudio('myAudioq{{$lastestMusic->id}}','play_iconse{{$lastestMusic->id}}')">
                <div class="play-icon">
                    <i id="play_iconse{{$lastestMusic->id}}" class="fa fa-play" style="font-size: 54px;color: white;"></i>
                </div>
            </a>

{{--            <i class="fa fa-play" aria-hidden="true"></i>--}}
        </div>
        <div class="row">
            <h4 style="margin-top: 4px">{{$lastestMusic->music_name}}</h4>
            <div class="row ml-auto">
                @auth()
                    @if(\App\Models\Favorite::where('music_id',$lastestMusic->id)->first() != null)
                        <a onclick="add_favorites('{{$lastestMusic->id}}','favorite_iconRT{{$lastestMusic->id}}')">
                            <i id="favorite_iconRT{{$lastestMusic->id}}" class="fa fa-heart" aria-hidden="true" style="color: red;"></i>
                        </a>
                    @else
                        <a onclick="add_favorites('{{$lastestMusic->id}}','favorite_iconRT{{$lastestMusic->id}}')">
                            <i id="favorite_iconRT{{$lastestMusic->id}}" class="fa fa-heart" aria-hidden="true" style=""></i>
                        </a>
                    @endif
                @else
                    <a href="{{route('frontend.auth.login')}}">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                @endauth

            <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$lastestMusic->id}}"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="type-time row">
            <p class="type" style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;width: 80px;">{{$lastestMusic->author_name}}</p>
            <p style="margin-left: 8px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;width: 80px;"><b>{{$lastestMusic->genres_id}}</b></p><br>
            <p class="time" style="margin-top: 0;margin-left: auto">{{$lastestMusic->duration}}</p>
        </div>
    </div>
</div>
