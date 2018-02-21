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
            'mode' => ['name' => $this->mode->name, 'link' => route('modes.show', $this->mode->slug)],
            'link' => route('maps.show', $this->slug)
        ];
    }
}
