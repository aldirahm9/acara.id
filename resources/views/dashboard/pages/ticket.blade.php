@extends('dashboard/app')

@section('title')
 | BINER - ticket
@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!--  BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index-2.html">Dashboard</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="index-2.html">Event</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="index-2.html">{{$event->name}}</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li><a>Ticket</a>
                </li>
            </ul>
        </div>
        <!--  END PAGE BAR -->
        <h1 class="page-title" style="color:steelblue"><strong>Tickets On BINER</strong></h1>
            <!-- END PAGE TITLE-->
            <a class="btn btn-lg green" data-toggle="modal" href="#responsive"> Create Ticket
                    <i class="fa fa-plus"></i>
                </a> <br><br>
                 <!-- responsive -->
                 <div id="responsive" class="modal fade" tabindex="-1" data-width="760">
                     {!! Form::open(['route' => ['dashboard.event.ticket.store', $event->id], 'data-parsley-validate' => '','method' => 'POST']) !!}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title"><b>Create New Ticket</b></h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                    <div class="col-md-12">
                                        <h4>Name</h4>
                                        <p>
                                            {!! Form::text('name', null, ['class' => 'form-control', 'required' => '']) !!} </p>
                                        <h4>Price</h4>
                                        <p>
                                           {!! Form::number('price', null, ['class' => 'form-control', 'required' => '']) !!} </p>
                                        <h4>Limit</h4>
                                        <p>
                                            {!! Form::number('limit', null, ['class' => 'form-control', 'required' => '']) !!} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
                                {!! Form::submit('Create', ['class' => 'btn btn-circle green-haze btn-outline sbold uppercase']) !!}
                                {{-- <button type="submit" class="btn btn-circle green-haze btn-outline sbold uppercase">Create</button> --}}
                                {!! Form::close() !!}
                            </div>
                    </div>
                    <!--End Modal-->
                <!-- Type Ticket -->
                <div class="portlet-body">
                        <div class="mt-element-card mt-element-overlay">
                            <div class="row">
                                @foreach ($tickets as $ticket)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="mt-card-item">
                                            <div class="mt-card-avatar mt-overlay-1">
                                                <img src="{{asset('img/ticket.jpg')}}"/>
                                            </div>
                                            <div class="mt-card-content">
                                                <h3 class="mt-card-name">{{$ticket->name}}</h3>
                                                <p class="mt-card-desc font-grey-mint">
                                                    <ul style="text-align:left;">
                                                        <li><b style="color:green">Approved :</b><br>12</li>
                                                        <li><b style="color:red">Need Approval : </b><br>100</li>
                                                        @if($ticket->limit != null)
                                                        <li><b>Limit : </b><br>{{$ticket->limit}}</li>
                                                        @endif
                                                        @if($ticket->onsale == 1)
                                                        <li><b >Status : </b><br><span style="color:green">ON SALE</span></li>
                                                        @else
                                                        <li><b >Status : </b><br><span style="color:red">OFF SALE</span></li>
                                                        @endif
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
            <!-- End Type Ticket-->
    </div>
        <!-- END CONTENT BODY -->
</div>
@endsection

@section('style')
<link href="{{asset('../assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('../assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('script')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/pages/scripts/ui-extended-modals.min.js')}}" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/pages/scripts/ui-extended-modals.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/ui-sweetalert.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
