<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
        'mode_id', 'name', 'slug', 'description', 'image'
    ];

    // belong to mode
    public function mode()
    {
        return $this->belongsTo(Mode::class);
    }
}
