@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')

    <div class="light-style flex-grow-1 container-p-y">
        <form id="form" action="{{route('admin.music.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Music</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Details</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                @include('backend.music.includes.music_page')
                            </div>

                            <div class="tab-pane fade" id="account-change-password">
                                @include('backend.music.includes.details_page')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </form>
    </div>

 



@endsection
