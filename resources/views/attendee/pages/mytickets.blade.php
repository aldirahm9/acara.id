@extends('attendee/app')

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

        @foreach (Auth::user()->tickets as $ticket)
        <div class="row">
            <div class="span12">
                <div class="cta-box1">
                    <div class="row">
                        <div class="span4">
                            <div class="img-border">
                                <img src="/storage/upload/{{$ticket->event->image}}" width="200">
                            </div>
                        </div>
                        <div class="span4">
                            <div class="cta-text" style="text-align:center">
                                <h6 style="color:steelblue"><strong>{{$ticket->event->name}}</strong></h6>
                                <a><i class="icon-home"></i> {{$ticket->event->location}}</a><br>
                                <a><i class="icon-calendar"></i>
                                    {{  }}</a><br>
                                <a><i class="icon-time"></i> {{
                                DateTime::createFromFormat('H:i:s', $ticket->event->timeStart)->format('H:i')
                                }}
                                    {{$ticket->event->timeEnd != null ? ' s/d ' . DateTime::createFromFormat('H:i:s', $ticket->event->timeEnd)->format('H:i') : ''}}</a><br>
                                <a><i class="icon-money"></i> Rp {{
                            number_format($ticket->price,2,',','.')
                            }}</a><br><br>
                                <a><strong>Status</strong></a><br>
                                @if($ticket->getTicketStatus() == 1)
                                <a class="btn btn-danger">Waiting Payment</a>
                                @elseif($ticket->getTicketStatus() == 2)
                                <a class="btn btn-warning">Waiting Approval</a>
                                @elseif($ticket->getTicketStatus() == 3)
                                <a class="btn btn-success">Approved</a>
                                @endif
                            </div>
                        </div>
                        <div class="span4" style="text-align:center">
                            <div class="cta-btn1">
                                @if($ticket->getStatus() < 3)
                                <a class="btn btn-large btn-primary" data-toggle="modal" data-target="#upload">Upload
                                    Your Receipt Payment <i class="icon-upload" style="color:honeydew"></i></a><br><br>
                                @endif
                                @if($ticket->getTicketStatus() == 3)
                                <a class="btn btn-large btn-success" data-toggle="modal" data-target="#qrcode">See
                                    Tickets <i class="icon-ticket" style="color:honeydew"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Modal -->
        <div class="modal fade" id="qrcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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

        <!-- Modal -->
        <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel" style="text-align:center"> Upload Your Receipt
                            Payment</h6>
                    </div>
                    <div class="modal-body" style="text-align:center">
                        <p>Please transfer the payment to <strong>Mandiri</strong> with account name of <strong>Trisna
                                Hastuti P.N</strong> and account number <strong>0495868605</strong> </p>
                        <input type="file" class="btn btn-color" />
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
