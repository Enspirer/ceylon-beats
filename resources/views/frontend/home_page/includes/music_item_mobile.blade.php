<audio id="myAudio{{$soundItem->id}}">
    <source src="{{url('files/preview_files/'.$soundItem->preview_link)}}" type="audio/ogg">
    <source src="{{url('files/preview_files/'.$soundItem->preview_link)}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>


<div class="mob-list-item">
    <div class="row m-0">
        <div class="play-btn-mob" onclick="playAudio('myAudio{{$soundItem->id}}','play_icon{{$soundItem->id}}')">
            <i id="play_icon{{$soundItem->id}}" class="fa fa-play" aria-hidden="true"></i>
        </div>
        <div class="card-content-mob">
            <div class="row">
                <div class="col-7">
                    <h6>{{$soundItem->music_name}}</h6>
                    <p>{{$soundItem->author_name}}</p>
                </div>
                <div class="col-5">
                    <div class="row">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <i class="fa fa-cart-plus" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter{{$soundItem->id}}"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{------------------ Modal ------------------ --}}
<form action="{{route('frontend.cart.add')}}" method="post">
    <div class="modal fade" id="exampleModalCenter{{$soundItem->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            {{csrf_field()}}
            <div class="modal-content">
                <h1>Select Your Licenses</h1>
                <select class="form-control" name="license_name" id="licesensect{{$soundItem->id}}" onchange="selectPackage('{{$soundItem->id}}','licesensect{{$soundItem->id}}','inpack_price{{$soundItem->id}}')">
                    <option selected>Select License</option>
                    @foreach(json_decode($soundItem->price) as  $pricerange)
                        <option value="{{$pricerange->license_name}}">{{$pricerange->license_name}}</option>
                    @endforeach
                </select>

                <input type="hidden" name="music_item_id" value="{{$soundItem->id}}">
                <div class="modal-body">
                    <input type="hidden" name="price_details" value="" id="pricedetails{{$soundItem->id}}">
                    <input type="hidden" name="music_item_id" value="{{$soundItem->id}}">
                    <input type="hidden" name="music_name" value="{{$soundItem->music_name}}">
                    <input type="hidden" name="preview_link" value="{{$soundItem->preview_link}}">
                    <input type="hidden" name="author_name" value="{{$soundItem->author_name}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="play-button">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>{{$soundItem->music_name}}</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="font-size: 19px;font-weight: 700;color: wheat;">
                                            {{settings('currency')}} <span id="inpack_price{{$soundItem->id}}">0</span>.00
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>{{$soundItem->author_name}}</h5>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn-cancel-modal" data-dismiss="modal">Cancel</a>
                    <button type="submit" id="submit_cores{{$soundItem->id}}"   class="btn-cart-modal" disabled>Add to Cart</button>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
</form>