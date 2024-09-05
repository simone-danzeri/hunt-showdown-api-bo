<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Map;

class MapController extends Controller
{
    public function index() {
        $maps = Map::all();
        return response()->json([
            "success" => true,
            "results" => $maps
        ]);
    }
}
