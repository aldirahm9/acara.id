@extends('dashboard/app')

@section('title')
 | BINER
@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title" style="color:steelblue"><strong>Organizer Profile</strong></h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet ">
                            <!-- SIDEBAR USERPIC -->
                            <div>
                                <img src="../../img/biner.jpeg" class="img-responsive"> </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> BINER </div>
                                <div class="profile-usertitle-job">Be Innovative and Educated Researcher</div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- END MENU -->
                        </div>
                        <!-- END PORTLET MAIN -->
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light ">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                        </div>
                                    </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active">
                                    <form role="form" action="#">
                                        <div class="form-group">
                                            <label class="control-label">Event Title</label>
                                            <input type="text" placeholder="BINER" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Location</label>
                                            <input type="text" placeholder="Rawamangun Muka, Jakarta Timur" class="form-control" /> </div>
                                        <div class="form-group" style="text-align:left;">
                                                <label class="control-label col-md-1">Start</label>
                                                <div class="col-md-5">
                                                    <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                        <input type="text" class="form-control" readonly name="datepicker">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 control-label">Time
                                                </label>
                                                <div class="col-md-4">
                                                        <input type="time" name="location" class="form-control">
                                                </div>
                                        </div>
                                        <br><br><br>
                                        <div class="form-group">
                                            <label class="control-label col-md-1">End</label>
                                            <div class="col-md-5">
                                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                    <input type="text" class="form-control" readonly name="datepicker">
                                                    <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <label class="col-md-2 control-label">Time
                                            </label>
                                            <div class="col-md-4">
                                                    <input type="time" name="location" class="form-control">
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <div class="form-group">
                                            <label class="control-label">Event Image</label><br>
                                            <img src="../../img/biner.jpeg" width="100"><br><br>
                                            <input type="file" name="files[]" multiple="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Event Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Merupakan rangkaian agenda teknologi informasi di Universitas Negeri Jakarta yang diadakan setiap tahun. Kini Biner sudah diadakan untuk ke-4 kalinya"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Event Type
                                            </label>
                                            <div>
                                                <select class="form-control select2me" name="options2">
                                                    <option value="Option 1">Appearance or Signing</option>
                                                    <option value="Option 2">Attraction</option>
                                                    <option value="Option 3">Camp, Trip, or Retreat</option>
                                                    <option value="Option 4">Class, Training, or Workshop</option>
                                                    <option value="Option 5">Concert or Performance</option>
                                                    <option value="Option 6">Conference</option>
                                                    <option value="Option 7">Convention</option>
                                                    <option value="Option 8">Dinner or Gala</option>
                                                    <option value="Option 9">Festival or Fair</option>
                                                    <option value="Option 10">Game or Competition</option>
                                                    <option value="Option 11">Meeting or Networking Event</option>
                                                    <option value="Option 12">Party or Social Gathering</option>
                                                    <option value="Option 13">Race or Endurance Event</option>
                                                    <option value="Option 14">Seminar or Talk</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Event Topic
                                            </label>
                                                <select class="form-control select2me" name="options2">
                                                    <option value="Option 1">Business</option>
                                                    <option value="Option 2">Technology</option>
                                                    <option value="Option 3">Family</option>
                                                    <option value="Option 4">Music</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="margiv-top-10">
                                            <a href="javascript:;" class="btn green"> Save Changes </a>
                                            <a href="javascript:;" class="btn default"> Cancel </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
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
    </div>
</div>
</div>
        <!-- END CONTENT BODY -->
@endsection

@section('script')
 <!-- BEGIN PAGE LEVEL PLUGINS -->
 <script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
 <script src="{{('assets/pages/scripts/profile.min.js" type="text/javascript')}}"></script>
 <!-- END PAGE LEVEL PLUGINS -->
<script>
        $(document).ready(function()
        {
            $('#clickmewow').click(function()
            {
                $('#radio1003').attr('checked', 'checked');
            });
        })
    </script>
@endsection
