<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

use App\Setting;
use App\Code;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $settings = Setting::orderBy('circuit','ASC')->paginate(4);
        return view('setting',compact('settings'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models= Code::pluck('model', 'model');
        return view('setting_new',compact('models'));
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
            'model' => 'required|string',
            'address' => 'required|integer|min:1|max:255',
            'ch' => 'required|integer|min:1|max:15',
            'speed' => 'required|integer',
            'circuit' => 'required|integer|min:1|max:72|unique:settings,circuit',
        ]);
        Setting::create($request->all());
        return redirect()->route('boot.index')
                        ->with('success','Setting created successfully, but please valid before you use.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = Setting::find($id);
        $setting_id= $setting -> id ;
        $output = array();
        exec("python3 /var/www/html/dae_client/python/valid.py '{$setting_id}' ", $output);
        $output=last($output);
        return redirect()->route('boot.index')
                        ->with('success',$output);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $models= Code::pluck('model', 'model');
        $setting = Setting::find($id);
        return view('setting_edit',compact('setting','models'));
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
        $this->validate($request, [
         'model' => 'required',
         'address' => 'required|integer|min:1|max:255',
         'ch' => 'required|integer|min:1|max:15',
         'speed' => 'required',
         'circuit' => 'required|integer|min:1|max:72|unique:settings,circuit,'.$id,
       ]);
       $token = Setting::find($id);
       $token-> token = '0';
       $token -> save();
       Setting::find($id)->update($request->all());
       return redirect()->route('boot.index')
                       ->with('success','Setting updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Setting::find($id)->delete();
        return redirect()->route('boot.index')
                      ->with('success','Setting deleted successfully!');
    }
}
