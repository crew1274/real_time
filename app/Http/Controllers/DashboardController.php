<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Demand_record;
use Charts;

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
        return view('dashboard', ['chart' => $chart]);
    }

    public function documentation()
    {
        $path = storage_path('app\documentation.pdf');
        return response()->file($path)->header('documentation');
    }
}
