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
        new Tier(['name' => 'Ranged', 'description' => 'brawler type']);
        new Tier(['name' => 'Melee', 'description' => 'brawler type']);
    }
}
