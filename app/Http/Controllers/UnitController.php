<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    function index()
    {
        return view('page/unit');
    }
}