<audio id="myAudio{{$feature_musirc->id}}">
    <source src="{{url('files/preview_files/'.$feature_musirc->preview_link)}}" type="audio/ogg">
    <source src="{{url('files/preview_files/'.$feature_musirc->preview_link)}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 8" style="width: 250.5px; margin-right: 20px;">
    <div class="top-image">
        <img src="{{url('ceylon_beats_theme/assets/image/MaskGroup2@2x.png')}}" alt="">
    </div>

    <div class="bottum-details">
        <a onclick="playAudio('myAudio{{$feature_musirc->id}}','play_icon{{$feature_musirc->id}}')">
            <div class="play-icon">
                <i id="play_icon{{$feature_musirc->id}}" class="fa fa-play" style="font-size: 54px;color: white;"></i>
            </div>
        </a>

        <div class="row">
            <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                    <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                </svg>
            </i>
            <i><svg xmlns="http://www.w3.org/2000/svg" width="19.619" height="18" viewBox="0 0 19.619 18">
                    <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M14.951,24.427l-1.422-1.29c-5.052-4.586-8.387-7.612-8.387-11.315a5.337,5.337,0,0,1,5.4-5.4,5.887,5.887,0,0,1,4.414,2.045,5.887,5.887,0,0,1,4.414-2.045,5.337,5.337,0,0,1,5.4,5.4c0,3.7-3.335,6.729-8.387,11.315Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                </svg>
            </i>
        </div>
        <h3>{{$feature_musirc->music_name}}</h3>
        <div class="type-time">
            <p class="type">{{$feature_musirc->genres_id}}</p>
            <p class="time">{{$feature_musirc->duration}}</p>
        </div>
    </div>
</div>
