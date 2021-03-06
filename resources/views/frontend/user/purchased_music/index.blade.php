@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('frontend.includes.nav')


    <section id="explore-music">
        <div class="mask mask-free">
            <div class="row">
                @include('frontend.user.includes.sidebar')
                <div class="right-result">
                    <div class="container">
                        <h2>Purchased Music</h2>
                        <div class="space"></div>
x
                        @if(count($music_detaials) == 0)
                            @include('frontend.user.my_cart.cart_item not_found',
                            [
                                   'error_title'=>'Hmmm, Seems no purchases yet',
                                'error_description'=>'Go to our music section for find the best tracks for your next projectt',
                               'error_button_link'=> route('frontend.explorer',['genres','author_name','duration','price','music_name']),
                                'error_button_name'=>'Go to Music',
                            ])
                        @else
                            <div class="row row-select-option">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="curency">
                                                <div class="row">
                                                    <p>Genres</p>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>all</option>
                                                        <option value="1">Trending</option>
                                                        <option value="2">Price</option>
                                                        <option value="2">Best Seller</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="curency">
                                                <div class="row">
                                                    <p>Show</p>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>2021</option>
                                                        <option value="1">Trending</option>
                                                        <option value="2">Price</option>
                                                        <option value="2">Best Seller</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="curency">
                                                <div class="row">
                                                    <p>Sort By</p>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Latest</option>
                                                        <option value="1">Trending</option>
                                                        <option value="2">Price</option>
                                                        <option value="2">Best Seller</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="search-bar">
                                        <form>
                                            <div class="input-group">
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.778" height="21.778" viewBox="0 0 21.778 21.778">
                                                        <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(-3.5 -3.5)" opacity="0.7">
                                                            <path id="Path_107" data-name="Path 107" d="M21.712,13.106A8.606,8.606,0,1,1,13.106,4.5,8.606,8.606,0,0,1,21.712,13.106Z" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                                <path id="Path_108" data-name="Path 108" d="M29.655,29.655l-4.68-4.68" transform="translate(-5.791 -5.791)" fill="none" stroke="#b9b9b9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                        </g>
                                                    </svg>
                                                </i>
                                                <input type="text" class="form-control" placeholder="Search in Order">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @if(is_mobile(request()->header('user-agent')) == true)
                                <div class="table-dashboard">
                                    <table class="table table-borderless">
                                        <thead>
                                        <tr>
                                            <th scope="col">Music Name</th>
                                            <th scope="col">License</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($music_detaials as $musicdetails)
                                            <tr>
                                                <td>{{settings('currency')}} {{$musicdetails->music_name}}</td>
                                                <td>{{$musicdetails->selected_license}}</td>
                                                <td>
                                                    <a href="{{url('files/original_files',$musicdetails->download_link)}}" target="_blank" class="btn btn-primary" download>Download</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="table-dashboard">
                                    <table class="table table-borderless">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Music Name</th>
                                            <th scope="col">Author Name</th>
                                            <th scope="col">Genre</th>
                                            <th scope="col">License Name</th>
                                            <th scope="col">Download Link</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($music_detaials as $musicdetails)
                                            <tr>
                                                <th scope="row">{{$musicdetails->id}}</th>
                                                <td>{{settings('currency')}} {{$musicdetails->music_name}}</td>
                                                <td>{{$musicdetails->author_name}}</td>
                                                <td>{{$musicdetails->genres}}</td>
                                                <td>{{$musicdetails->selected_license}}</td>
                                                <td>
                                                    <a href="{{url('files/original_files',$musicdetails->download_link)}}" target="_blank" class="btn btn-primary" download>Download</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            @endif

                        @endif






                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

<script>


    function playAudio(id,icon) {
        var x = document.getElementById(id);
//            x.play();

        if (x.duration > 0 && !x.paused && !x.stopped) {
            var icondelemts = document.getElementById(icon);
            icondelemts.className = 'fa fa-play';
            console.log(icon);
            x.pause();
        } else {
            var icondelemts = document.getElementById(icon);

            icondelemts.className = 'fa fa-pause';
            x.play();
            //Not playing...maybe paused, stopped or never played.

        }

    }

    function pauseAudio(id,icon) {
        var x = document.getElementById(id);
        x.pause();
    }
</script>
