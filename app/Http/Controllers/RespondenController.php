<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespondenController extends Controller
{
    public function index()
    {
        return view('responden.index');
    }
    public function assessment()
    {
        return view('responden.assessment');
    }
}
