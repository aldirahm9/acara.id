<?php

namespace App\Http\Controllers;

use App\Event;
use App\PaymentMethod;
use Illuminate\Http\Request;
use Auth;
use Log;
use DateTime;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/pages/event_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if(!$user->isOrganizerAdmin()) {
            return abort(401,'Unauthorized Action');
        }
        Log::info($request->image);
        $this->validate($request, [
            'name' => 'required|max:255',
            'location' => 'required',
            'date' => 'required',
            'timeStart' => 'required',
            'timeEnd' => '',
            'image' => 'required|mimes:jpeg,jpg|max:1000',
            'description' => 'required',
        ]);

        $fileName= null;
        if($request->image != null) {
            $fileName = $user->organizer->name . '.jpg';
            $request->file('image')->storeAs('public/upload', $fileName);
        }

        $dateLocale = DateTime::createFromFormat('d-m-Y', $request->date);

        $dateToSave = $dateLocale->format('Y-m-d');

        $event = Event::create([
            'name' => $request->name,
            'location' => $request->location,
            'date' => $dateToSave,
            'timeStart' => $request->timeStart,
            'timeEnd' => $request->timeEnd,
            'image' => $fileName,
            'description' => $request->description,
            'organizer_id' => $user->organizer_id,
            'finished' => 0
        ]);


        foreach($request->payment as $each) {
            $method = PaymentMethod::create([
                'bank' => $each['bank'],
                'bankAccountName' => $each['bankAccountName'],
                'bankAccountNumber' => $each['bankAccountNumber'],
                'event_id' => $event->id
            ]);
        }
        return redirect('dashboard/event/' . $event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        if($event->organizer_id != Auth::user()->organizer->id)
        return redirect('404');

        return view('dashboard/pages/event',['event'=>$event]);
    }


    public function show_attendee(Event $event)
    {
        return view('dashboard/pages/attendee', ['event'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('dashboard/pages/edit_event', ['event'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //NOTE: nanti untuk yang payment methodnya, delete semua dulu, baru save yang baru dari request
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
