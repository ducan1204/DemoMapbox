<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use App\Map;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class MapController extends Controller
{
    public function index()
    {
        $maps = Map::all();
        return view('admin.map.index', compact('maps'));
    }
    public function create()
    {
        return view('admin.map.create');
    }
    public function create2()
    {
        return view('admin.map.create2');
    }
    public function create2ajax(Request $request)
    {
        dd('a');
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
            $last_name = $request->last_name;
            for ($count = 0; $count < count($first_name); $count++) {
                $data = array(
                    'first_name' => $first_name[$count],
                    'last_name'  => $last_name[$count]
                );
                $insert_data[] = $data;
            }

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
