<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mode extends Model
{
    // has many maps
    public function maps()
    {
        return $this->hasMany(Map::class);
    }
}
