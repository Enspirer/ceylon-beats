@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')

    <div class="light-style flex-grow-1 container-p-y">
        <form action="{{route('admin.genres.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">License Details</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <div class="form-group">
                                    <label>Genres Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control" name="description" rows="10" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Enabled</label>
                                    <select type="text" class="form-control" name="status" required>
                                        <option name="1" selected>Enabled</option>
                                        <option name="0" selected>Disabled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Save</button>&nbsp;
                <a  href="{{route('admin.genres')}}" class="btn btn-default">Cancel</a>
            </div>
        </form>
    </div>


@endsection
