@extends('layouts/app1')

@section('title')
| How It Works
@endsection

@section('action_how')
class="active"
@endsection

@section('content')
<section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>Portfolio detail</h2>
              </div>
            </div>
            <div class="span8">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                <li><a href="#">Portfolio</a> <i class="icon-angle-right"></i></li>
                <li class="active">Portfolio detail</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="content">
        <div class="container">
          <div class="row">
            <div class="span8">
              <article class="noborder">
                <div class="top-wrapper">
                  <div class="post-heading">
                    <h3><a href="#">This is an example of portfolio detail</a></h3>
                  </div>
                  <!-- start flexslider -->
                  <div class="portfolio-detail">
                    <img src="img/works/full/image-01-full.jpg" alt="" />
                  </div>
                  <!-- end flexslider -->
                </div>

                <p>
                  Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
                  ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
                </p>

              </article>

              <div class="row">
                <div class="span8">
                  <h4>Related works</h4>
                </div>
                <div class="grid related-works cs-style-3">
                  <div class="span2">
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
                  </div>
                  <div class="span2">
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
                  </div>
                  <div class="span2">
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
                  </div>
                  <div class="span2">
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
                  </div>
                </div>
              </div>

            </div>

            <div class="span4">
              <aside class="right-sidebar">
                <div class="widget">
                  <h5 class="widgetheading">Portfolio information</h5>
                  <ul class="folio-detail">
                    <li><label>Category :</label> Web design</li>
                    <li><label>Client :</label> ASU Company</li>
                    <li><label>Project date :</label> 26 March, 2013</li>
                    <li><label>Project URL :</label> <a href="#">www.projectsiteurl.com</a></li>
                  </ul>

                </div>
                <div class="widget">
                  <h5 class="widgetheading">Text widget</h5>
                  <p>
                    Lorem ipsum dolor sit amet, unum suscipiantur te cum, vide magna ea eam. At eos wisi tractatos temporibus. Ne has omnis harum. Ei mea graece delenit nominati. Ut dolore albucius torquatos vel, choro gubergren no mel.
                  </p>

                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>
@endsection
