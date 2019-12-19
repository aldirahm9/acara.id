@extends('dashboard/app')

@section('title')
 | Dashboard
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
                    <i class="fa fa-circle"></i>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-circle"></i>
                    <a href="#">Event</a>
                </li>
                <li>
                    <i class="fa fa-circle"></i>
                    <a href="#">Division</a>
                </li>
            </ul>
        </div>
        <br>
        <!--  END PAGE BAR -->
        {{-- <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title" style="color:steelblue"> <b>Hello, {{Auth::user()->name}}!</b></h1>
        <!-- END PAGE TITLE--> --}}
        <!-- END PAGE HEADER-->
        <div style="text-align:center">
            <a class="btn-lg btn green" href="#new" data-toggle="modal"><i class="fa fa-plus"></i> <strong>Add New</strong></a>
        </div>

        <div id="new" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title"><strong>Make new tasks for this division</strong></h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-md-2">Date</label>
                                <div class="col-md-8">
                                    <div class="input-group input-medium date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                        <input type="text" class="form-control" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Tasks</label>
                                <div class="col-md-10">
                                    <div class="mt-repeater">
                                        <div data-repeater-list="group-b">
                                            <div data-repeater-item class="row">
                                                <div class="col-md-9">
                                                    <label class="control-label"> </label>
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="col-md-1">
                                                    <label class="control-label"> </label>
                                                    <a href="javascript:;" data-repeater-delete class="btn btn-danger">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add">
                                            <i class="fa fa-plus"></i> Add task</a>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button class="btn green" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo">
                            <i class="fa fa-hourglass-end font-red-sunglo"></i>
                            <span class="caption-subject bold"> 12-10-2019</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn btn-md grey" href="#edit" data-toggle="modal">
                                    <i class="fa fa-gear font-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form role="form">
                            <div class="form-group form-md-checkboxes">
                                <label>Humas Publikasi dan Dokumentasi</label>
                                <div class="md-checkbox-list">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox1" class="md-check">
                                        <label for="checkbox1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Membuat poster yang sudah ditentukan saat rapat </label>
                                   </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox2" class="md-check">
                                        <label for="checkbox2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Mencari media partner minimal 5 </label>
                                   </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox3" class="md-check">
                                        <label for="checkbox3">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Membuat teaser video seperti yang tahun lalu dimasukkan dalam website dan instagram </label>
                                   </div>
                                </div>
                            </div>
                            <div>
                                <p style="color:gray">added by Aldi Rahmansyah</p>
                            </div>
                            <div class="form-actions noborder center">
                                <button type="button" class="btn blue">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
            <div class="col-md-4">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo">
                            <i class="fa fa-hourglass-end font-red-sunglo"></i>
                            <span class="caption-subject bold"> 12-10-2019</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn btn-md grey" href="#edit" data-toggle="modal">
                                    <i class="fa fa-gear font-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form role="form">
                            <div class="form-group form-md-checkboxes">
                                <label>Humas Publikasi dan Dokumentasi</label>
                                <div class="md-checkbox-list">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox1" class="md-check">
                                        <label for="checkbox1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Membuat poster yang sudah ditentukan saat rapat </label>
                                   </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox2" class="md-check">
                                        <label for="checkbox2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Mencari media partner minimal 5 </label>
                                   </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox3" class="md-check">
                                        <label for="checkbox3">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Membuat teaser video seperti yang tahun lalu dimasukkan dalam website dan instagram </label>
                                   </div>
                                </div>
                            </div>
                            <div>
                                <p style="color:gray">added by Aldi Rahmansyah</p>
                            </div>
                            <div class="form-actions noborder center">
                                <button type="button" class="btn blue">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
            <div class="col-md-4">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo">
                            <i class="fa fa-hourglass-end font-red-sunglo"></i>
                            <span class="caption-subject bold"> 12-10-2019</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn btn-md grey" href="#edit" data-toggle="modal">
                                    <i class="fa fa-gear font-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form role="form">
                            <div class="form-group form-md-checkboxes">
                                <label>Humas Publikasi dan Dokumentasi</label>
                                <div class="md-checkbox-list">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox1" class="md-check">
                                        <label for="checkbox1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Membuat poster yang sudah ditentukan saat rapat </label>
                                   </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox2" class="md-check">
                                        <label for="checkbox2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Mencari media partner minimal 5 </label>
                                   </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox3" class="md-check">
                                        <label for="checkbox3">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Membuat teaser video seperti yang tahun lalu dimasukkan dalam website dan instagram </label>
                                   </div>
                                </div>
                            </div>
                            <div>
                                <p style="color:gray">added by Aldi Rahmansyah</p>
                            </div>
                            <div class="form-actions noborder center">
                                <button type="button" class="btn blue">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
            <div class="col-md-4">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo">
                            <i class="fa fa-hourglass-end font-red-sunglo"></i>
                            <span class="caption-subject bold"> 12-10-2019</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn btn-md grey" href="#edit" data-toggle="modal">
                                    <i class="fa fa-gear font-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form role="form">
                            <div class="form-group form-md-checkboxes">
                                <label>Humas Publikasi dan Dokumentasi</label>
                                <div class="md-checkbox-list">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox1" class="md-check">
                                        <label for="checkbox1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Membuat poster yang sudah ditentukan saat rapat </label>
                                   </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox2" class="md-check">
                                        <label for="checkbox2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Mencari media partner minimal 5 </label>
                                   </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox3" class="md-check">
                                        <label for="checkbox3">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Membuat teaser video seperti yang tahun lalu dimasukkan dalam website dan instagram </label>
                                   </div>
                                </div>
                            </div>
                            <div>
                                <p style="color:gray">added by Aldi Rahmansyah</p>
                            </div>
                            <div class="form-actions noborder center">
                                <button type="button" class="btn blue">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
        </div>
            <!-- END SAMPLE FORM PORTLET-->
            <div id="edit" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title"><strong>12-10-2019</strong></h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-md-2">Date</label>
                                    <div class="col-md-8">
                                        <div class="input-group input-medium date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                            <input type="text" class="form-control" readonly>
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button">
                                                    <i class="fa fa-calendar"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Tasks</label>
                                    <div class="col-md-10">
                                        <div class="mt-repeater">
                                            <div data-repeater-list="group-b">
                                                <div data-repeater-item class="row">
                                                    <div class="col-md-9">
                                                        <label class="control-label"> </label>
                                                        <input type="text" value="Membuat poster yang sudah ditentukan saat rapat" class="form-control" />
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label class="control-label"> </label>
                                                        <a href="javascript:;" data-repeater-delete class="btn btn-danger">
                                                            <i class="fa fa-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div data-repeater-item class="row">
                                                    <div class="col-md-9">
                                                        <label class="control-label"> </label>
                                                        <input type="text" value="Mencari media partner minimal 5" class="form-control" /> </div>
                                                    <div class="col-md-1">
                                                        <label class="control-label"> </label>
                                                        <a href="javascript:;" data-repeater-delete class="btn btn-danger">
                                                            <i class="fa fa-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div data-repeater-item class="row">
                                                    <div class="col-md-9">
                                                        <label class="control-label"> </label>
                                                        <input type="text" value="Membuat teaser video seperti yang tahun lalu dimasukkan dalam website dan instagram" class="form-control" /> </div>
                                                    <div class="col-md-1">
                                                        <label class="control-label"> </label>
                                                        <a href="javascript:;" data-repeater-delete class="btn btn-danger">
                                                            <i class="fa fa-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add">
                                                <i class="fa fa-plus"></i> Add task</a>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                            <button class="btn green" data-dismiss="modal">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- END CONTENT BODY -->
    </div>
</div>
@endsection

@section('style')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('script')
 <!-- BEGIN PAGE LEVEL PLUGINS -->
 <script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/global/plugins/jquery-repeater/jquery.repeater.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
 <!-- END PAGE LEVEL PLUGINS -->
 <!-- BEGIN PAGE LEVEL SCRIPTS -->
 <script src="{{asset('assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/pages/scripts/form-repeater.min.js')}}" type="text/javascript"></script>
 <!-- END PAGE LEVEL SCRIPTS -->
@endsection
