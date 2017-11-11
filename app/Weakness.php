<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weakness extends Model
{
    // belong to brawler
    public function brawler()
    {
        return $this->belongsTo(Brawler::class);
    }
}
