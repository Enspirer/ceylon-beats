<div class="row">
    <div class="col-md-2">
        <a href="{{url('files/preview_files/'.$soundItem->preview_link)}}" id="play_item{{$key}}" class="play-button" playeritemname="{{$soundItem->music_name}}">
            <i class="fa fa-play" aria-hidden="true"></i>
        </a>

    </div>
    <div class="col col-md-3">
        <div class="text-group-one">
            <h6>{{$soundItem->music_name}}</h6>
            <p>{{$soundItem->author_name}}</p>
        </div>
    </div>
    <div class="col col-md-2">
        <div class="text-group-two">
            <div class="duration">
                <div class="row">
                    <p>Duration</p>
                    <h6>{{$soundItem->duration}}</h6>
                </div>
            </div>
            <div class="duration">
                <div class="row">
                    <p>Genres:</p>
                    <h6>{{$soundItem->genres_id}}</h6>

                </div>
            </div>
        </div>
    </div>
    <div class="col col-md-2">
        <div class="text-group-three">
            <div class="row">
                <a href="{{url('files/preview_files/'.$soundItem->preview_link)}}" download>
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="19.196"  height="24.196"  viewBox="0 0 34.196 34.196">
                        <g id="Icon_feather-download" data-name="Icon feather-download" transform="translate(2.5 2.5)">
                            <path id="Path_111" data-name="Path 111" d="M33.7,22.5v5.622a3.051,3.051,0,0,1-3.244,2.811H7.744A3.051,3.051,0,0,1,4.5,28.122V22.5" transform="translate(-4.5 -1.737)" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round"stroke-width="5"></path>
                            <path id="Path_112"  data-name="Path 112"  d="M10.5,15l8.976,7.027L28.452,15"  transform="translate(-4.878 -3.063)"  fill="none"  stroke="#b9b9b9"  stroke-linecap="round"  stroke-linejoin="round"stroke-width="5"></path>
                            <path id="Path_113"   data-name="Path 113"   d="M18,21.366V4.5"   transform="translate(-3.402 -4.5)"   fill="none"   stroke="#b9b9b9"   stroke-linecap="round"   stroke-linejoin="round" stroke-width="5"></path>
                        </g>
                    </svg>
                </a>
                @auth()
                    @if(\App\Models\Favorite::where('music_id',$soundItem->id)->first() != null)
                        <a href="#" onclick="add_favorites('{{$soundItem->id}}','favorite_icon{{$soundItem->id}}')" style="font-size: 24px;">
                            <i class="fa fa-heart" id="favorite_icon{{$soundItem->id}}" style="color: red"></i>
                        </a>
                    @else
                        <a href="#" onclick="add_favorites('{{$soundItem->id}}','favorite_icon{{$soundItem->id}}')" style="font-size: 24px;">
                            <i class="fa fa-heart" id="favorite_icon{{$soundItem->id}}" style="color: #b3b3b3"></i>
                        </a>
                    @endif

                @else
                    <a href="{{route('frontend.auth.login')}}" style="font-size: 24px;">
                        <i class="fa fa-heart"></i>
                    </a>
                @endauth

               
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="text-group-four"><br>

            <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$soundItem->id}}"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
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
                                        <a target="_blank" href="#" id="view_license_link{{$soundItem->id}}" onclick="window.location.replace('{{route('frontend.view_licenses_details',1)}}')" style="padding: 4px;background: #535353;color: white;border-radius: 10px;padding-left: 10px;padding-right: 10px;"> View Licenses</a>
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
