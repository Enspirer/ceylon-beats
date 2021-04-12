@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                {{--<div class="card-header">--}}
                    {{--<strong>Licenses</strong>--}}
                    {{--<a href="{{route('admin.license.create')}}" class="btn btn-primary" style="float: right">Add License</a>--}}
                {{--</div><!--card-header-->--}}

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="data_table" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">License name</th>
                                <th scope="col">Status</th>
                                <th scope="col">License Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


    @foreach($license as $licenser)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$licenser->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$licenser->license_name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card" style="padding-top: 5px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><b>{{$licenser->license_name}}</b> Are you sure delete this file?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="{{route('admin.license.delete',$licenser->id)}}" class="btn btn-primary">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <script type="text/javascript">
        $(function () {

            var table = $('#data_table').DataTable({
                processing: false,
                ajax: "{{route('admin.license.get_table_details')}}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'license_name', name: 'license_name'},
                    {data: 'status', name: 'status'},
                    {data: 'license_type', name: 'license_type'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>

@endsection
