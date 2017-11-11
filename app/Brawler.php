<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brawler extends Model
{
    // has one type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    // has one tier
    public function tier()
    {
        return $this->belongsTo(Tier::class);
    }

    // has many updates
    public function updates()
    {
        return $this->hasMany(Brawler::class);
    }

    // has many tips
    public function tips()
    {
        return $this->hasMany(Brawler::class);
    }

    // has many abilities
    public function abilities()
    {
        return $this->hasMany(Brawler::class);
    }

    // has many strengths
    public function strengths()
    {
        return $this->hasMany(Brawler::class);
    }

    // has many weaknesses
    public function weaknesses()
    {
        return $this->hasMany(Brawler::class);
    }

}
