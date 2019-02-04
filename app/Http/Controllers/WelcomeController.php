<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $response = [
            'message' => 'Welcome to Brawl Stars Api!',
            'endpoints' => [
                'brawlers' => route('brawlers.index'),
                'modes' => route('modes.index'),
                'maps' => route('maps.index'),
            ],
            'version' => '1.0.0',
            'lastUpdate' => '04 Feb, 2019'
        ];

        return Response::json($response);
    }
}
