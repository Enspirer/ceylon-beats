<div class="form-group">
    <label>Music Name</label>
    <input type="text" class="form-control" name="music_name" value="">
</div>

<div class="form-group">
    <label>Description</label>
    <textarea rows="5" class="form-control" name="description">

    </textarea>
</div>

<div class="form-group">
    <label>Genres</label>
    <select class="form-control" name="genres">
        @foreach($get_genres as $ge_genres)
            <option value="{{$ge_genres->name}}">{{$ge_genres->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Preview File</label>
    <input type="file" class="form-control" name="preview_file" value="">
</div>

<div class="form-group">
    <label>Original File</label>
    <input type="file" class="form-control" name="original_file" value="">
</div>
<br><br>

<div class="form-group">
    <label>License and Prices</label>
    <div class="">
        @foreach($liceseDetails as $liceseDetail)
            <div class="card" style="padding: 10px;">
                <div class="form-group">
                    <p>License name: <b>{{$liceseDetail->license_name}}</b></p>
                    <label>Price</label>
                    <input type="number" class="form-control" name="price[]" value="">
                    <input type="hidden" class="" value="{{$liceseDetail->license_name}}" name="licese_name[]">
                    <input type="hidden" class="" value="{{$liceseDetail->id}}" name="licese_id[]">
                </div>
            </div>
        @endforeach

    </div>
</div>

