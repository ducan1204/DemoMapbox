<?php

namespace App\Http\Controllers;

use BlueVertex\MapBoxAPILaravel\Facades\Mapbox;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function land()
    {
        //$list = Mapbox::datasets()->list();
        //dd($list);
        // $response = Mapbox::uploads()->credentials();
        // dd($response);
        return view('quyhoach');
    }
    public function detail(Request $request)
    {
        $style = $request->id;
        $long = $request->long;
        $lat = $request->lat;
        $zoom = $request->zoom;
        //dd($zoom);
        return view('chitiet')->with(compact('style', 'long', 'lat', 'zoom'));
    }
}
