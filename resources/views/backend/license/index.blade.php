@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Licenses</strong>
                    <a href="{{route('admin.license.create')}}" class="btn btn-primary" style="float: right">Add License</a>
                </div><!--card-header-->

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
