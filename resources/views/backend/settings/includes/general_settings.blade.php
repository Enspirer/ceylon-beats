
<div class="card-body">
    <div class="form-group">
        <label class="form-label">Currency</label>
        <select class="form-control" name="currency">
            <option value="USD">USD</option>
            <option value="LKR">LKR</option>
        </select>
    </div>
    <div class="form-group">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="app_title" value="{{settings('app_title')}}" required>
    </div>
    <div class="form-group">
        <label class="form-label">Payment Getway</label>
        <select class="form-control" name="payment_getway_oparation">
            <option value="sandbox">Sandbox Mode</option>
            <option value="live">Live Mode</option>
        </select>
    </div>

</div>