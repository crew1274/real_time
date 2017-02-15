<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Offload;

class OfflodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $last=offload::all() ->last();
        return view('control',compact('last'));
    }



}
