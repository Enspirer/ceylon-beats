<audio id="myAudio{{$feature_musirc->id}}">
    <source src="{{url('files/preview_files/'.$feature_musirc->preview_link)}}" type="audio/ogg">
    <source src="{{url('files/preview_files/'.$feature_musirc->preview_link)}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 8" style="width: 250.5px; margin-right: 20px;">
    <div class="top-image">
        <img src="{{url('ceylon_beats_theme/assets/albumart.png')}}" alt="">
    </div>

    <div class="bottum-details">
        <a onclick="playAudio('myAudio{{$feature_musirc->id}}','play_icon{{$feature_musirc->id}}')">
            <div class="play-icon">
                <i id="play_icon{{$feature_musirc->id}}" class="fa fa-play" style="font-size: 54px;color: white;"></i>
            </div>
        </a>

        <div class="row">
            <a href="#"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-heart" aria-hidden="true"></i></a>
        </div>
        <h3>{{$feature_musirc->music_name}}</h3>
        <div class="type-time">
            <p class="type">{{$feature_musirc->genres_id}}</p>
            <p class="time">{{$feature_musirc->duration}}</p>
        </div>
    </div>
</div>
