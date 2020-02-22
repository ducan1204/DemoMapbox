<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        return view('admin.map.index');
    }
    public function create()
    {
        return view('admin.map.create');
    }
}
