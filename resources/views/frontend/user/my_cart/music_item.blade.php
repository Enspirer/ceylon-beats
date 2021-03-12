<audio id="myAudio{{$cartDetail->id}}">
    <source src="{{url('files/preview_files/'.$cartDetail->attributes->preview_link)}}" type="audio/ogg">
    <source src="{{url('files/preview_files/'.$cartDetail->attributes->preview_link)}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<div class="list-item">
    <div class="row">
        <div class="col-md-2">
            <div
                    id="player-pop-up"
                    onclick="playAudio('myAudio{{$cartDetail->id}}','play_icon{{$cartDetail->id}}')"
                    class="play-button"
            >
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
                        <p>{{$cartDetail->attributes->license_name}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-md-1 m-auto">
            <div class="text-group-two">
                <div class="duration">
                    <div class="row">
                        <p>24.28 MB</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-auto">
            <div class="text-group-four">
                <h1>LKR {{number_format($cartDetail->price,2)}}</h1>
            </div>
        </div>
        <div class="col-md-1 m-auto">
            <a data-toggle="modal" style="cursor: pointer" data-target="#exampleModalCenter2{{$cartDetail->id}}"><i class="fas fa-trash"></i></a>
        </div>
    </div>
</div>

@foreach($cartDetails as $cartDetail)
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter2{{$cartDetail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;">Are You Sure Delete Music?</h5>
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
