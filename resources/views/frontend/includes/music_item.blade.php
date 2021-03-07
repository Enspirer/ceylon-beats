<div class="row">
    <div class="col-md-2">
        <a href="{{url('files/preview_files/'.$soundItem->preview_link)}}" id="play_item{{$key}}" class="play-button">
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
                    <p>{{$soundItem->genres_id}}</p>
                    <h6>128</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col col-md-2">
        <div class="text-group-three">
            <div class="row">
                <a href="#">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="19.196"  height="24.196"  viewBox="0 0 34.196 34.196">
                        <g id="Icon_feather-download" data-name="Icon feather-download" transform="translate(2.5 2.5)">
                            <path id="Path_111" data-name="Path 111" d="M33.7,22.5v5.622a3.051,3.051,0,0,1-3.244,2.811H7.744A3.051,3.051,0,0,1,4.5,28.122V22.5" transform="translate(-4.5 -1.737)" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round"stroke-width="5"></path>
                            <path id="Path_112"  data-name="Path 112"  d="M10.5,15l8.976,7.027L28.452,15"  transform="translate(-4.878 -3.063)"  fill="none"  stroke="#b9b9b9"  stroke-linecap="round"  stroke-linejoin="round"stroke-width="5"></path>
                            <path id="Path_113"   data-name="Path 113"   d="M18,21.366V4.5"   transform="translate(-3.402 -4.5)"   fill="none"   stroke="#b9b9b9"   stroke-linecap="round"   stroke-linejoin="round" stroke-width="5"></path>
                        </g>
                    </svg>
                </a>
                <a href="#">
                    <svg
                            id="Icon_metro-favorite"
                            data-name="Icon metro-favorite"
                            xmlns="http://www.w3.org/2000/svg"
                            width="19.681"
                            height="29.985"
                            viewBox="0 0 32.681 29.985"
                    >
                        <path
                                id="Icon_metro-favorite-2"
                                data-name="Icon metro-favorite"
                                d="M21.482,36.411l-2.369-2.149C10.7,26.623,5.141,21.582,5.141,15.414a8.89,8.89,0,0,1,8.987-8.987,9.806,9.806,0,0,1,7.353,3.407,9.806,9.806,0,0,1,7.353-3.407,8.89,8.89,0,0,1,8.987,8.987c0,6.169-5.556,11.21-13.971,18.849Z"
                                transform="translate(-5.141 -6.427)"
                                fill="#b9b9b9"
                        />
                    </svg>
                </a>
                <a href="#">
                    <svg
                            id="Icon_material-playlist-add"
                            data-name="Icon material-playlist-add"
                            xmlns="http://www.w3.org/2000/svg"
                            width="25.126"
                            height="34.388"
                            viewBox="0 0 49.126 34.388"
                    >
                        <path
                                id="Icon_material-playlist-add-2"
                                data-name="Icon material-playlist-add"
                                d="M32.475,18.825H3v4.913H32.475Zm0-9.825H3v4.913H32.475ZM42.3,28.65V18.825H37.388V28.65H27.563v4.913h9.825v9.825H42.3V33.563h9.825V28.65ZM3,33.563H22.65V28.65H3Z"
                                transform="translate(-3 -9)"
                                fill="#b9b9b9"
                        />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="text-group-four">
            <h1>299.50 LKR</h1>
            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
        </div>
    </div>
</div>




<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <h1>Select Your Licenses</h1>

            <select class="form-control" id="exampleFormControlSelect1">
                <option>Music Broadcast</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <div class="modal-body">
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
                                    <h6>Ready for This</h6>

                                </div>
                                <div class="col-md-6">
                                    <h2>$299.50</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>R&amp;B</h5>

                                </div>
                                <div class="col-md-6">
                                    <h4>Licence <br> <span>Music Broadcast (1 Milion)</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn-cancel-modal" data-dismiss="modal">Cancel</a>
                <a href="#" class="btn-cart-modal">Add to Cart</a>
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>