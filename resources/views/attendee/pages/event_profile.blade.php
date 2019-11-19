@extends('attendee/app')

@section('content')
<section id="content">
    <div class="container">
      <div class="row">
          <div class="span6" style="text-align:left">
            <img src="{{asset('storage/upload/' . $event->organizer->image)}}" width="50"><span>  <a href="{{route('attendee.organizer.show',['event'=>Hashids::connection(\App\Organizer::class)->encode($event->organizer->id)])}}" class="btn btn-rounded btn-inverse"><strong>  {{$event->organizer->name}}</strong></a></span>
            <br><br>
            <h6 style="color:steelblue">{{$event->name}}</h6>
            <p><i class="icon-calendar"></i>{{DateTime::createFromFormat('Y-m-d', $event->date)->format('d-m-Y')}}</p>
            <p><i class="icon-time"></i> {{
                DateTime::createFromFormat('H:i:s', $event->timeStart)->format('H:i')
                }}
                {{$event->timeEnd != null ? ' - ' . DateTime::createFromFormat('H:i:s', $event->timeEnd)->format('H:i') : ''}}</p>
            <p><i class="font-icon-map-marker"></i> {{$event->location}}</p>
            <br>
            <a class="btn btn-large btn-rounded btn-info" data-toggle="modal" data-target="#ticket" style="text-align:center"><i class="icon-plus icon-white"></i>  Buy Ticket</a>
            <br><br><br>
            <h6>Description</h6>
            @markdown
                    {{$event->description}}
            @endmarkdown
          </div>

        <div class="span6">
          <img src="{{asset('storage/upload/' . $event->image)}}"  width="450">
        </div>

        <div class="span6">

      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align:center;">
          <h5 class="modal-title" id="exampleModalLongTitle" style="color:dimgrey">Select Ticket</h5>
          </button>
        </div>
        <div class="modal-body" style="text-align:center;">
            <p>
                <a href="/mytickets" class="btn btn-rounded btn-large btn-primary"><i class="icon-ticket" style="color:azure"></i>  Green</a><br><br>
                <a href="/mytickets" class="btn btn-rounded btn-large btn-primary"><i class="icon-ticket" style="color:azure"></i>  Yellow</a><br><br>
                <a href="/mytickets" class="btn btn-rounded btn-large btn-primary"><i class="icon-ticket" style="color:azure"></i>  Green</a><br><br>
                <a href="/mytickets" class="btn btn-rounded btn-large btn-primary"><i class="icon-ticket" style="color:azure"></i>  Yellow</a>
            </p>

        </div>
      </div>
    </div>
  </div>

@endsection
