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
                    <a href="index-2.html">Event</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="index-2.html">Ticket</a>
                </li>
            </ul>
        </div>
        <!--  END PAGE BAR -->
        <h1 class="page-title" style="color:steelblue"><strong>Tickets On BINER</strong></h1>
            <!-- END PAGE TITLE-->
            <a class="btn btn-lg green" data-toggle="modal" href="#form"> Create Ticket
                    <i class="fa fa-plus"></i>
                </a> <br><br>
                 <!-- responsive -->
                    <div id="form" class="modal fade" tabindex="-1" data-width="760">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Create New Ticket</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Name</h4>
                                        <p>
                                            <input class="form-control" type="text"> </p>
                                        <h4>Price</h4>
                                        <p>
                                            <input class="form-control" type="text"> </p>
                                        <h4>Location</h4>
                                        <p>
                                            <input class="form-control" type="text"> </p>
                                        <h4>Time</h4>
                                        <p>
                                            <input class="form-control" type="text"> </p>
                                        <h4>Limit</h4>
                                        <p>
                                            <input class="form-control" type="text"> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
                                <button class="btn btn-circle green-haze btn-outline sbold uppercase mt-sweetalert" data-title="Ticket Saved!" data-message="You did it!" data-type="success" data-allow-outside-click="true" data-confirm-button-class="btn-success" data-dismiss="modal">Save changes</button>
                            </div>
                    </div>
                    <!--End Modal-->
                <!-- Type Ticket -->
                <div class="portlet-body">
                        <div class="mt-element-card mt-element-overlay">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="mt-card-item">
                                        <div class="mt-card-avatar mt-overlay-1">
                                            <img src="../../img/ticket.jpg"/>
                                        </div>
                                        <div class="mt-card-content">
                                            <h3 class="mt-card-name">VVIP Ticket</h3>
                                            <p class="mt-card-desc font-grey-mint">
                                                <ul style="text-align:left;">
                                                    <li><b>Approved :</b><br>12</li>
                                                    <li><b>Need To Approved : </b><br>100</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="mt-card-item">
                                        <div class="mt-card-avatar mt-overlay-1">
                                            <img src="../../img/ticket.jpg"/>
                                        </div>
                                        <div class="mt-card-content">
                                            <h3 class="mt-card-name">Yellow Ticket</h3>
                                            <p class="mt-card-desc font-grey-mint">
                                                <ul style="text-align:left;">
                                                    <li><b>Approved :</b><br>12</li>
                                                    <li><b>Need To Approved : </b><br>100</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="mt-card-item">
                                        <div class="mt-card-avatar mt-overlay-1">
                                            <img src="../../img/ticket.jpg"/>
                                        </div>
                                        <div class="mt-card-content">
                                            <h3 class="mt-card-name">Red Ticket</h3>
                                            <p class="mt-card-desc font-grey-mint">
                                                <ul style="text-align:left;">
                                                    <li><b>Approved :</b><br>12</li>
                                                    <li><b>Need To Approved : </b><br>100</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="mt-card-item">
                                        <div class="mt-card-avatar mt-overlay-1">
                                            <img src="../../img/ticket.jpg"/>
                                        </div>
                                        <div class="mt-card-content">
                                            <h3 class="mt-card-name">Green Ticket</h3>
                                            <p class="mt-card-desc font-grey-mint">
                                                <ul style="text-align:left;">
                                                    <li><b>Approved :</b><br>12</li>
                                                    <li><b>Need To Approved : </b><br>100</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- End Type Ticket-->
    </div>
        <!-- END CONTENT BODY -->
</div>
@endsection

@section('script')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('../../assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js')}}" type="text/javascript"></script>
<script src="{{asset('../../assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('../../assets/pages/scripts/ui-extended-modals.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../../assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../../assets/pages/scripts/ui-sweetalert.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        $(document).ready(function()
        {
            $('#clickmewow').click(function()
            {
                $('#radio1003').attr('checked', 'checked');
            });
        })
</script>
<!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-W276BJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W276BJ');</script>
    <!-- End -->
@endsection
