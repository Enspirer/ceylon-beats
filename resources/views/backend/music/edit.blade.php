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
                                @include('backend.music.includes.music_page_edit')
                            </div>

                            <div class="tab-pane fade" id="account-change-password">
                                @include('backend.music.includes.details_page_edit')
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

    @push('before-scripts-new')

<script type="text/javascript">
    function validate(formData, jqForm, options) {
        var form = jqForm[0];
        if (!form.file.value) {
            alert('File not found');
            return false;
        }
    }

    (function() {

        var bar = $('.bar');
        var percent = $('.percent');
        var status = $('#status');

        $('#form').ajaxForm({
            beforeSubmit: validate,
            beforeSend: function() {
                status.empty();
                var percentVal = '0%';
                var posterValue = $('input[name=file]').fieldValue();
                bar.width(percentVal)
                percent.html(percentVal);
            },
            uploadProgress: function(event, position, total, percentComplete) {
                var percentVal = percentComplete + '%';
                bar.width(percentVal)
                percent.html(percentVal);
            },
            success: function() {
                var percentVal = 'Upload Done';
                bar.width(percentVal)
                percent.html(percentVal);
            },
            complete: function(xhr) {
                status.html(xhr.responseText);
                alert('Uploaded Successfully');
                //  window.location.href = "/file-upload";
            }
        });

    })();
</script>
@endpush


@endsection
