<audio id="myAudio{{$favoriteDetail['id']}}">
    <source src="{{url('files/preview_files/'.$favoriteDetail['preview_link'])}}" type="audio/ogg">
    <source src="{{url('files/preview_files/'.$favoriteDetail['preview_link'])}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>


@if(is_mobile(request()->header('user-agent')) != true)
<div class="list-item">
    <div class="row">
        <div class="col-md-2">
            <div id="player-pop-up" onclick="playAudio('myAudio{{$favoriteDetail['id']}}','play_icon{{$favoriteDetail['id']}}')" class="play-button">
                <div class="play-icon">
                    <i id="play_icon{{$favoriteDetail['id']}}" class="fa fa-play" style="font-size: 54px;color: white;"></i>
                </div>
            </div>
        </div>
        <div class="col col-md-3">
            <div class="text-group-one">
                <h6>{{$favoriteDetail['music_name']}}</h6>
                <p> {{$favoriteDetail['author_name']}}</p>
            </div>
        </div>
        <div class="col col-md-2 m-auto">
            <div class="text-group-two">
                <div class="duration">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
        <div class="col col-md-1 m-auto">
            <div class="text-group-two">
                <div class="duration">
                    <div class="row">
                        <p style="padding-bottom:10px; ">{{$favoriteDetail['genres']}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-auto">
            <div class="text-group-four">

            </div>
        </div>
        <div class="col-md-1 m-auto">
            <a href="{{route('frontend.user.favorite.delete',$favoriteDetail['id'])}}"><i class="fas fa-trash"></i></a>
        </div>
    </div>
</div>

@else
    <div class="list-item-mob-cart">
        <div class="row m-0">
            <div class="play-btn-mob" onclick="playAudio('myAudio{{$favoriteDetail['id']}}','play_icon{{$favoriteDetail['id']}}')">
                <i id="play_icon{{$favoriteDetail['id']}}" class="fa fa-play" aria-hidden="true"></i>
            </div>
            <div class="card-content-mob">
                <div class="row">
                    <div class="col-7">
                        <h6>{{$favoriteDetail['music_name']}}</h6>
                        <p>{{$favoriteDetail['genres']}}</p>
                    </div>

                    <div class="col-2">
                        <a href="{{route('frontend.user.favorite.delete',$favoriteDetail['id'])}}">
                            <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
@endif

