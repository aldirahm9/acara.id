@extends('attendee/app')

@section('title')
| Event
@endsection

@section('action_event')
class="active"
@endsection

@section('content')
<section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>Discover Event</h2>
              </div>
            </div>
            <div class="span8">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Event</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="content">
        <div class="container">
          <div class="row">
            <div class="span12">
              <h4>Coming Events</h4>

              <div class="clearfix"></div>
              <div class="row">
                <section id="projects">
                  <ul id="thumbs" class="grid cs-style-3 portfolio">

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/1.jpg" alt=""></div>
                          <figcaption>
                            <h3>BINER UNJ</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="/biner"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/2.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 photography" data-id="id-2" data-type="graphic">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/3.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/4.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                  </ul>
                </section>
              </div>
              <div class="row" style="text-align:center">
                <a href="" ><h6 style="color: cornflowerblue">>>See All<<</h6></a>
              </div>
{{-- 
              <h4>Popular Events</h4>
              <div class="row">
                <section id="projects">
                  <ul id="thumbs" class="grid cs-style-3 portfolio">

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/1.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/2.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 photography" data-id="id-2" data-type="graphic">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/3.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/4.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                  </ul>
                </section>

              </div>
              <div class="row" style="text-align:center">
                <a href="" ><h6 style="color: cornflowerblue">>>See All<<</h6></a>
              </div>

              <h4>Events by Following Organization</h4>
              <div class="row">
                <section id="projects">
                  <ul id="thumbs" class="grid cs-style-3 portfolio">

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/1.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/2.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 photography" data-id="id-2" data-type="graphic">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/3.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                      <div class="item">
                        <figure>
                          <div><img src="img/dummies/works/4.jpg" alt=""></div>
                          <figcaption>
                            <h3>Portfolio name</h3>
                            <p>
                              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                            </p>
                          </figcaption>
                        </figure>
                      </div>
                    </li>
                    <!-- End Item Project -->

                  </ul>
                </section>

              </div>
              <div class="row" style="text-align:center">
                <a href="" ><h6 style="color: cornflowerblue">>>See All<<</h6></a>
              </div> --}}

            </div>
          </div>

      <div class="row team">
        <div class="span12">
          <h4>Coming Events</h4>
        </div>

        <div class="span3">
          <div class="team-box">
            <a href="/biner" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
            <div class="roles aligncenter">
              <p class="lead"><strong>BINER UNJ</strong></p>
              <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
              <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
              <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
              <a href="/biner"><strong>>>See All<<</strong></a>
            </div>
          </div>
        </div>
        <div class="span3">
            <div class="team-box">
              <a href="/biner" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
      </div>
    </div>
</section>

@endsection
