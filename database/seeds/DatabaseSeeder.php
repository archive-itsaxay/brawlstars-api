<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeSeeder::class);
        $this->call(TierSeeder::class);
        $this->call(BrawlerSeeder::class);
        $this->call(ModeSeeder::class);
        $this->call(MapSeeder::class);
    }
}
