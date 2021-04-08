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
                                <div id="loader_track"  class="" style="position: fixed;width: 500px;height: 200px;top: 50%;left: 50%;margin-top: -100px; z-index: 100;display: none">
                                    <div class="loader"></div>
                                </div>

                                @include('frontend.includes.filter_topbar')
                                <div class="list-group" id="playlist">
                                    @if(count($sound_item) == 0)
                                        @include('frontend.includes.page_not_found')
                                    @else

                                        @if(is_mobile(request()->header('user-agent')) != false )
                                            @foreach($sound_item as $key=>$soundItem)

                                                @include('frontend.home_page.includes.music_item_mobile')

                                            @endforeach
                                        @else
                                            @foreach($sound_item as $key=>$soundItem)
                                                <div class="list-item">
                                                    @include('frontend.includes.music_item')
                                                </div>
                                            @endforeach

                                        @endif



                                            {{ $sound_item->links() }}
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




  <script>
      function playAudio(id,icon) {
          console.log(id);
          var x = document.getElementById(id);
          var getallicon = $('.fa-pause');
          getallicon.attr('class','fa fa-play');
          console.log(getallicon);
//            x.play();
          if (x.duration > 0 && !x.paused) {
              var icondelemts = document.getElementById(icon);
              icondelemts.className = 'fa fa-play';
              console.log(icon);
              x.pause();
          } else {
              var icondelemts = document.getElementById(icon);
              icondelemts.className = 'fa fa-pause';
              x.play();
              //Not playing...maybe paused, stopped or never played.
          }
          document.addEventListener('play', function(e){
              var audios = document.getElementsByTagName('audio');
              for(var i = 0, len = audios.length; i < len;i++){
                  if(audios[i] != e.target){
                      audios[i].pause();
                  }
              }
          }, true);
      }
      function pauseAudio(id,icon) {
          var x = document.getElementById(id);
          x.pause();
      }
  </script>


@endsection
