<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModeResource;
use App\Mode;
use Illuminate\Support\Facades\Response;

class ModeController extends Controller
{
    // list all modes
    public function index()
    {
        $modes = Mode::all();

        return ModeResource::collection($modes);
    }

    // show mode by name
    public function show($slug)
    {

        $mode = Mode::where('slug', $slug)->first();

        if (!$mode) {
            return Response::json(['status' => 'error', 'message' => 'Not found', 'code' => 404]);
        }

        return new ModeResource($mode);
    }
}
