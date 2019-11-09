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
    </div>
        <!-- END CONTENT BODY -->
</div>
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
