<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Event;
use App\User;
use Auth;

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
        return redirect('dashboard/event/' . $event->id . 'ticket');
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

    public function approveAttendee(Ticket $ticket, User $user)
    {
        $ticket->users->where('id',$user->id)->first()->pivot->approved = 1;
        $ticket->users->where('id',$user->id)->first()->pivot->save();
        return redirect('/dashboard/event/' . $ticket->event->id . '/attendee');
    }

    public function declineAttendee(Ticket $ticket, User $user)
    {
        $ticket->users->where('id',$user->id)->first()->pivot->receipt = null;
        $ticket->users->where('id',$user->id)->first()->pivot->save();
        return redirect('/dashboard/event/' . $ticket->event->id . '/attendee');
    }

    public function removeAttendee(Ticket $ticket, User $user)
    {
        $ticket->users->where('id',$user->id)->first()->pivot->delete();
        return redirect('/dashboard/event/' . $ticket->event->id . '/attendee');
    }



    public function indexCheckin(Event $event)
    {
        return view('dashboard/pages/checkin',['event'=>$event]);
    }

    public function postCheckin(Request $request, Event $event)
    {
        foreach($event->tickets as $ticket) {
            if($ticket->users()->wherePivot('id',6)->first() != null)
            $ticket->users()->wherePivot('id',6)->first()->pivot->checkin = 1;
        }
        $ticket->users->where('id',$request->userid)->first()->pivot->checkin = 1;
        $ticket->users()->wherePivot('id',3)->first();
        return redirect('dashboard/event/' . $ticket->event->id . '/checkin');
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
