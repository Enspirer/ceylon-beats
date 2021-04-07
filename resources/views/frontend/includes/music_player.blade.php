

<div class="media-player" id="media-player" style="height: 200px;">
    <button onclick="close_player()" class="btn btn-primary pull-right" style="background: black;padding: 0px;margin-right: 10px;padding: 2px;padding-right: 11px;padding-left: 10px;border-color: #e9ba1f;color: #e9ba1f;">X</button>
    <div id="player" style="margin-top: 30px;">
        <div id="waveform" style="height: 85px;">
            <div class="progress-striped active" id="progress-bar">
                <div class="progress-bar progress-bar-info bg-success"></div>
            </div>

            <!-- Here be the waveform -->
        </div>

        <div class="controls">
            <!-- <button onclick="Onplaye('http://localhost/equalizer/demo.wav')"> Hello Play</button> -->
            <div class="row d-flex justify-content-between">
                <div class="buttons-name">
                    <div class="row">
                        <button onclick="backwordFunction()" class="btn-control backword">
                            <i class="fa fa-backward" aria-hidden="true"></i>
                        </button>

                        <button onclick="playFunction()"  class="btn-control play" id="play_button">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
                        <button onclick="pauseFunction()" class="btn-control play" id="pause_button">
                            <i class="fa fa-pause" aria-hidden="true"></i>
                        </button>
                        <button onclick="forwordFunction()" class="btn-control forword">
                            <i class="fa fa-forward" aria-hidden="true"></i>
                        </button>
                        <div class="name">
                            <h1 id="player_item_name">Ready for This</h1>
                            <p id="player_author_name">CeylonBeatz</p>
                        </div>
                    </div>
                </div>
                <div class="time-icon">
                    <div class="row">
                        <div class="time">
                            <h1>
                                <span id="playercurrentduration">4 . 24</span>
                                <span>/</span>
                                <span id="playerduration">4 . 24</span>
                            </h1>
                        </div>
                        <div class="icon">
                            <div class="row">
                                <a onclick="soundMute()" href="#">
                                    <i id="soundicon" class="fa fa-volume-down" aria-hidden="true"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <button onclick="Onplaye('http://localhost/equalizer/demo.wav')"> Hello Play</button> -->
            <!-- <button onclick="Onplaye('http://localhost/equalizer/eee.wav')"> EEE Play</button> -->
            <!-- <button class="btn btn-primary" data-action="play">
                  <i class="glyphicon glyphicon-play"></i>
                  Play
                  /
                  <i class="glyphicon glyphicon-pause"></i>
                  Pause
              </button> -->

            <!-- <div id="equalizer">
            </div> -->
        </div>
    </div>
</div>