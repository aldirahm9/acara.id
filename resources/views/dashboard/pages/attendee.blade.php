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
        <h1 class="page-title" style="color:steelblue"><strong>Attendee On {{$event->name}}</strong></h1>
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
                            <th> Ticket  </th>
                            <th> Booked On </th>
                            <th> Receipt </th>
                            <th> Status </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($event->tickets as $ticket)
                        @foreach($ticket->users as $user)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$ticket->name}}</td>
                            <td>{{DateTime::createFromFormat('Y-m-d H:i:s', $user->pivot->created_at)->format('d-m-Y H:i:s')}}
                            </td>
                            {{-- TODO: bikin show modal yang nunjukin bukti bayar--}}
                            @if($user->pivot->receipt!= null)
                            <td><a href="javascript:;">Transfer Receipt</a></td>
                            @else
                            <td>Waiting for receipt</td>
                            @endif
                            @if($user->getTicketStatus() == 3)
                            <td>Approved</td>
                            @elseif($user->getTicketStatus() ==2)
                            <td>Waiting for Approval</td>
                            @elseif($user->getTicketStatus() == 1)
                            <td>Waiting for Payment</td>
                            @endif
                            <td style="text-align: left">
                                <div class="btn-group">
                                    @if($user->getTicketStatus() !=3)
                                    <button class="btn btn-xs green dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    {{-- TODO: tambahin alert confirm --}}
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        @if($user->getTicketStatus() == 2)
                                        <li>
                                            {!! Form::open(['route'=> ['user.ticket.remove','user'=>
                                            $user->id,'ticket'=>$ticket->id],
                                            'style'=>'display:none','method'=>'POST','id'=>'approve'.$user->id . 't' .
                                            $ticket->id]) !!}
                                            {!! Form::close() !!}
                                            <a
                                                onclick="event.preventDefault();
                                                    document.getElementById('approve' + {{$user->id}} +'t'+ {{$ticket->id}}).submit();">
                                                <i class="icon-docs"></i> Approve Payment </a>
                                        </li>

                                        <li>
                                            {!! Form::open(['route'=> ['user.ticket.remove','user'=>
                                            $user->id,'ticket'=>$ticket->id],
                                            'style'=>'display:none','method'=>'POST','id'=>'decline'.$user->id . 't' .
                                            $ticket->id]) !!}
                                            {!! Form::close() !!}
                                            <a
                                                onclick="event.preventDefault();
                                                    document.getElementById('decline' + {{$user->id}} +'t'+ {{$ticket->id}}).submit();">
                                                <i class="icon-docs"></i> Decline Payment </a>
                                        </li>
                                        @endif


                                        <li>
                                            {!! Form::open(['route'=> ['user.ticket.remove','user'=>
                                            $user->id,'ticket'=>$ticket->id],
                                            'style'=>'display:none','method'=>'POST','id'=>'remove'.$user->id . 't' .
                                            $ticket->id]) !!}
                                            {!! Form::close() !!}
                                            <a
                                                onclick="event.preventDefault();
                                                    document.getElementById('remove' + {{$user->id}} +'t'+ {{$ticket->id}}).submit();">
                                                <i class="icon-docs"></i> Remove </a>
                                        </li>
                                        {{-- <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li> --}}
                                    </ul>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
                        {{-- <tr>
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
                        </tr> --}}
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
<script src="{{asset('../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}"
    type="text/javascript"></script>
<script src="{{asset('../../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"
    type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="{{asset('../../assets/pages/scripts/table-datatables-buttons.min.js')}}" type="text/javascript"></script>
@endsection
