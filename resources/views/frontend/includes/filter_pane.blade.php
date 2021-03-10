<div class="left-filter">
    <div class="row-filter-top row d-flex justify-content-between">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="22.5" height="15" viewBox="0 0 22.5 15">
                <path id="Icon_material-sort" data-name="Icon material-sort" d="M4.5,24H12V21.5H4.5Zm0-15v2.5H27V9Zm0,8.75h15v-2.5H4.5Z" transform="translate(-4.5 -9)" fill="#fff"></path>
            </svg>
        </a>
        <div class="clear d-flex justify-content-between">
            <div class="row">
                <p>Clear All</p>
                <a href="{{route('frontend.explorer',['null','null','null','null','null'])}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.608" height="15.608" viewBox="0 0 15.608 15.608">
                        <path id="x" d="M4.827,4.827a1.115,1.115,0,0,1,1.578,0l5.9,5.9,5.9-5.9A1.116,1.116,0,1,1,19.78,6.4l-5.9,5.9,5.9,5.9A1.116,1.116,0,1,1,18.2,19.78l-5.9-5.9-5.9,5.9A1.116,1.116,0,1,1,4.827,18.2l5.9-5.9-5.9-5.9a1.115,1.115,0,0,1,0-1.578Z" transform="translate(-4.499 -4.499)" fill="#8f8f8f"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <hr />
    <div class="genres">
        <div class="genres-title">
            <div class="row d-flex justify-content-between">
                <p>Genres</p>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="22" viewBox="0 0 16 2">
                        <g id="Group_59" data-name="Group 59" transform="translate(-321.5 -157.5)">
                            <line id="Line_4" data-name="Line 4" x2="16" transform="translate(321.5 158.5)" fill="none" stroke="#707070" stroke-width="2"></line>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="genres-content">
            @foreach($getGenres as $genre)
                @if($genres_name == $genre->name)
                        <div class="genres-item" style="padding-bottom: 10px;">
                            <div class="row d-flex justify-content-between">
                                <a href="{{route('frontend.explorer',[$genre->name,'null','null','null','null'])}}">
                                    <div class="row form-check">
                                        <div class="flip">
                                            <div class="front"></div>
                                            <div class="back">
                                                <svg width="15" height="17" viewBox="1 0 15 29">
                                                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                                                </svg>
                                            </div>
                                        </div>

                                        <p class="form-check-label" for="exampleCheck1" style="color: #e9ba1f;">{{$genre->name}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                @else
                        <div class="genres-item" style="padding-bottom: 10px;">
                            <div class="row d-flex justify-content-between">
                                <a href="{{route('frontend.explorer',[$genre->name,'null','null','null','null'])}}">
                                    <div class="row form-check">
                                        <div class="flip">
                                            <div class="front"></div>
                                            <div class="back">
                                                <svg width="15" height="17" viewBox="1 0 15 29">
                                                    <path d="M2 8.5L6 12.5L14 1.5"></path>
                                                </svg>
                                            </div>
                                        </div>

                                        <p class="form-check-label" for="exampleCheck1">{{$genre->name}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                @endif

            @endforeach
            </div>
        </div>
    </div>


    <hr>

</div>