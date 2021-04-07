<audio id="myAudio{{$favoriteDetail['id']}}">
    <source src="{{url('files/preview_files/'.$favoriteDetail['preview_link'])}}" type="audio/ogg">
    <source src="{{url('files/preview_files/'.$favoriteDetail['preview_link'])}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>



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
