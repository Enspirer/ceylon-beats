<div class="form-group">
    <label>Is Feature</label>
    <select class="form-control" name="is_features">
        <option value="1">Enable</option>
        <option value="0">Disabled</option>
    </select>
</div>

<div class="form-group">
    <label>Author Name</label>
    <input type="text" class="form-control" value="{{$musicDetails->author_name}}" name="author_name">
</div>

<div class="form-group">
    <label>Tag</label>
    <input type="text" class="form-control" name="tag" value="{{$musicDetails->tags}}">
</div>

<div class="form-group">
    <label>Tempo</label>
    <input type="number" min="0" class="form-control" name="tempo" value="{{$musicDetails->tempo}}">
</div>

<div class="form-group">
    <label>BMP</label>
    <input type="number" min="0" class="form-control" name="bmp" value="{{$musicDetails->bmp}}">
</div>

<div class="form-group">
    <label>Duration</label>
    <input type="text" class="form-control" name="duration" value="{{$musicDetails->duration}}">
</div>

<div class="form-group">
    <label>Instrument</label>
    <input type="text" class="form-control" name="instrument" {{$musicDetails->instrument}}>
</div>

