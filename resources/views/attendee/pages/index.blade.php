@extends('attendee/partials/app')

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
                        <!-- END PAGE TOOLBAR -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <!-- BEGIN CONTENT HEADER -->
                            <div class="row margin-bottom-40 about-header">
                                <div class="col-md-12">
                                    <h1>Welcome to <strong>acara.id</strong></h1>
                                    <h2>Get ready for great events!</h2>
                                </div>
                            </div>
                            <!-- END CONTENT HEADER -->
                            <!-- BEGIN MEMBERS SUCCESS STORIES -->
                            @foreach($event as $event)
                            <div class="row margin-bottom-20 stories-cont">
                                <div class="col-lg-3 col-md-6">
                                    <div class="portlet light">
                                        <div>
                                        <img src="/storage/upload/{{$event->image}}" alt="" class="img-responsive" /> </div>
                                        <div class="title">
                                            <br>
                                            <span> {{$event->name}} </span>
                                        </div>
                                        <div class="desc">
                                            <span> {{$event->description}}...... </span>
                                        </div>
                                        <div style="text-align:center"><a href=""><strong>See More</strong></a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="row margin-bottom-40 stories-footer">
                                <div class="col-md-12">
                                    <a href="/event" class="btn btn-danger">SEE MORE EVENTS</a>
                                </div>
                            </div>
                            <!-- END MEMBERS SUCCESS STORIES -->
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
