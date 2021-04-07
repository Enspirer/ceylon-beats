<div class="top-row row d-flex">
    <div class="search-bar">

        <form action="{{route('frontend.search_query.index')}}" method="post">
            {{csrf_field()}}

            <div class="input-group">
                <i
                ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21.778"
                            height="21.778"
                            viewBox="0 0 21.778 21.778"
                    >
                        <g
                                id="Icon_feather-search"
                                data-name="Icon feather-search"
                                transform="translate(-3.5 -3.5)"
                                opacity="0.7"
                        >
                            <path
                                    id="Path_107"
                                    data-name="Path 107"
                                    d="M21.712,13.106A8.606,8.606,0,1,1,13.106,4.5,8.606,8.606,0,0,1,21.712,13.106Z"
                                    fill="none"
                                    stroke="#b9b9b9"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                            />
                            <path
                                    id="Path_108"
                                    data-name="Path 108"
                                    d="M29.655,29.655l-4.68-4.68"
                                    transform="translate(-5.791 -5.791)"
                                    fill="none"
                                    stroke="#b9b9b9"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                            />
                        </g>
                    </svg>
                </i>
                <input
                        type="text"
                        class="form-control"
                        name="search"
                        placeholder="e.g. Hip-Hop music"
                />
                <input class="submit" type="submit" value="Search" style="display: none">

            </div>
        </form>
    </div>
    <div class="curency">
        <div class="row">
            <p>All Prices are in</p>
            <img src="assets/image/Image 15@2x.png" alt="" srcset="" />
            <select
                    class="form-select"
                    aria-label="Default select example"
            >
                <option selected>{{settings('currency')}}</option>
            </select>
        </div>
    </div>

    <div class="curency">
        <div class="row">
            <p>Sort By</p>
            <select
                    class="form-select"
                    aria-label="Default select example"
            >
                <option selected>Latest</option>
            </select>
        </div>
    </div>
</div>

<div class="row row-mob-filter d-none">
                <div class="col-6 pr-1">
                  <a href="#" aria-label="Open Mobile Menu" type="button" class="row-mob-filter-btn open-mobile-menu"
                    ><i class="fa fa-sliders" aria-hidden="true"></i
                    >&nbsp;&nbsp; Filter</a
                  >
                </div>
                <div class="col-6 pl-1">
                  <div class="dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-sort-amount-asc" aria-hidden="true"></i>&nbsp;&nbsp; Sort By
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">one</a>
                      <a class="dropdown-item" href="#">two</a>
                      <a class="dropdown-item" href="#">three</a>
                    </div>
                  </div>
                </div>
              </div>

              <header class="page-header">
                <nav class="navbar">
                
                
                  <div class="top-menu-wrapper">
                    <ul class="top-menu">
                      <li class="mob-block">
                        <div class="row">
                          <p style="line-height: 0;margin: 0;font-size: 12px;">Clear all</p>
                        </div>
                        <h1 class="logo" alt="sidebar logo">Filter</h1>
                        <i class="fa fa-times close-mobile-menu" style="font-size: 15px;margin-top: -5px;" aria-hidden="true"></i>
                        <!-- <button aria-label="Close Mobile Menu" class="close-mobile-menu fa-lg">
                          <i class="material-icons" aria-hidden="true">clear</i>
                        </button> -->
                      </li>
                      <hr>
                      <div class="genres">
                        <div class="genres-title2">
                          <div class="row m-0 d-flex justify-content-between">
                            <p>Genres</p>
                            <a
                              ><svg
                                id="colapsiconmine2"
                                class="d-none"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="22"
                                viewBox="0 0 16 2"
                              >
                                <g
                                  id="Group_59"
                                  data-name="Group 59"
                                  transform="translate(-321.5 -157.5)"
                                >
                                  <line
                                    id="Line_4"
                                    data-name="Line 4"
                                    x2="16"
                                    transform="translate(321.5 158.5)"
                                    fill="none"
                                    stroke="#707070"
                                    stroke-width="2"
                                  />
                                </g>
                              </svg>
          
                              <svg
                                id="colapsiconplus2"
                                id="Component_1_1"
                                data-name="Component 1 – 1"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="36"
                                viewBox="0 0 16 16"
                              >
                                <line
                                  id="Line_4"
                                  data-name="Line 4"
                                  x2="16"
                                  transform="translate(0 8)"
                                  fill="none"
                                  stroke="#707070"
                                  stroke-width="2"
                                />
                                <line
                                  id="Line_5"
                                  data-name="Line 5"
                                  x2="16"
                                  transform="translate(8) rotate(90)"
                                  fill="none"
                                  stroke="#707070"
                                  stroke-width="2"
                                />
                              </svg>
                            </a>
                          </div>
                        </div>
                    
                        <div class="genres-content collapse">
                          <div class="genres-item">
                            <div class="row m-0 d-flex justify-content-between">
                              <div class="row form-check">
                                <input id="cbx" type="checkbox" />
                                <label class="cbx" for="cbx">
                                  <div class="flip">
                                    <div class="front"></div>
                                    <div class="back">
                                      <svg width="15" height="17" viewBox="1 0 15 29">
                                        <path d="M2 8.5L6 12.5L14 1.5"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </label>
                                <p class="form-check-label" for="exampleCheck1">Blues</p>
                              </div>
                              <p>30</p>
                            </div>
                          </div>
          
                     
          
                  
          
                          <div class="genres-item">
                            <div class="row m-0 d-flex justify-content-between">
                              <div class="row form-check">
                                <input id="cbx" type="checkbox" />
                                <label class="cbx" for="cbx">
                                  <div class="flip">
                                    <div class="front"></div>
                                    <div class="back">
                                      <svg width="15" height="17" viewBox="1 0 15 29">
                                        <path d="M2 8.5L6 12.5L14 1.5"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </label>
                                <p class="form-check-label" for="exampleCheck1">
                                  Dance/Techno
                                </p>
                              </div>
                              <p>12</p>
                            </div>
                          </div>
          
                          <div class="genres-item">
                            <div class="row m-0 d-flex justify-content-between">
                              <div class="row form-check">
                                <input id="cbx" type="checkbox" />
                                <label class="cbx" for="cbx">
                                  <div class="flip">
                                    <div class="front"></div>
                                    <div class="back">
                                      <svg width="15" height="17" viewBox="1 0 15 29">
                                        <path d="M2 8.5L6 12.5L14 1.5"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </label>
                                <p class="form-check-label" for="exampleCheck1">
                                  Electronic
                                </p>
                              </div>
                              <p>1</p>
                            </div>
                          </div>
          
                          <div class="genres-item">
                            <div class="row m-0 d-flex justify-content-between">
                              <div class="row form-check">
                                <input id="cbx" type="checkbox" />
                                <label class="cbx" for="cbx">
                                  <div class="flip">
                                    <div class="front"></div>
                                    <div class="back">
                                      <svg width="15" height="17" viewBox="1 0 15 29">
                                        <path d="M2 8.5L6 12.5L14 1.5"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </label>
                                <p class="form-check-label" for="exampleCheck1">Folk</p>
                              </div>
                              <p>24</p>
                            </div>
                          </div>
          
                          <div class="genres-item">
                            <div class="row d-flex justify-content-between">
                              <div class="row form-check">
                                <input id="cbx" type="checkbox" />
                                <label class="cbx" for="cbx">
                                  <div class="flip">
                                    <div class="front"></div>
                                    <div class="back">
                                      <svg width="15" height="17" viewBox="1 0 15 29">
                                        <path d="M2 8.5L6 12.5L14 1.5"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </label>
                                <p class="form-check-label" for="exampleCheck1">
                                  Hip-Hop
                                </p>
                              </div>
                              <p>10</p>
                            </div>
                          </div>
          
                          <div class="genres-item">
                            <div class="row d-flex justify-content-between">
                              <div class="row form-check">
                                <input id="cbx" type="checkbox" />
                                <label class="cbx" for="cbx">
                                  <div class="flip">
                                    <div class="front"></div>
                                    <div class="back">
                                      <svg width="15" height="17" viewBox="1 0 15 29">
                                        <path d="M2 8.5L6 12.5L14 1.5"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </label>
                                <p class="form-check-label" for="exampleCheck1">Jazz</p>
                              </div>
                              <p>11</p>
                            </div>
                          </div>
          
                          <div class="genres-item">
                            <div class="row d-flex justify-content-between">
                              <div class="row form-check">
                                <input id="cbx" type="checkbox" />
                                <label class="cbx" for="cbx">
                                  <div class="flip">
                                    <div class="front"></div>
                                    <div class="back">
                                      <svg width="15" height="17" viewBox="1 0 15 29">
                                        <path d="M2 8.5L6 12.5L14 1.5"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </label>
                                <p class="form-check-label" for="exampleCheck1">Pop</p>
                              </div>
                              <p>0</p>
                            </div>
                          </div>
          
                          <div class="genres-item">
                            <div class="row d-flex justify-content-between">
                              <div class="row form-check">
                                <input id="cbx" type="checkbox" />
                                <label class="cbx" for="cbx">
                                  <div class="flip">
                                    <div class="front"></div>
                                    <div class="back">
                                      <svg width="15" height="17" viewBox="1 0 15 29">
                                        <path d="M2 8.5L6 12.5L14 1.5"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </label>
                                <p class="form-check-label" for="exampleCheck1">R&B</p>
                              </div>
                              <p>5</p>
                            </div>
                          </div>
          
                          <div class="genres-item">
                            <div class="row d-flex justify-content-between">
                              <div class="row form-check">
                                <input id="cbx" type="checkbox" />
                                <label class="cbx" for="cbx">
                                  <div class="flip">
                                    <div class="front"></div>
                                    <div class="back">
                                      <svg width="15" height="17" viewBox="1 0 15 29">
                                        <path d="M2 8.5L6 12.5L14 1.5"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </label>
                                <p class="form-check-label" for="exampleCheck1">Rock</p>
                              </div>
                              <p>16</p>
                            </div>
                          </div>
          
                          <div class="genres-item">
                            <div class="row d-flex justify-content-between">
                              <div class="row form-check">
                                <input id="cbx" type="checkbox" />
                                <label class="cbx" for="cbx">
                                  <div class="flip">
                                    <div class="front"></div>
                                    <div class="back">
                                      <svg width="15" height="17" viewBox="1 0 15 29">
                                        <path d="M2 8.5L6 12.5L14 1.5"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </label>
                                <p class="form-check-label" for="exampleCheck1">Reggae</p>
                              </div>
                              <p>1</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                    </ul>

                   
                  </div>
                </nav>
              </header> 