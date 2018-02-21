<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{

    protected $timestamp = false;

    protected $fillable = [
        'name', 'description'
    ];

    // has many brawlers
    public function brawlers()
    {
        return $this->hasMany(Brawler::class);
    }
}
