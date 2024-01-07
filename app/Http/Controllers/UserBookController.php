<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserBookController extends Controller
{
    function index()
    {
        return view('book');
    }
}
