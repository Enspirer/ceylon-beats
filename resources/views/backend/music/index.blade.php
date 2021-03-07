@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Competition</strong>
                    <a href="{{route('admin.music.create')}}" class="btn btn-primary" style="float: right">Add Music</a>
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="data_table" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Music Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Author Name</th>
                            <th scope="col">Duration</th>
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
                ajax: "{{route('admin.music.get_table_details')}}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'music_name', name: 'music_name'},
                    {data: 'price', name: 'price'},
                    {data: 'author_name', name: 'author_name'},
                    {data: 'duration', name: 'duration'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>

@endsection
