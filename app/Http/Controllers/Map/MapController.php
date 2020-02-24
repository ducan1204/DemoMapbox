<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use App\Map;
use Illuminate\Http\Request;


class MapController extends Controller
{
    public function index()
    {
        $maps = Map::all();
        return view('admin.map.index', compact('maps'));
    }
    public function create()
    {
        return view('admin.map.create2');
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
