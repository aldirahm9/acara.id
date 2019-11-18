@extends('attendee/partials/app')

@section('style')
<link href="../assets/pages/css/profile-2.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/apps/css/ticket.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
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
                                <h1>BINER Description
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
                                    <span>Event Detail</span>
                                </li>
                            </ul>
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class="page-content-inner">
                                <div class="profile">
                                    <div class="tabbable-line tabbable-full-width">
                                        <div class="tab-content">
                                            <div class="tab-pane active">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="list-unstyled profile-nav">
                                                            <li>
                                                                <img src="../../img/biner.jpeg" class="img-responsive pic-bordered" alt="" />
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-8 profile-info">
                                                                <h1 class="font-green sbold uppercase" style="text-align:center">BINER</h1>
                                                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam
                                                                tincidunt erat volutpat. </p>
                                                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam
                                                                        tincidunt erat volutpat. </p>
                                                                <p>
                                                                    <a href="javascript:;"> www.mywebsite.com </a>
                                                                </p>
                                                                <ul class="list-inline">
                                                                    <li>
                                                                        <i class="fa fa-map-marker"></i> Kampus A, UNJ, Jakarta Timur </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i> 18 Januari 2010 </li>
                                                                </ul>
                                                                <div style="text-align:center">
                                                                <a class="btn btn-md btn-success" data-target="#buy" data-toggle="modal"><i class="icon-plus"></i>&nbsp;Buy Ticket</a></div>
                                                            </div>
                                                            <!--end col-md-8-->
                                                            <div class="col-md-2">
                                                                <!-- BEGIN PROFILE SIDEBAR -->
                                                                <div class="profile-sidebar">
                                                                        <!-- PORTLET MAIN -->
                                                                        <div class="portlet light profile-sidebar-portlet ">
                                                                            <!-- SIDEBAR USERPIC -->
                                                                            <div class="profile-userpic">
                                                                                <img src="../../img/default.png" class="img-responsive" alt=""> </div>
                                                                            <!-- END SIDEBAR USERPIC -->
                                                                            <!-- SIDEBAR USER TITLE -->
                                                                            <div class="profile-usertitle">
                                                                                <div class="profile-usertitle-name"> Default UNJ </div>
                                                                            </div>
                                                                            <!-- END SIDEBAR USER TITLE -->
                                                                            <!-- SIDEBAR BUTTONS -->
                                                                            <div class="profile-userbuttons">
                                                                                <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                                                                <button type="button" class="btn btn-circle red btn-sm" href="">Visit</button>
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

    <!-- stackable -->
    <div id="buy" class="modal fade" tabindex="-1" data-focus-on="input:first">
        <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title"><strong>Select Ticket</strong></h4>
        </div>
            <div class="modal-body">
            <div class="row" style="text-align:center">
                <div class="col-md-4">
                    <a style="color:black">Early Bird</a>
                </div>
                <div class="col-md-4">
                    <a style="color:black">Rp100.000</a>
                </div>
                <div class="col-md-4">
                    <a href="/mytickets" class="btn blue">Choose</a>
                    <form action="">
                    </form>
                </div>
            </div><br>
            <div class="row" style="text-align:center">
                <div class="col-md-4">
                    <a style="color:black">Early Bird</a>
                </div>
                <div class="col-md-4">
                    <a style="color:black">Rp100.000</a>
                </div>
                <div class="col-md-4">
                    <a href="/mytickets" class="btn blue">Choose</a>
                    <form action="">
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
        </div>
    </div>
@endsection

@section('style')
<script src="../assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
@endsection
