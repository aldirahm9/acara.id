<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Event;
use App\User;
use Hashids;
use Auth;
use Log;
use DateTime;
use Session;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Event $event)
    {
        $tickets = Ticket::where('event_id', $event->id)->get();
        return view('dashboard/pages/ticket', ['event' => $event, 'tickets'=>$tickets]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Event $event)
    {
        $user = Auth::user();
        if(!$user->isOrganizerAdmin()) {
            return abort(401,'Unauthorized Action');
        }

        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'limit' => 'required|numeric',
        ]);


        $ticket = Ticket::create([
            'name' => $request->name,
            'price' => $request->price,
            'limit' => $request->limit,
            'onsale' => 0,
            'event_id' => $event->id

        ]);
        return redirect('dashboard/event/' . Hashids::connection(\App\Event::class)->encode($event->id) . '/ticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::findOrFail($id);
        // return view('attendee/pages/mytickets', compact('user'));
    }

    public function mytickets()
    {
        return view('attendee/pages/mytickets');
    }

    public function onsale(Ticket $ticket)
    {
        $ticket->update(['onsale'=>1]);
        return redirect('dashboard/event/'.Hashids::connection(\App\Event::class)->encode($ticket->event->id) . '/ticket');
    }

    public function offsale(Ticket $ticket)
    {
        $ticket->update(['onsale'=>0]);
        return redirect('dashboard/event/'.Hashids::connection(\App\Event::class)->encode($ticket->event->id) . '/ticket');
    }

    public function approveAttendee(Event $event,$ticketuser)
    {
        foreach($event->tickets as $ticket) {
            if($ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($ticketuser)[0])->first() != null) {
                $ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($ticketuser)[0])->first()->pivot
                ->update(['approved'=>1]);
                // Session::flash('success','Berhasil Checkin '. $ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($request->ticketuser)[0])->first()->email);

            }
        }
        // $ticket->users->where('id',$user->id)->first()->pivot->update([
        //     'approved'=>1
        // ]);
        // $ticket->users->where('id',$user->id)->first()->pivot->save();
        return redirect('/dashboard/event/' . Hashids::connection(\App\Event::class)->encode($ticket->event->id) . '/attendee');
    }

    public function declineAttendee(Event $event,$ticketuser)
    {
        foreach($event->tickets as $ticket) {
            if($ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($ticketuser)[0])->first() != null) {
                $ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($ticketuser)[0])->first()->pivot
                ->update(['receipt'=>null]);
                // Session::flash('success','Berhasil Checkin '. $ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($request->ticketuser)[0])->first()->email);

            }
        }
        // $ticket->users->where('id',$user->id)->first()->pivot->update([
        //     'receipt'=>null
        // ]);
        // $ticket->users->where('id',$user->id)->first()->pivot->save();
        return redirect('/dashboard/event/' . Hashids::connection(\App\Event::class)->encode($ticket->event->id) . '/attendee');
    }

    public function removeAttendee(Event $event,$ticketuser)
    {
        foreach($event->tickets as $ticket) {
            if($ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($ticketuser)[0])->first() != null) {
                $ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($ticketuser)[0])->first()->pivot
                ->delete();
                // Session::flash('success','Berhasil Checkin '. $ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($request->ticketuser)[0])->first()->email);

            }
        }
        // $ticket->users->where('id',$user->id)->first()->pivot->delete();
        return redirect('/dashboard/event/' . Hashids::connection(\App\Event::class)->encode($ticket->event->id) . '/attendee');
    }



    public function indexCheckin(Event $event)
    {
        return view('dashboard/pages/checkin',['event'=>$event]);
    }

    public function postCheckin(Request $request, Event $event)
    {

        $checkedin = false;
        foreach($event->tickets as $ticket) {
            if($ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($request->ticketuser)[0])->first() != null) {
                $ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($request->ticketuser)[0])->first()->pivot
                ->update(['checkin'=>1,'updated_at' => DateTime::createFromFormat('Y-m-d H:i:s', \Carbon\Carbon::now('Asia/Bangkok'))->format('Y-m-d H:i:s')]);
                Session::flash('success','Berhasil Checkin '. $ticket->users()->wherePivot('id',Hashids::connection('ticketuser')->decode($request->ticketuser)[0])->first()->email);
                $checkedin = true;
            }
        }
        if($checkedin == false) {
            Session::flash('failed','Gagal Checkin, Tiket tidak sesuai');
            Log::info('failed');
        }else {
            Log::info('checkedin');
        }
        // $ticket->users->where('id',$request->userid)->first()->pivot->checkin = 1;
        // $ticket->users()->wherePivot('id',3)->first();
        return redirect('dashboard/event/' . Hashids::connection(\App\Event::class)->encode($event->id) . '/checkin');
    }

    public function uploadReceipt(Request $request,$ticketuser)
    {
        $this->validate($request, [
            'receipt' => 'required|mimes:jpeg,jpg|max:1000',
        ]);

        $fileName= null;

        $pivotId=Hashids::connection('ticketuser')->decode($ticketuser)[0];
        $user = Auth::user();
        $fileName = $request->receipt->getClientOriginalName().'-bukti-'.$user->name . '-' . $pivotId . '.jpg';
        $request->file('receipt')->storeAs('public/upload', $fileName);


        $user->tickets()->wherePivot('id',$pivotId)->first()->pivot->update([
            'receipt' => $fileName
        ]);

        return redirect('mytickets');
    }

    public function bookTicket(Ticket $ticket)
    {
        if($ticket->limit != null && $ticket->limit == $ticket->users->count()) return back();
        $user = Auth::user();
        $user->tickets()->attach($ticket->id);
        return redirect('mytickets');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
