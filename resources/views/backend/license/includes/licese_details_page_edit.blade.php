<input type="text" class="form-control" name="id" value="{{$liceseDetails->id}}" hidden>
<div class="form-group">
    <label>License Name</label>
    <input type="text" class="form-control" name="license_name" value="{{$liceseDetails->license_name}}">
</div>

<div class="form-group">
    <label>License Agreement</label>
    <textarea type="text" class="form-control" name="license_agreement" rows="10">{{$liceseDetails->license_agreement}}</textarea>
</div>

<div class="form-group">
    <label>Description</label>
    <textarea type="text" class="form-control" name="description"  rows="10">{{$liceseDetails->description}}</textarea>
</div>

<div class="form-group">
    <label>Status</label>
    <select type="text" class="form-control" name="status">
        <option value="1" {{ $liceseDetails->status == "1" ? "selected" : "" }}>Enabled</option>
        <option value="0" {{ $liceseDetails->status == "0" ? "selected" : "" }}>Disabled</option>
    </select>
</div>

<div class="form-group">
    <label>License Type</label>
    <input type="text" class="form-control" name="license_type" value="{{$liceseDetails->license_type}}">
</div>
