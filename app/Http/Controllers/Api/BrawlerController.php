<?php

namespace App\Http\Controllers\Api;

use App\Brawler;
use App\Http\Controllers\Controller;
use App\Http\Resources\BrawlerResource;
use Illuminate\Support\Facades\Response;

class BrawlerController extends Controller
{
    // list all brawlers
    public function index()
    {
        $brawlers = Brawler::all();

        return BrawlerResource::collection($brawlers);
    }

    // show brawler by name
    public function show($slug)
    {

        $brawler = Brawler::where('slug', $slug)->first();

        if (!$brawler) {
            return Response::json(['status' => 'error', 'message' => 'Not found', 'code' => 404]);
        }

        return new BrawlerResource($brawler);
    }
}
