<?php

use App\Tier;
use Illuminate\Database\Seeder;

class TairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        new Tier(['name' => 'Common', 'description' => 'tier description']);
        new Tier(['name' => 'Rare', 'description' => 'tier description']);
        new Tier(['name' => 'Super Rare', 'description' => 'tier description']);
        new Tier(['name' => 'Mythic', 'description' => 'tier description']);
        new Tier(['name' => 'Epic', 'description' => 'tier description']);
        new Tier(['name' => 'Legendary', 'description' => 'tier description']);
    }
}
