<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class MapResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'map' => $this->mode->name
        ];
    }
}
