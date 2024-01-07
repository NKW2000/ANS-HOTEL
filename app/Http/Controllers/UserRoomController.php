<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRoomController extends Controller
{
    function index()
    {
        
        return view('Room');
    }
}
