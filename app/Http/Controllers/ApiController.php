<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Demand_setting;


class ApiController extends Controller
{
    public function demand()
    {
        $last=Demand_setting::all() ->last();
        return response()->json($last->toJson());
    }

    public function geocoding()
    {
        $client = new Client();
        #$googleClient = Google::getClient();
        #$request = Request::create('https://maps.googleapis.com/maps/api/geocode/json?address=tainan&key=AIzaSyBJElK1Oartgr4lYVuNYTaO6GpTlKcXQxk', 'GET');
        $response = $client->get('https://maps.googleapis.com/maps/api/geocode/json?address=tainan&key=AIzaSyBJElK1Oartgr4lYVuNYTaO6GpTlKcXQxk');        
        return $response;
    }
}
