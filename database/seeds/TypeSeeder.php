<?php

use App\Tier;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tier::create(['name' => 'Ranged', 'description' => 'brawler type']);
        Tier::create(['name' => 'Melee', 'description' => 'brawler type']);
    }
}
