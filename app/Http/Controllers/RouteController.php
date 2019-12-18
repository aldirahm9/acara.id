<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function err500() {
        return view('500');
    }

    public function err404() {
        return view('404');
    }

    public function contact() {
    return view('attendee/pages/contact');
    }

    public function howit() {
    return view('attendee/pages/howit');
    }

}
