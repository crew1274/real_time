<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Demand_setting;

class DemandController extends Controller
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
        $last=Demand_setting::all() ->last();
        return view('demand',compact('last'));
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
    public function store( Request $request)
    {
        $this->validate($request, [
            'value' => 'required|integer',
            'value_max' => 'required|integer',
            'value_min' => 'required|integer',
            'mode' => 'required',
            'load_off_gap' => 'required',
            'reload_delay' => 'required',
            'reload_gap' => 'required',
            'group' => 'required',
        ]);

        Demand_setting::create($request->all());
        return redirect('demand')
            ->with('success','設定更新成功!');
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
        //
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
