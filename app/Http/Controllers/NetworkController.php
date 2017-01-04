<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index()
    {
        return view('network');
    }

    public function wifi(Request $request)
    {
        $this->validate($request, [
          'name' => 'required|',
          'password' => 'required|',
        ]);
        $name = $request -> get('name');
        $password = $request -> get('password');

        $output = array();
        exec("echo '' | sudo -S python3 /var/www/html/dae_client/python/InternetSetting.py  3  '$name' '$password' ", $output);
        $output=last($output);
        return view('/')->with('success',$output);
    }

    public function dhcp_()
    {
        $output = array();
        exec("echo '' | sudo -S python3 /var/www/html/dae_client/python/InternetSetting.py  1 ", $output);
        $output=last($output);
        return view('network')->with('success', $output);
    }

    public function staticip()
    {
        $wan = $request -> get('wan');
        $dns = $request -> get('dns');
        $gateway = $request -> get('gateway');
        $mask = $request -> get('mask');
        $output = array();
        exec("echo '' | sudo -S python3 /var/www/html/dae_client/python/InternetSetting.py  2  '$wan' '$mask'  '$gateway' '$dns'", $output);
        $output=last($output);
        return view('network')->with('success', $output);
    }
}
