<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Location;

class LocationController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = Location::all() -> last();
        /*
        if($location== null)
        { return view('auth.location_create');}
        else
        {return view('auth.location_update',compact('location'));}
        */
        return view('auth.location',compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'address' => 'bail|required|string',
        ]);
        $client = new Client();
        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address='.$request->address.'&key='.env('GOOGLE_API_KEY'), ['verify' => false]);
        $response = json_decode($response->getBody(), true);
        if($response[status] != 'OK')
        {
            return redirect()->action('LocationController@index') ->with('errors','無法確認地址的正確位置');
        }
        $request->lat = $response["results"][0]['geometry']["location"]['lat'];
        $request->lng = $response["results"][0]['geometry']["location"]['lat'];
        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address='.$request->address.'&key='.env('GOOGLE_API_KEY'), ['verify' => false]);
        Location::create($request->all());
        return redirect()->action('DashboardController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
