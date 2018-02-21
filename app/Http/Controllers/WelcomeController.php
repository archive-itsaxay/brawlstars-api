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
            'lastUpdate' => '22 Feb, 2018'
        ];

        return Response::json($response);
    }
}
