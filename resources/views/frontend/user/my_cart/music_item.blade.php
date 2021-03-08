<div class="list-item">
    <div class="row">
        <div class="col-md-2">
            <div
                    id="player-pop-up"
                    onclick="Onplaye('http://localhost/cb/assets/demo.wav')"
                    class="play-button"
            >
                <i class="fa fa-play" aria-hidden="true"></i>
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
            <a href="#"><i class="fas fa-trash"></i></a>
        </div>
    </div>
</div>