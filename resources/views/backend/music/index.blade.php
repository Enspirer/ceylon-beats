@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Music Items</strong>
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
                @foreach($music as $musicD)
                    <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$musicD->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{$musicD->music_name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" style="padding-top: 5px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p><b>{{$musicD->music_name}}</b> Are you sure delete this file?</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="{{route('admin.music.delete',$musicD->id)}}" class="btn btn-primary">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
