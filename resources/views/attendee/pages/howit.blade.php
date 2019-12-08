@extends('attendee/partials/app')

@section('style')
<link href="{{asset('assets/pages/css/blog.min.css')}}" rel="stylesheet" type="text/css" />
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
                                <h1>How It Works
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
                                    <span>How It Works</span>
                                </li>
                            </ul>
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class="page-content-inner">
                                <div class="blog-page blog-content-1">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="blog-post-sm bordered blog-container">
                                                            <div class="blog-img-thumb">
                                                                <a href="javascript:;">
                                                                    <img src="{{asset('img/attendee.jpg')}}" />
                                                                </a>
                                                            </div>
                                                            <div class="blog-post-content">
                                                                <h2 class="blog-title blog-post-title">
                                                                    <a href="javascript:;">For Attendee</a>
                                                                </h2>
                                                                <p class="blog-post-desc"> Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="blog-post-sm bordered blog-container">
                                                            <div class="blog-img-thumb">
                                                                <a href="javascript:;">
                                                                    <img src="{{asset('img/organizer.jpeg')}}" />
                                                                </a>
                                                            </div>
                                                            <div class="blog-post-content">
                                                                <h2 class="blog-title blog-post-title">
                                                                    <a href="javascript:;">For Organizer</a>
                                                                </h2>
                                                                <p class="blog-post-desc"> Lorem ipsum dolor sit amet adipiscing elit, sed diam nonummy </p>
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
                    </div>
                    <!-- END PAGE CONTENT BODY -->
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
        </div>
    </div>
</div>
@endsection
