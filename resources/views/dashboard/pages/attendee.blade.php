@extends('dashboard/app')

@section('title')
 | BINER - Attendee
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
                    <a href="index-2.html">Attendee</a>
                </li>
            </ul>
        </div>
        <!--  END PAGE BAR -->
        <h1 class="page-title" style="color:steelblue"><strong>Attendee On BINER</strong></h1>
            <!-- END PAGE TITLE-->
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Registered Attendee</div>
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
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Trisnapspt</td>
                                    <td>trisna@gmail.com</td>
                                    <td>082261162639</td>
                                    <td style="text-align: left">
                                            <button class="btn btn-primary">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Trisnapspt</td>
                                    <td>trisna@gmail.com</td>
                                    <td>082261162639</td>
                                    <td style="text-align: left">
                                            <button class="btn btn-primary">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Trisnapspt</td>
                                    <td>trisna@gmail.com</td>
                                    <td>082261162639</td>
                                    <td style="text-align: left">
                                            <button class="btn btn-primary">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Trisnapspt</td>
                                    <td>trisna@gmail.com</td>
                                    <td>082261162639</td>
                                    <td style="text-align: left">
                                            <button class="btn btn-primary">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
    </div>
        <!-- END CONTENT BODY -->
</div>
@endsection

@section('script')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('../../assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('../../assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('../../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="{{asset('../../assets/pages/scripts/table-datatables-buttons.min.js')}}" type="text/javascript"></script>
@endsection
