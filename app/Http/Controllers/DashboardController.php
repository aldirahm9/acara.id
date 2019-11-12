<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Organizer;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/pages/index');
    }


    public function organizer()
    {
        $organizer = Auth::user()->organizer;
        $members = User::getAllMembersOf($organizer->id)->get();

        return view('dashboard/pages/organizerprof', ['members'=> $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_org(Request $request, $id)
    {
        $this->validate(request(), [
            'picture' => 'mimes:jpeg,jpg,png|max:1000'
        ]);

        $picture= null;
        if($request->picture != null) {
            $picture = $request->picture->getClientOriginalName(). '.png';
            $request->file('picture')->storeAs('public/upload', $picture);
        }
        $organize = Organizer::create([
            'name'=>$request->name,
            'description' => $request->description,
            'picture'=> $picture
        ]);

        $attendee = User::findOrFail($id);

        $attendee->update([
            'organizer_id'=>$organize->id
        ]);
        
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
