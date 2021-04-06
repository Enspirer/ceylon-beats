<div class="form-group">
    <label>Music Name</label>
    <input type="text" class="form-control" name="music_name" value="{{$musicDetails->music_name}}">
    <input type="hidden" name="id" value="{{$musicDetails->id}}">
</div>

<div class="form-group">
    <label>Description</label>
    <textarea rows="5" class="form-control" name="description">
    {{$musicDetails->description}}
    </textarea>
</div>

<div class="form-group">
    <label>Genres</label>
    <select class="form-control" name="genres">
        @foreach($get_genres as $ge_genres)
            <option value="{{$ge_genres->name}}" {{ $ge_genres->name == $musicDetails->genres ? 'selected':'' }}>{{$ge_genres->name}}</option>
        @endforeach
    </select>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Preview File</label>
            <div id="wrapper">
                <audio preload="auto" controls>
                    <source src="{{url('/files/preview_files').'/'.$musicDetails->preview_link}}">
                </audio>
            </div>
            <input type="file" class="form-control-file" name="preview_file" value="{{$musicDetails->preview_link}}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Original File</label>
            <div id="wrapper">
                <audio preload="auto" controls>
                    <source src="{{url('/files/original_files').'/'.$musicDetails->download_link}}">
                </audio>
            </div>
            <input type="file" class="form-control-file" name="original_file" value="{{$musicDetails->download_link}}">
        </div>
    </div>
</div>



<br><br>

<div class="form-group">
    <label>License and Prices</label>


    @if(count(json_decode($musicDetails->price)) == count($liceseDetails))
        @foreach(json_decode($musicDetails->price) as $liceseDetail)
            <div class="card" style="padding: 10px;">
                <div class="form-group">
                    <p>License name: <b>{{$liceseDetail->license_name}}</b></p>
                    <label>Price</label>
                    <input type="number" class="form-control" name="price[]" value="{{$liceseDetail->price}}">
                    <input type="hidden" class="" value="{{$liceseDetail->license_name}}" name="licese_name[]">
                    <input type="hidden" class="" value="{{$liceseDetail->licese_id}}" name="licese_id[]">
                </div>
            </div>
        @endforeach
    @else
        <div class="row">
            <div class="col-md-6">
                <div class="" id="stork">
                    @foreach(json_decode($musicDetails->price) as $liceseDetail)
                        <div class="card" style="padding: 10px;">
                            <div class="form-group">
                                <p>License name: <b>{{$liceseDetail->license_name}}</b></p>
                                <label>Price</label>
                                <input type="number" class="form-control" name="price[]" value="{{$liceseDetail->price}}">
                                <input type="hidden" class="" value="{{$liceseDetail->license_name}}" name="licese_name[]">
                                <input type="hidden" class="" value="{{$liceseDetail->licese_id}}" name="licese_id[]">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="padding: 50px;">
                    <h3>New License Details Updated</h3>
                    <p style="text-align: center;">If you want to update your music price with new license please click this button</p>
                    <div class="" style="background-image: url('{{url('ceylon_beats_theme/assets/update_category.jpg')}}');background-size: contain;height: 270px;background-repeat: no-repeat;background-position: center;"></div>
                    <a href="#" onclick="update_license()" class="btn btn-primary">Update New License</a>
                </div>

            </div>
        </div>
    @endif


    @push('after-scripts')
        <script>
            function update_license() {
                $('#stork').html('' +
                  @foreach($liceseDetails as $append_lices)
                      '<div class="card" style="padding: 10px;">' +
                        '<div class="form-group">' +
                            '<p>License name: <b>{{$append_lices->license_name}}</b></p>' +
                            '<label>Price</label>' +
                            '<input type="number" class="form-control" name="price[]" value="">' +
                            '<input type="hidden" class="form-control" name="licese_id[]" value="{{$append_lices->id}}">' +
                            '<input type="hidden" class="form-control" name="licese_name[]" value="{{$append_lices->license_name}}">' +
                        '</div>' +
                      '</div>' +
                  @endforeach
                '');

            }
        </script>
    @endpush



</div>

