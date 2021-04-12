<audio id="myAudio{{$cartDetail->id}}">
    <source src="{{url('files/preview_files/'.$cartDetail->attributes->preview_link)}}" type="audio/ogg">
    <source src="{{url('files/preview_files/'.$cartDetail->attributes->preview_link)}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<input type="hidden" name="preview_link[]" value="{{$cartDetail->attributes->preview_link}}">
<input type="hidden" name="music_id[]" value="{{$cartDetail->id}}">
<input type="hidden" name="music_name[]" value="{{$cartDetail->name}}">
<input type="hidden" name="author_name[]" value="{{$cartDetail->attributes->author_name}}">
<input type="hidden" name="license_name[]" value="{{$cartDetail->attributes->license_name}}">
<input type="hidden" name="price[]" value="{{number_format($cartDetail->price,2)}}">

@if(is_mobile(request()->header('user-agent')) != true)
<div class="list-item">
    <div class="row">
        <div class="col-md-2">
            <div id="player-pop-up" onclick="playAudio('myAudio{{$cartDetail->id}}','play_icon{{$cartDetail->id}}')" class="play-button">
                <div class="play-icon">
                    <i id="play_icon{{$cartDetail->id}}" class="fa fa-play" style="font-size: 54px;color: white;"></i>
                </div>
            </div>
        </div>
        <div class="col col-md-3">
            <div class="text-group-one">
                <h6>{{$cartDetail->name}}</h6>
                <p> {{$cartDetail->attributes->author_name}}</p>
            </div>
        </div>
        <div class="col col-md-2 m-auto">
            <div class="text-group-two">
                <div class="duration">
                    <div class="row">
                        <p style="line-height: 1;">{{$cartDetail->attributes->license_name}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-md-1 m-auto">
            <div class="text-group-two">
                <div class="duration">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-auto">
            <div class="text-group-four">
                <h1>{{settings('currency')}} {{number_format($cartDetail->price,2)}}</h1>
            </div>
        </div>
        <div class="col-md-1 m-auto">
            <a data-toggle="modal" style="cursor: pointer" data-target="#exampleModalCenter2{{$cartDetail->id}}"><i class="fas fa-trash"></i></a>
        </div>
    </div>
</div>
@else
    <div class="list-item-mob-cart">
        <div class="row m-0">
            <div class="play-btn-mob" onclick="playAudio('myAudio{{$cartDetail->id}}','play_icon{{$cartDetail->id}}')">
                <i id="play_icon{{$cartDetail->id}}" class="fa fa-play" aria-hidden="true"></i>
            </div>
            <div class="card-content-mob">
                <div class="row">
                    <div class="col-7">
                        <h6>{{$cartDetail->name}}</h6>
                        <p>{{$cartDetail->attributes->author_name}}</p>
                    </div>
                    <div class="col-3">
                        <p>{{settings('currency')}} {{number_format($cartDetail->price,2)}}</p>
                    </div>
                    <div class="col-2">
                        <i class="fa fa-trash" style="font-size: 14px;" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif

<br><br>




@foreach($cartDetails as $cartDetail)
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter2{{$cartDetail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;">Are you sure you want to delete?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span style="color: #fff;" aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{route('frontend.cart.remove',$cartDetail->id)}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

@endforeach
