<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Demand_record;
use Charts;
use App\Location;

class DashboardController extends Controller
{
    public function __construct()
    {
     $this->middleware('auth');
    }

    public function index()
    {
        $chart= Charts::realtime(route('real_data'), 3000, 'line', 'highcharts')
            ->responsive(true)
            ->elementLabel("需量")
            ->height(300)
            ->width(0)
            ->title("需量即時監控")
            ->valueName('value')
            ->maxValues(30);
        
        $location = Location::all() -> last();
        $client = new Client();
        /*透過google api取得經緯度*/  
        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address='.$location->city.'&key='.env('GOOGLE_API_KEY'), ['verify' => false]);
        $response = json_decode($response->getBody(), true);
        $sunset = date_sunset(time(), SUNFUNCS_RET_STRING, $response["results"][0]['geometry']["location"]['lat'], $response["results"][0]['geometry']["location"]['lng'], 90, $location->utc);
        $sunrise = date_sunrise(time(), SUNFUNCS_RET_STRING,  $response["results"][0]['geometry']["location"]['lat'], $response["results"][0]['geometry']["location"]['lng'], 90, $location->utc);
        
        return view('dashboard', ['chart' => $chart, 'sunset' => $sunset,'sunrise'=>$sunrise]);
    }

    public function documentation()
    {
        $path = storage_path('app/public/documentation.pdf');
        return response()->file($path);
    }
}
