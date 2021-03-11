<div class="media-player" id="media-player">
    <div id="player">
        <div id="waveform" style="height: 120px;">
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
                            <h1>Ready for This</h1>
                            <p>R&B</p>
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
                            <p>128 BPM</p>
                        </div>
                        <div class="icon">
                            <div class="row">
                                <a onclick="soundMute()" href="#">
                                    <i class="fa fa-volume-up" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
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