<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MapResource;
use App\Map;
use Illuminate\Support\Facades\Response;

class MapController extends Controller
{
    // list all maps
    public function index()
    {
        $maps = Map::all();

        return MapResource::collection($maps);
    }

    // show map by name
    public function show($slug)
    {

        $map = Map::where('slug', $slug)->first();

        if (!$map) {
            return Response::json(['status' => 'error', 'message' => 'Not found', 'code' => 404]);
        }

        return new MapResource($map);
    }
}
