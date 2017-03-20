<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Demand_setting;
use App\Location;


class ApiController extends Controller
{
    public function demand()
    {
        $last=Demand_setting::all() ->last();
        return response()->json($last->toJson());
    }

    public function geocoding()
    {
        $location = Location::all() -> last();
       /*if($location==null)
        {return null;}*/
        $client = new Client();
        /*透過google api取得經緯度*/      
        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address=台南市東區&key='.env('GOOGLE_API_KEY'), ['verify' => false]);
        $response = json_decode($response->getBody(), true);
        //$location = $response["status"];
        $location = $response["results"][0]['geometry']["location"];
        $location = json_encode($location, true);
        return $location;
    }

    public function suntime()
    {
        $location = Location::all() -> last();
        if($location==null)
        {return null;}
        $client = new Client();
        /*透過google api取得經緯度*/  
        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address='.$location->address.'&key='.env('GOOGLE_API_KEY'), ['verify' => false]);
        $response = json_decode($response->getBody(), true);
        
        $sunset = date_sunset(time(), SUNFUNCS_RET_STRING, $response["results"][0]['geometry']["location"]['lat'], $response["results"][0]['geometry']["location"]['lng'], 90, $location->utc);
        $sunrise = date_sunrise(time(), SUNFUNCS_RET_STRING,  $response["results"][0]['geometry']["location"]['lat'], $response["results"][0]['geometry']["location"]['lng'], 90, $location->utc);
        return ['sunrise' => $sunrise,'sunset'=>$sunset];
    }
}
