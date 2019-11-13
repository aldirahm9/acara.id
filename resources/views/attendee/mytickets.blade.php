@extends('layouts/app1')

@section('title')
| My Tickets
@endsection

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="inner-heading">
            <h2>My Tickets</h2>
          </div>
        </div>
        <div class="span8">
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
            <li><a href="#">Account</a> <i class="icon-angle-right"></i></li>
            <li class="active">My Tickets</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="container">

      <div class="row">
          <div class="span12">
            <div class="cta-box1">
              <div class="row">
                <div class="span3">
                    <div class="img-border">
                        <img src="../../img/biner.jpeg">
                    </div>
                </div>
                <div class="span4">
                  <div class="cta-text-modif">
                      <br><br>
                    <h6 style="color:steelblue"><strong>BINER DEFAULT UNJ</strong></h6>
                    <a><i class="icon-home"></i> Kampus A, Rawamangun Muka, Jakarta Timur</a><br>
                    <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                    <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br>
                    <a><i class="icon-money"></i> Rp.100,000,-</a><br><br>
                    <a><strong>Status</strong></a><br>
                    <a class="btn btn-primary">Approved</a>
                  </div>
                </div>
                <div class="span4">
                    <div class="cta-btn" style="text-align:center"><br>
                        <p><b>Upload Your Receipt Payment</b></p>
                        <input type="file" class="btn btn-color"/><br><br><br>
                        <a class="btn btn-large btn-success" data-toggle="modal" data-target="#qrcode">See Tickets  <i class="icon-ticket" style="color:honeydew"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="qrcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel" style="text-align:center">BINER UNJ Ticket</h6>
                </div>
                <div class="modal-body" style="text-align:center">
                <img src="../../img/qr.png" width="250">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    </div>
  </section>

  <section id="content">
        <div class="container">

          <div class="row">
              <div class="span12">
                <div class="cta-box1">
                  <div class="row">
                    <div class="span3">
                        <div class="img-border">
                            <img src="../../img/biner.jpeg">
                        </div>
                    </div>
                    <div class="span4">
                      <div class="cta-text-modif">
                          <br><br>
                        <h6 style="color:steelblue"><strong>BINER DEFAULT UNJ</strong></h6>
                        <a><i class="icon-home"></i> Kampus A, Rawamangun Muka, Jakarta Timur</a><br>
                        <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                        <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br>
                        <a><i class="icon-money"></i> Rp.100,000,-</a><br><br>
                        <a><strong>Status</strong></a><br>
                        <a class="btn btn-danger">Waiting Payment</a>
                      </div>
                    </div>
                    <div class="span4">
                        <div class="cta-btn" style="text-align:center"><br>
                            <p><b>Upload Your Receipt Payment</b></p>
                            <input type="file" class="btn btn-color"/><br><br><br>
                            <a class="btn btn-large btn-success" data-toggle="modal" data-target="#qrcode">See Tickets  <i class="icon-ticket" style="color:honeydew"></i></a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="qrcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel" style="text-align:center">BINER UNJ Ticket</h6>
                    </div>
                    <div class="modal-body" style="text-align:center">
                    <img src="../../img/qr.png" width="250">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
      </section>

      <section id="content">
            <div class="container">

              <div class="row">
                  <div class="span12">
                    <div class="cta-box1">
                      <div class="row">
                        <div class="span3">
                            <div class="img-border">
                                <img src="../../img/biner.jpeg">
                            </div>
                        </div>
                        <div class="span4">
                          <div class="cta-text-modif">
                              <br><br>
                            <h6 style="color:steelblue"><strong>BINER DEFAULT UNJ</strong></h6>
                            <a><i class="icon-home"></i> Kampus A, Rawamangun Muka, Jakarta Timur</a><br>
                            <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                            <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br>
                            <a><i class="icon-money"></i> Rp.100,000,-</a><br><br>
                            <a><strong>Status</strong></a><br>
                            <a class="btn btn-warning">Waiting Approval</a>
                          </div>
                        </div>
                        <div class="span4">
                            <div class="cta-btn" style="text-align:center"><br>
                                <p><b>Upload Your Receipt Payment</b></p>
                                <input type="file" class="btn btn-color"/><br><br><br>
                                <a class="btn btn-large btn-success" data-toggle="modal" data-target="#qrcode">See Tickets  <i class="icon-ticket" style="color:honeydew"></i></a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="qrcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel" style="text-align:center">BINER UNJ Ticket</h6>
                        </div>
                        <div class="modal-body" style="text-align:center">
                        <img src="../../img/qr.png" width="250">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
          </section>
@endsection