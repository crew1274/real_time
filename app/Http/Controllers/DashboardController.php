<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Demand_record;

class DashboardController extends Controller
{
    public function __construct()
    {
     $this->middleware('auth');
    }
    public function index()
    {
        //$records = Demand_record::orderBy('updated_at','ASC')->limit(3)->get();
        return view('home');
    }
}
