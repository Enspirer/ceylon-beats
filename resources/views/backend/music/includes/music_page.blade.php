<div class="form-group">
    <label>Music Name</label>
    <input type="text" class="form-control" name="music_name" value="" required>
</div>

<div class="form-group">
    <label>Description</label>
    <textarea rows="5" class="form-control" name="description" required>

    </textarea>
</div>

<div class="form-group">
    <label>Genres</label>
    <select class="form-control" name="genres" required>
        @foreach($get_genres as $ge_genres)
            <option value="{{$ge_genres->name}}">{{$ge_genres->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Preview File</label>
    <input type="file" class="form-control" name="preview_file" value="" required>
</div>

<div class="form-group">
    <label>Original File</label>
    <input type="file" class="form-control" name="original_file" value="" required>
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
                    <input type="number" class="form-control" name="price[]" value="" required>
                    <input type="hidden" class="" value="{{$liceseDetail->license_name}}" name="licese_name[]" required>
                    <input type="hidden" class="" value="{{$liceseDetail->id}}" name="licese_id[]" required>
                </div>
            </div>
        @endforeach

    </div>
</div>

