<?php

use App\Type;
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
        Type::create(['name' => 'Ranged', 'description' => 'brawler type']);
        Type::create(['name' => 'Melee', 'description' => 'brawler type']);
    }
}
