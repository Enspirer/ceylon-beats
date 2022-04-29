<div class="contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 data-animscroll="fade-up">Do you want a</h2>
                <h1 data-animscroll="fade-up">Custom Beat ?</h1>
                <p data-animscroll="fade-up">Tell us more about your requirement</p>

                <div class="form">
                    <form method="post" action="{{route('frontend.contact.send')}}">
                        {{csrf_field()}}
                        <div class="form-group" data-animscroll="fade-up">
                            <input type="text" name="name" class="form-control" placeholder="Name" />
                        </div>
                        <div class="form-group" data-animscroll="fade-up">
                            <input
                                name="phone"
                                type="text"
                                class="form-control"
                                placeholder="Telephone"
                            />
                        </div>
                        <div class="form-group" data-animscroll="fade-up">
                            <input
                                type="email" name="email"
                                class="form-control"
                                placeholder="Email"
                            />
                        </div>
                        <div class="form-group" data-animscroll="fade-up">
                  <textarea
                      name="message"
                      class="form-control"
                      placeholder="Messege"
                      rows="5"
                  ></textarea>
                            @if(config('access.captcha.contact'))
                                <div class="row">
                                    <div class="col">
                                        @captcha
                                        {{ html()->hidden('captcha_status', 'true') }}
                                    </div><!--col-->
                                </div><!--row-->
                            @endif
                        </div>
                        <div class="form-group file-upload" data-animscroll="fade-up">
                            <div class="row">
                                <label>Attach your file here</label>
                                <input type="file" name="file" class="file-input" id="file-input" />
                                <label for="file-input">
                                    <div class="row">
                                        <div class="text-center">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="17"
                                                height="36"
                                                viewBox="0 0 27 36"
                                            >
                                                <path
                                                    id="Icon_awesome-file-upload"
                                                    data-name="Icon awesome-file-upload"
                                                    d="M15.75,9.563V0H1.688A1.683,1.683,0,0,0,0,1.688V34.313A1.683,1.683,0,0,0,1.688,36H25.313A1.683,1.683,0,0,0,27,34.313V11.25H17.438A1.692,1.692,0,0,1,15.75,9.563Zm4.583,15.188H15.75v5.625A1.125,1.125,0,0,1,14.625,31.5h-2.25a1.125,1.125,0,0,1-1.125-1.125V24.751H6.667a1.125,1.125,0,0,1-.792-1.924l6.78-6.729a1.2,1.2,0,0,1,1.69,0l6.78,6.729A1.125,1.125,0,0,1,20.333,24.751ZM26.508,7.383,19.624.492A1.686,1.686,0,0,0,18.429,0H18V9h9V8.571A1.682,1.682,0,0,0,26.508,7.383Z"
                                                    fill="#b9b9b9"
                                                />
                                            </svg>
                                        </div>
                                        <span></span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="form-group" data-animscroll="fade-up">
                            <div class="row">
                                <div class="col">
                                    <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" ></div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-view-all"  data-animscroll="fade-up" disabled>Submit a Request</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{url('/ceylon_beats_theme/assets/image/Mask Group 191@2x.png')}}" alt=""  data-animscroll="fade-left">
            </div>
        </div>
    </div>
</div>
