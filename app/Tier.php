<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    // has many brawlers
    public function brawlers()
    {
        return $this->hasMany(Brawler::class);
    }
}
