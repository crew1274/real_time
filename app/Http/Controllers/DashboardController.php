<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
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
        $chart= Charts::realtime(route('random_data'), 3000, 'line', 'highcharts')
            ->responsive(true)
            ->elementLabel("需量")
            ->height(300)
            ->width(0)
            ->title("需量即時監控")
            ->valueName('value')
            ->maxValues(30);
        
        $location = Location::all() -> last();
        if($location==null)
        {$sunset = '尚未設定';
         $sunrise = '尚未設定';
         $rawOffset = '尚未設定';
         $timeZoneId= '尚未設定';
        }
        else{
        $timeZoneId=$location->timeZoneId;
        $rawOffset=$location->rawOffset/3600;
        $sunset = date_sunset(time(), SUNFUNCS_RET_STRING, $location->lat, $location->lng, 90, $rawOffset);
        $sunrise = date_sunrise(time(), SUNFUNCS_RET_STRING, $location->lat, $location->lng, 90, $rawOffset);
        }
        return view('dashboard', ['chart' => $chart,'rawOffset'=> $rawOffset,'timeZoneId'=> $timeZoneId, 'sunset' => $sunset,'sunrise'=>$sunrise]);
    }

    public function documentation()
    {
        $path = storage_path('app/public/documentation.pdf');
        return response()->file($path);
    }
}
