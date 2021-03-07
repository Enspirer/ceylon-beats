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
        <option value="Blues">Blues</option>
        <option value="Classical">Classical</option>
        <option value="Dance/Techno">Dance/Techno</option>
        <option value="Electronic">Electronic</option>
        <option value="Folk">Folk</option>
        <option value="Hip-Hop">Hip-Hop</option>
        <option value="Jazz">Jazz</option>
        <option value="Pop">Pop</option>
        <option value="RandB">R&B</option>
        <option value="Rock">Rock</option>
        <option value="Reggae">Reggae</option>
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

