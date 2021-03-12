@foreach($feature_music as $feature_musirc)
    {{------------------ Modal ------------------ --}}
    <form action="{{route('frontend.cart.add')}}" method="post">
        <div class="modal fade" id="exampleModalCenter{{$feature_musirc->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                {{csrf_field()}}
                <div class="modal-content">
                    <h1>Select Your Licenses</h1>
                    <select class="form-control" name="license_name" id="licesensect{{$feature_musirc->id}}" onchange="selectPackage('{{$feature_musirc->id}}','licesensect{{$feature_musirc->id}}','inpack_price{{$feature_musirc->id}}')">
                        <option selected>Select License</option>
                        @foreach(json_decode($feature_musirc->price) as  $pricerange)
                            <option value="{{$pricerange->license_name}}">{{$pricerange->license_name}}</option>
                        @endforeach
                    </select>

                    <input type="hidden" name="music_item_id" value="{{$feature_musirc->id}}">
                    <div class="modal-body">
                        <input type="hidden" name="price_details" value="" id="pricedetails{{$feature_musirc->id}}">
                        <input type="hidden" name="music_item_id" value="{{$feature_musirc->id}}">
                        <input type="hidden" name="music_name" value="{{$feature_musirc->music_name}}">
                        <input type="hidden" name="preview_link" value="{{$feature_musirc->preview_link}}">
                        <input type="hidden" name="author_name" value="{{$feature_musirc->author_name}}">
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
                                            <h6>{{$feature_musirc->music_name}}</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div style="font-size: 19px;font-weight: 700;color: wheat;">
                                                <span id="inpack_price{{$feature_musirc->id}}">0</span>.00 USD
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>{{$feature_musirc->author_name}}</h5>
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
                        <button type="submit" id="submit_cores{{$feature_musirc->id}}"   class="btn-cart-modal" disabled>Add to Cart</button>
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach



