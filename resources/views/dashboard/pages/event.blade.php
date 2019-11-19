@extends('dashboard/app')

@section('title')
| BINER
@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <div class="col-md-6">
            <h1 style="color:steelblue"><strong>Event Profile</strong></h1>
        </div>
        <div class="col-md-6" style="text-align:right">
            <br>
        <a href="{{route('dashboard.event.edit',['event' => Hashids::connection(\App\Event::class)->encode($event->id)])}}" class="btn btn-large btn-info"><strong>Edit</strong></a>
        {{-- <a href="javascript:;" onclick="event.preventDefault();$('#finishForm').submit()"class="btn btn-large btn-warning"><strong>Finish</strong></a>
        {!! Form::open(['route'=> ['dashboard.event.finish','event'=>Hashids::connection(\App\Event::class)->encode($event->id)],'method'=>'POST','id'=>'finishForm','style'=>'display:none']) !!}
        {!! Form::close() !!} --}}

        <a href="javascript:;" onclick="event.preventDefault();$('#removeForm').submit()"class="btn btn-large btn-danger"><strong>Delete</strong></a>
        {!! Form::open(['route'=> ['dashboard.event.remove','event'=>Hashids::connection(\App\Event::class)->encode($event->id)],'method'=>'POST','id'=>'removeForm','style'=>'display:none']) !!}
        {!! Form::close() !!}
        </div><br><br><br>

        <div class="page-title"></div>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col-md-3" style="text-align:left;">
                                <img src="{{asset('storage/upload/' . $event->image)}}" width="80%"/>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-8 profile-info">
                                        <h1 class="font-green sbold uppercase">{{$event->name}}</h1>
                                        @markdown
                                        {{$event->description}}
                                        @endmarkdown
                                        {{-- <p> “Developing Future and Unyielding Learn of Technology” atau yang di singkat dengan DEFAULT merupakan kelompok studi yang bergerak di bidang pengembangan teknologi seperti pada bidang arsitektur, website, animasi, dan juga aplikasi. Kelompok studi ini di dirikan oleh angkatan pertama program studi ilmu komputer pada tahun 2013. </p>
                                        <p>
                                            <a href="javascript:;"> www.defaultunj.com </a>
                                        </p> --}}
                                        <ul class="list-unstyled">
                                            <li>
                                                <i class="fa fa-map-marker"></i>{{$event->location}}</li>
                                            <li>
                                                <i
                                                    class="fa fa-calendar"></i>{{DateTime::createFromFormat('Y-m-d', $event->date)->format('d-m-Y')}}
                                            </li>
                                            <li>
                                                <i class="fa fa-clock-o"></i>{{
                                                DateTime::createFromFormat('H:i:s', $event->timeStart)->format('H:i')
                                                }}
                                                {{$event->timeEnd != null ? ' - ' . DateTime::createFromFormat('H:i:s', $event->timeEnd)->format('H:i') : ''}}
                                            </li>
                                            @foreach ($event->paymentMethods as $method)
                                            <li>
                                                <i class="fa fa-credit-card"></i> {{$method->bank}}
                                                {{$method->bankAccountNumber}} a/n {{$method->bankAccountName}}</li>
                                            @endforeach
                                            {{-- <li>
                                                <i class="fa fa-calendar"></i> 18 January 2014 </li>
                                            <li>
                                                <i class="fa fa-briefcase"></i> Design </li>
                                            <li>
                                                <i class="fa fa-star"></i> Top Seller </li>
                                            <li>
                                                <i class="fa fa-heart"></i> BASE Jumping </li> --}}
                                        </ul>
                                    </div>
                                    <!--end col-md-8-->
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
</div>
<!-- END CONTENT BODY -->
@endsection

