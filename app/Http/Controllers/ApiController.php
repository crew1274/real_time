<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Demand_setting;


class ApiController extends Controller
{
    public function demand()
    {
        $last=Demand_setting::all() ->last();
        $last= $last->toJson();
        return response()->json($last);
    }
}
