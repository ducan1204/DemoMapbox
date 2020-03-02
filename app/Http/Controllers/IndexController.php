<?php

namespace App\Http\Controllers;

use App\Map;
use BlueVertex\MapBoxAPILaravel\Facades\Mapbox;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IndexController extends Controller
{
    protected $sk = "sk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZzMTNsZDEwMmZmM3FwZWF2eHRzNDhnIn0.BJQ6b4hKT0nLO8DAUTb0Fg";
    protected $pk = "pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g";
    protected $username = "leducan";    //default
    protected $base = "https://api.mapbox.com";
    public function getListStyles()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL =>  $this->base . "/styles/v1/" . $this->username . "?access_token=" . $this->sk,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        //dd($response);
        $err = curl_error($curl);
        curl_close($curl);
        return $response;
    }
    public function getStyle($id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL =>  $this->base . "/styles/v1/" . $this->username . "/" . $id . "?access_token=" . $this->pk,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        //dd($response);
        $err = curl_error($curl);
        //dd($err);
        curl_close($curl);
        return $response;
    }
    public function land()
    {
        $styles = Map::paginate(10);
        //$data = $this->getListStyles();       // original
        //$styles = json_decode($data, true);   // original
        return view('quyhoach', compact('styles'));
    }
    public function detail(Request $request)
    {
        //get selected map
        $map = Map::find($request->id);
        //explode string
        $styleInfo = explode("/", $map->map_style);
        //get style_id
        $style_id = $styleInfo[4];
        //get username
        $username = $styleInfo[3];
        $this->username = $styleInfo[3];
        $this->pk = $map->access_token;
        //get Style through curl
        $style = $this->getStyle($style_id);
        //dd($map->created_at);
        $time = Carbon::parse($map->created_at)->format('Y-m-d H:m:s');

        $style = json_decode($style);
        //dd($style);
        //$style->created = Carbon::parse($style->created)->format('Y-m-d H:m:s');
        return view('chitiet', compact('style', 'map', 'username', 'style_id', 'time'));
    }
}
