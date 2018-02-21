<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BrawlerResource extends Resource
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
            'type' => $this->type->name,
            'tier' => $this->tier->name,
            'speed' => $this->speed . ' tiles per second',
            'hitpoints' => $this->hitpoints,
            'image' => $this->image,
            'thumb_image' => $this->thumb_image,
            'link' => route('brawlers.show', $this->slug)
        ];
    }
}
