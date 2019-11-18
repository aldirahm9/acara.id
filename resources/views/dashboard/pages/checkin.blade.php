@extends('dashboard/app')

@section('title')
| BINER - Check In
@endsection

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index-2.html">Event</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="index-2.html">Checkin</a>
                </li>
            </ul>
        </div>
    <h1 class="page-title" style="color:steelblue"><strong>Checkin {{$event->name}}</strong></h1>
        <div style="text-align:center">
            <a data-toggle="modal" href="#scan" class="btn btn-lg green"><i class="icon-camera"></i>  Scan QR Code</a>
        </div>
        <br>

        <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Attendee</div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama </th>
                                <th> Email </th>
                                <th> Phone Number </th>
                                <th> Ticket  </th>
                                <th> Checkin On </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>Tris</td>
                                <td>tris@tris.com</td>
                                <td>082222222</td>
                                <td>VVIP</td>
                                <td>11-11-2010
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- responsive -->
                <div id="scan" class="modal fade" tabindex="-1" data-width="760">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title"><b>Scan QR Code</b></h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                    <div class="col-md-12" style="text-align: center">
                                        <img src="/../../img/receipt.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
                            </div>
                    </div>
                    <!--End Modal-->

                </div>
            </div>
    </div>
</div>
@endsection

@section('style')
<link href="{{asset('../assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('../assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="/../../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="/../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
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
<script src="/../../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="/../../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="/../../assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection

