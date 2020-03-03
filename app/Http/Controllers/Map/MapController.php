<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use App\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MapController extends Controller
{
    protected $sk = "sk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZzMTNsZDEwMmZmM3FwZWF2eHRzNDhnIn0.BJQ6b4hKT0nLO8DAUTb0Fg";
    protected $pk = "pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g";
    protected $username = "leducan";    //default
    protected $base = "https://api.mapbox.com";
    public function index()
    {
        $maps = Map::paginate(10);
        return view('admin.map.index', compact('maps'));
    }
    public function create()
    {
        return view('admin.map.create');
    }
    public function fetchMap(Request $request)
    {
        if ($request->ajax()) {

            $rules = array(
                'mapStyle.*'  => 'required',
                'accessToken.*'  => 'required'
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json([
                    'error'  => $error->errors()->all()
                ]);
            }

            $mapStyle = $request->mapStyle;
            $accessToken = $request->accessToken;
            // for ($count = 0; $count < count($mapStyle); $count++) {
            //     $data = array(
            //         'mapStyle' => $mapStyle[$count],
            //         'accessToken'  => $accessToken[$count]
            //     );
            //     $insert_data[] = $data;
            // }
            //$insert_data[] = array("title" => $request->title);
            $styleInfo = explode("/", $mapStyle);
            $style_id = $styleInfo[4];
            $username = $styleInfo[3];
            $this->username = $styleInfo[3];
            $style = $this->getStyle($style_id);
            $style = json_decode($style);

            $send_back_data[] = compact('style', 'username', 'style_id', 'accessToken');

            return response()->json([
                'success'  => 'Data Added successfully.',
                'data' => $send_back_data
            ]);
        }
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
    public function create2()
    {
        return view('admin.map.create2');
    }
    public function create2ajax(Request $request)
    {
        if ($request->ajax()) {

            $rules = array(
                'mapStyle.*'  => 'required',
                'accessToken.*'  => 'required'
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json([
                    'error'  => $error->errors()->all()
                ]);
            }

            $mapStyle = $request->mapStyle;
            $accessToken = $request->accessToken;
            for ($count = 0; $count < count($mapStyle); $count++) {
                $data = array(
                    'mapStyle' => $mapStyle[$count],
                    'accessToken'  => $accessToken[$count]
                );
                $insert_data[] = $data;
            }
            //$insert_data[] = array("title" => $request->title);
            $title = $request->title;
            $address = $request->address;
            $city = $request->city;

            $send_back_data[] = compact('title', 'address', 'city', 'insert_data');
            print_r($send_back_data);
            //DynamicField::insert($insert_data);         //for model
            return response()->json([
                'success'  => 'Data Added successfully.'
            ]);
        }
    }
    public function edit($id)
    {
        $map = Map::find($id);
        //dd($map);
        return view('admin.map.edit')->with(compact('map'));
    }
    public function update(Request $request)
    {
        $map = Map::find($request->id);
        $map->title = $request->title;
        $map->address = $request->address;
        $map->city = $request->city;
        $map->map_style = $request->mapStyle;
        $map->access_token = $request->accessToken;
        $map->save();
        return redirect()->route('map.index');
    }
    public function store(Request $request)
    {
        $map = new Map();
        $map->title = $request->title;
        $map->address = $request->address;
        $map->city = $request->city;
        $map->map_style = $request->mapStyle;
        $map->access_token = $request->accessToken;

        $map->save();
        return redirect()->route('map.index');
    }
    public function destroy($id)
    {
        $map = Map::find($id);
        dd($map);
        $map->delete();
        return redirect()->route('map.index');
    }
}
