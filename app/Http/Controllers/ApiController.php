<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    //

    function getUsers() {
        return response()->json(User::all());
    }
}
