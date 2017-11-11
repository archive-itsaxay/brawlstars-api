<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    // belong to mode
    public function mode()
    {
        return $this->belongsTo(Mode::class);
    }
}
