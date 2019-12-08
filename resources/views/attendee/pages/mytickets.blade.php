@extends('attendee/partials/app')

@section('style')
<link href="{{asset('assets/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-wrapper-row full-height">
    <div class="page-wrapper-middle">
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>My Tickets
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                        @include('dashboard/partials/_messages')
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index-2.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Event</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>My Tickets</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="profile">
                                <div class="tabbable-line tabbable-full-width">
                                    @foreach (Auth::user()->tickets as $ticket)
                                    <div class="tab-content">
                                        <div class="tab-pane active">
                                            <div class="row">
                                                <div class="col-md-4" style="text-align:center">
                                                    <ul class="list-unstyled profile-nav">
                                                        <li>
                                                            <img src="{{asset('/storage/upload/'.$ticket->event->image)}}"
                                                                width="200">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-8 profile-info" style="text-align:center">
                                                            <br>
                                                            <h1 class="font-green sbold uppercase">
                                                            {{$ticket->event->name}} - {{$ticket->name}}</h1>
                                                            <p>
                                                                <i class="fa fa-map-marker"></i>
                                                                {{$ticket->event->location}}
                                                                <br>
                                                                <i class="fa fa-calendar"></i>
                                                                {{
                                                                DateTime::createFromFormat('Y-m-d', $ticket->event->date)->format('l, d F Y')}}
                                                                <br>
                                                                <i class="fa fa-clock-o"></i> {{
                                                                    DateTime::createFromFormat('H:i:s', $ticket->event->timeStart)->format('H:i')
                                                                    }}
                                                                {{$ticket->event->timeEnd != null ? ' s/d ' . DateTime::createFromFormat('H:i:s', $ticket->event->timeEnd)->format('H:i') : ''}}<br>
                                                                <i class="fa fa-money"></i> Rp {{
                                                                number_format($ticket->price,2,',','.')
                                                                }}<br>
                                                                <div><br>
                                                                    <h5><strong>Status</strong></h5>
                                                                    @if($ticket->getTicketStatus() == 1)
                                                                    <a class="btn btn-danger">Waiting Payment</a>
                                                                    @elseif($ticket->getTicketStatus() == 2)
                                                                    <a class="btn btn-warning">Waiting Approval</a>
                                                                    @elseif($ticket->getTicketStatus() == 3)
                                                                    <a class="btn btn-success">Approved</a>
                                                                    @elseif($ticket->getTicketStatus() == 4)
                                                                    <a class="btn btn-success">Checked In</a>
                                                                    @endif
                                                                </div>
                                                        </div>
                                                        <!--end col-md-8-->
                                                        <div class="col-md-4" style="text-align:center">
                                                            <!-- BEGIN PROFILE SIDEBAR -->
                                                            <div class="profile-sidebar">
                                                                <!-- PORTLET MAIN -->
                                                                <div class="portlet light profile-sidebar-portlet ">
                                                                    <!-- SIDEBAR BUTTONS -->
                                                                    <div class="profile-userbuttons">
                                                                        <br><br>
                                                                        @if($ticket->getTicketStatus() < 3)
                                                                        <a data-toggle="modal" href="{{'#upload'. $ticket->pivot->id}}"
                                                                            class="btn btn-circle green btn-md"> <i
                                                                                class="fa fa-upload"></i> Upload Receipt
                                                                            Payment</a>
                                                                        @else
                                                                        <a class="btn btn-circle blue btn-md"
                                                                            data-toggle="modal" href="{{'#qrcode' . $ticket->pivot->id}}"> <i
                                                                                class="fa fa-ticket"></i> See Ticket</a>
                                                                        @endif
                                                                        @if($ticket->getTicketStatus() == 4)
                                                                        <br>
                                                                        <br>
                                                                        <a class="btn btn-circle green btn-md"
                                                                            data-toggle="modal" href="{{'#feedback' . $ticket->pivot->id}}"> <i
                                                                                class="fa fa-ticket"></i> Feedback Event</a>
                                                                        @endif
                                                                    </div>
                                                                    <!-- END SIDEBAR BUTTONS -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-md-4-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--modal -->
                                    <div class="modal fade" id="{{'qrcode'.$ticket->pivot->id}}" tabindex="-1" role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true"></button>
                                                    <h4 class="modal-title">{{$ticket->event->name . ' ' . $ticket->name}} Ticket</h4>
                                                </div>
                                                <div class="modal-body" style="text-align:center">
                                                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(250)->generate(Hashids::connection('ticketuser')->encode($ticket->pivot->id))) !!} ">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn dark btn-outline"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>



                                    <!--modal -->
                                    <div class="modal fade" id="{{'upload'. $ticket->pivot->id}}" tabindex="-1" role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true"></button>
                                                    <h4 class="modal-title"><strong>Upload Your Receipt Payment</strong>
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Please transfer the payment (Rp {{number_format($ticket->price,2,',','.')}}) to one of this account:</p>
                                                    <table class="table">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Bank Name</th>
                                                                <th scope="col">Acoount Name</th>
                                                                <th scope="col">Number</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($ticket->event->paymentMethods as $pay)
                                                            <tr>
                                                                <td>{{$pay->bank}}</td>
                                                                <td>{{$pay->bankAccountName}}</td>
                                                                <td>{{$pay->bankAccountNumber}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    {!! Form::open(['route'=>['attendee.upload.receipt','ticketuser'=>Hashids::connection('ticketuser')->encode($ticket->pivot->id)],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                                    <input type="file" name="receipt" required class="btn btn-color" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn dark btn-outline"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn green">Save</button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>


                                    <!--modal -->
                                    <div class="modal fade" id="{{'feedback'. $ticket->pivot->id}}" tabindex="-1" role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true"></button>
                                                    <h4 class="modal-title"><strong>Feedback to {{$ticket->event->name}}</strong>
                                                    </h4>
                                                </div>
                                                <div class="modal-body">

                                                    {!! Form::open(['route'=>['attendee.feedback','ticketuser'=>Hashids::connection('ticketuser')->encode($ticket->pivot->id)],'method'=>'POST']) !!}
                                                    <div class="form-group">
                                                      <label for="feedback">Your feedback:</label>
                                                      <textarea name="feedback" class="form-control"cols="50" rows="5"></textarea>
                                                      <small id="helpId" class="text-muted">Only the latest feedback is saved.</small>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn dark btn-outline"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn green">Send</button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
    </div>
</div>


@endsection

@section('style')
<script src="{{asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/ui-modals.min.js')}}" type="text/javascript"></script>
@endsection
