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
        /*透過google api取得經緯度*/
        $client = new Client();
        #$response = $client->get('http://works.ioa.tw/weather/api/towns/1.json');        
        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address=台南&key=AIzaSyBJElK1Oartgr4lYVuNYTaO6GpTlKcXQxk', ['verify' => false]);
        #$response = $client->get('https://maps.googleapis.com/maps/api/geocode/json?address=tainan&key=AIzaSyBJElK1Oartgr4lYVuNYTaO6GpTlKcXQxk',['verify' => false]);        
        $response = json_decode($response->getBody(), true);
        $location=$response["results"][0]['geometry']["location"];
        $location = json_encode($location, true);
        return $location;
    }

    public function suntime()
    {
        $sunset=date_sunset(time(), SUNFUNCS_RET_STRING, 22.9997281, 120.2270277, 90, 8);
        $sunrise=date_sunrise(time(), SUNFUNCS_RET_STRING, 22.9997281, 120.2270277, 90, 8);
        return ['sunrise' => $sunrise,'sunset'=>$sunset];
    }
}
