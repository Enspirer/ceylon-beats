@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
  <body>
    <div class="square">
        <div class="circle">
        </div>
        <div class="circle">
        </div>
    </div>
        @include('frontend.includes.nav')



        <div id="demo">
            <section id="explore-music">

                <div class="mask">
                    <div class="row">
                        @include('frontend.includes.filter_pane')

                        <div class="right-result">

                            <div class="container">
                                @include('frontend.includes.filter_topbar')
                                <div class="list-group" id="playlist">
                                    @if(count($sound_item) == 0)
                                        @include('frontend.includes.page_not_found')
                                    @else
                                        @foreach($sound_item as $key=>$soundItem)
                                            <div class="list-item">
                                                @include('frontend.includes.music_item')
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('frontend.includes.music_player')
                </div>
            </section>
        </div>

    </body>





            <div class="col-sm-2" style="display: none">
                            <span id="play">
                                <i class="glyphicon glyphicon-play"></i>
                                Play
                            </span>

                    <span id="pause" style="display: none">
                                <i class="glyphicon glyphicon-pause"></i>
                                Pause
                            </span>
            </div>




  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  ...
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
              </div>
          </div>
      </div>
  </div>



@endsection
