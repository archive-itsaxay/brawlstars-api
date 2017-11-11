<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upgrade extends Model
{
    // belong to brawler
    public function brawler()
    {
        return $this->belongsTo(Brawler::class);
    }
}
