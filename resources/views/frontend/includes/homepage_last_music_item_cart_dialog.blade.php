<div class="player-margin col-md-4 animscroll-init" data-animscroll="fade-up">
    <div class="player">
        <div class="play-button">
            <a onclick="playAudio('myAudio{{$lastestMusic->id}}','play_iconse{{$lastestMusic->id}}')">
                <div class="play-icon">
                    <i id="play_iconse{{$lastestMusic->id}}" class="fa fa-play" style="font-size: 54px;color: white;"></i>
                </div>
            </a>

{{--            <i class="fa fa-play" aria-hidden="true"></i>--}}
        </div>
        <div class="row">
            <h4 style="margin-top: 4px">{{$lastestMusic->music_name}}</h4>
            <div class="row ml-auto">
            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
            <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$feature_musirc->id}}"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="type-time row">
            <p class="type">{{$lastestMusic->author_name}}</p>
            <p style="margin-left: 8px"><b>{{$lastestMusic->genres_id}}</b></p><br>
            <p class="time" style="margin-top: 0;margin-left: auto">{{$lastestMusic->duration}}</p>
        </div>
    </div>
</div>
