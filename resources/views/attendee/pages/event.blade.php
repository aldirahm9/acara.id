@extends('attendee/app')

@section('title')
| Event
@endsection

@section('action_event')
class="active"
@endsection

@section('content')
<section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>Discover Event</h2>
              </div>
            </div>
            <div class="span8">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Event</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="content">
        <div class="container">
          <div class="row">
            <div class="span12">
              <div class="clearfix"></div>
            </div>
          </div>

      <div class="row team">
        <div class="span12">
          <h4>Coming Events</h4>
        </div>

        @foreach ($events as $event)

        <div class="span3">
            <div class="team-box">
                <a href="{{route('attendee.event.show',['event'=>Hashids::connection(\App\Event::class)->encode($event->id)])}}" class="thumbnail"><img src="{{asset('storage/upload'.$event->image)}}" alt="" style/></a>
                <div class="roles aligncenter">
                    <p class="lead"><strong>{{$event->name}}</strong></p>
                    <a><i class="icon-home"></i> {{$event->location}}</a><br>
                    <a><i class="icon-calendar"></i>{{DateTime::createFromFormat('Y-m-d', $event->date)->format('l, d-m-Y')}}</a><br>
                    <a><i class="icon-time"></i>{{DateTime::createFromFormat('H:i:s', $event->timeStart)->format('H:i')
                    }}
                    {{$event->timeEnd != null ? ' - ' . DateTime::createFromFormat('H:i:s', $event->timeEnd)->format('H:i') : ''}}</a><br><br>
                    <a href="{{route('attendee.event.show',['event'=>Hashids::connection(\App\Event::class)->encode($event->id)])}}"><strong>>>See All<<</strong></a>
                </div>
            </div>
        </div>
        @endforeach

        <div class="span3">
            <div class="team-box">
              <a href="/event/1" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
          {{-- <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div> --}}
      </div>
      <div class="row" style="text-align:center">
        <a href="" ><h6>>>See All<<</h6></a>
      </div>

      @auth
      <div class="row team">
        <div class="span12">
          <h4>Events By Followed Organizer</h4>
        </div>

        <div class="span3">
          <div class="team-box">
            <a href="/event/1" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
            <div class="roles aligncenter">
              <p class="lead"><strong>BINER UNJ</strong></p>
              <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
              <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
              <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
              <a href="/event/1"><strong>>>See All<<</strong></a>
            </div>
          </div>
        </div>
        <div class="span3">
            <div class="team-box">
              <a href="/event/1" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
      </div>
      <div class="row" style="text-align:center">
        <a href="" ><h6>>>See All<<</h6></a>
      </div>
    @endauth
      <div class="row team">
        <div class="span12">
          <h4>Popular Events</h4>
        </div>

        <div class="span3">
          <div class="team-box">
            <a href="/event/1" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
            <div class="roles aligncenter">
              <p class="lead"><strong>BINER UNJ</strong></p>
              <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
              <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
              <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
              <a href="/event/1"><strong>>>See All<<</strong></a>
            </div>
          </div>
        </div>
        <div class="span3">
            <div class="team-box">
              <a href="/event/1" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="../../img/biner.jpeg" alt="" style/></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>BINER UNJ</strong></p>
                <a><i class="icon-home"></i> Kampus A, Rawamangun Muka</a><br>
                <a><i class="icon-calendar"></i> Sabtu, 13/11/2019</a><br>
                <a><i class="icon-time"></i> 09.00 s/d 12.00</a><br><br>
                <a href=""><strong>>>See All<<</strong></a>
              </div>
            </div>
          </div>
      </div>
      <div class="row" style="text-align:center">
        <a href="" ><h6>>>See All<<</h6></a>
      </div>
    </div>
</section>

@endsection
