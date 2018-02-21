<?php

use App\Tier;
use Illuminate\Database\Seeder;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tier::create(['name' => 'Common', 'description' => 'tier description']);
        Tier::create(['name' => 'Rare', 'description' => 'tier description']);
        Tier::create(['name' => 'Super Rare', 'description' => 'tier description']);
        Tier::create(['name' => 'Mythic', 'description' => 'tier description']);
        Tier::create(['name' => 'Epic', 'description' => 'tier description']);
        Tier::create(['name' => 'Legendary', 'description' => 'tier description']);
    }
}
