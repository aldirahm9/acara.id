@extends('attendee/partials/app')

@section('style')
<link href="../assets/pages/css/profile-2.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
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
                                <h1>My Ticket
                                </h1>
                            </div>
                            <!-- END PAGE TITLE -->
                        </div>
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE CONTENT BODY -->
                    <div class="page-content">
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
                                    <span>My Ticket</span>
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
                                                                <img src="/storage/upload/{{$ticket->event->image}}" width="200">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-8 profile-info" style="text-align:center">
                                                                <br>
                                                                <h1 class="font-green sbold uppercase">{{$ticket->event->name}}</h1>
                                                                    <p>
                                                                        <i class="fa fa-map-marker"></i> {{$ticket->event->location}}
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
                                                                                @if($ticket->getTicketStatus() == 1)
                                                                                <a data-toggle="modal" href="#upload" class="btn btn-circle green btn-md"> <i class="fa fa-upload"></i> Upload Receipt Payment</a>
                                                                                @else
                                                                                <a class="btn btn-circle blue btn-md" data-toggle="modal" href="#qrcode"> <i class="fa fa-ticket"></i> See Ticket</a>
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

    <!--modal -->
    <div class="modal fade" id="qrcode" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">See Ticket</h4>
                    </div>
                    <div class="modal-body" style="text-align:center">
                            <img src="../../img/qr.png" width="250">
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!--modal -->
    <div class="modal fade" id="upload" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title"><strong>Upload Your Receipt Payment</strong></h4>
                    </div>
                    <div class="modal-body">
                            <p>Please transfer the payment to one of this account:</p>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">Bank Name</th>
                                    <th scope="col">Acoount Name</th>
                                    <th scope="col">Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mandiri</td>
                                        <td>Trisna Hastuti Puspita</td>
                                        <td>0495868405</td>
                                    </tr>
                                    <tr>
                                        <td>BNI</td>
                                        <td>Trisna Hastuti</td>
                                        <td>0495868405</td>
                                    </tr>
                                   <tr>
                                        <td>BCA</td>
                                        <td>Trisna Puspita</td>
                                        <td>0495868405</td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="file" class="btn btn-color" />
                         </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                        <button type="button" class="btn green">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
@endsection

@section('style')
<script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
@endsection
