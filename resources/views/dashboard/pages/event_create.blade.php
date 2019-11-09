@extends('dashboard/app')

@section('title')
 | Create Event
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
                    <a href="index-2.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Create Event</a>
                </li>
            </ul>
        </div>
        <!--  END PAGE BAR -->
        <!-- END PAGE HEADER-->
        <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Create New Event</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                    <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                        <input type="radio" name="options" class="toggle" id="option1">Edit</label>
                                    <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Preview</label>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="#" id="form_sample_3" class="form-horizontal">
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Event Title
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-7">
                                            <input type="text" name="name" data-required="1" class="form-control" /> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Location
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-7">
                                                <input type="text" name="location" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Start</label>
                                        <div class="col-md-3">
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
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-2">
                                                <input type="time" name="location" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">End</label>
                                        <div class="col-md-3">
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
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-2">
                                                <input type="time" name="location" class="form-control">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Event Image
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-2">
                                            <input type="file" name="files[]" multiple="">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Event Description</label>
                                            <div class="col-md-9">
                                                <textarea name="markdown" data-provide="markdown" rows="10" data-error-container="#editor_error"></textarea>
                                                <div id="editor_error"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Event Type
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <select class="form-control select2me" name="options2">
                                                    <option value="">Select the type of the event</option>
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
                                            <label class="control-label col-md-2">Event Topic
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <select class="form-control select2me" name="options2">
                                                    <option value="">Select...</option>
                                                    <option value="Option 1">Business</option>
                                                    <option value="Option 2">Technology</option>
                                                    <option value="Option 3">Family</option>
                                                    <option value="Option 4">Music</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row" style="text-align:center;">
                                        <div class="col-md-offset-1 col-md-9">
                                            <button type="submit" class="btn green">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection

@section('script')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
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
<!-- Google Code for Universal Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-37564768-1', 'auto');
ga('send', 'pageview');
</script>
@endsection
