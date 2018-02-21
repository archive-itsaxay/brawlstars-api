<?php

use App\Map;
use Illuminate\Database\Seeder;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Map::create(['mode_id' => '4', 'name' => 'G. G. Corral', 'slug' => 'gg_corral',
            'description' => 'map',
            'image' => 'gg_corral.png']);
        Map::create(['mode_id' => '4', 'name' => 'Bandit Stash', 'slug' => 'bandit_stash',
            'description' => 'Bandit Stash is a map with a fully guarded crystal box with 3 walls. Bring wall breakers for this map, be it offense or defense...',
            'image' => 'bandit_stash.png']);
        Map::create(['mode_id' => '4', 'name' => 'Kaboom Canyon', 'slug' => 'kaboom_canyon',
            'description' => 'This map has 2 small entrances and 3 walls that can be broken through with any Brawler that has supers that can break walls.',
            'image' => 'kaboom_canyon.png']);
        Map::create(['mode_id' => '4', 'name' => 'Safe Zone', 'slug' => 'safe_zone',
            'description' => 'Safe zone only has 1 entrance to the chest area, so you will want to bring Brawlers that can break walls to penetrate the side walls.',
            'image' => 'safe_zone.png']);

        Map::create(['mode_id' => '6', 'name' => 'Feast Or Famine', 'slug' => 'feast_famine',
            'description' => 'This map is a free for all Showdown that is much faster paced than the other ones due to the positioning being so close to each other. You will either want to grab the crystal boxes on the outskirts or go to the center where it is more dangerous...',
            'image' => 'feast_famine.png']);
        Map::create(['mode_id' => '6', 'name' => 'Skull Creek', 'slug' => 'skull_creek',
            'description' => 'Skull Creek has a unique layout that has a bit of rng required to do well. Spawning in various spots gain an advantage over others, especially the middle right side...',
            'image' => 'skull_creek.png']);
        Map::create(['mode_id' => '6', 'name' => 'Death Valley', 'slug' => 'death_valley',
            'description' => 'Death Valley is a rather large map with plenty of crystal boxes laying around the outskirts and also the center of the map.',
            'image' => 'death_valley.png']);
        Map::create(['mode_id' => '6', 'name' => 'Stormy Plains', 'slug' => 'stormy_plains',
            'description' => 'Stormy Plains has a lot of walls, making it tricky to pursue opponents when they can either run around the walls or hide in the bushes. Proceed with caution!',
            'image' => 'stormy_plains.png']);

        Map::create(['mode_id' => '1', 'name' => 'Calamity Canyon', 'slug' => 'calamity_canyon',
            'description' => 'map',
            'image' => 'calamity_canyon.png']);

        Map::create(['mode_id' => '2', 'name' => 'Start Gulch', 'slug' => 'star_gulch',
            'description' => 'This map has very little bushes and walls. This is great for people that just want a raw map to open fire without having to second guess where your enemies are.',
            'image' => 'star_gulch.png']);
        Map::create(['mode_id' => '2', 'name' => 'Snake Prairie', 'slug' => 'snake_prairie',
            'description' => 'Snake Prairie is a map mode with bushes around the entire map except for the center where the bounty star is. Make good use of the bushes to gain an advantage over your opponents.',
            'image' => 'snake_prairie.png']);
        Map::create(['mode_id' => '2', 'name' => 'Shooting Start', 'slug' => 'shooting_star',
            'description' => 'Shooting star is a map with plenty of wide open spots and not much bushes or walls.',
            'image' => 'shooting_star.png']);
        Map::create(['mode_id' => '2', 'name' => 'Outlaw Camp', 'slug' => 'outlaw_camp',
            'description' => 'Outlaw camp has a center full of bushes with 2 concrete walls on each side for protection. It is a fun map to brawl in, especially if you like hiding...',
            'image' => 'outlaw_camp.png']);
        Map::create(['mode_id' => '2', 'name' => 'Groundhog Burrow', 'slug' => 'groundhog_burrow',
            'description' => 'map',
            'image' => 'groundhog_burrow.png']);
        Map::create(['mode_id' => '2', 'name' => 'Temple Ruins', 'slug' => 'temple_ruins',
            'description' => 'The Temple of Ruins is a bounty map where there is a star in the center. The center of the map doesn\'t have any bushes, so you will not be able to hide easily. Map control of the center is key here, as you will want the option to battle or retreat to either the top/bottom side of the map. There are side bushes and 4 walls in the center, giving you a strategic way to play as a team. It is best recommended to use your side of the wall as defensive cover should you want to defend your lead.',
            'image' => 'temple_ruins.png']);
        Map::create(['mode_id' => '2', 'name' => 'Terracotta Square', 'slug' => 'terracotta_square',
            'description' => 'map',
            'image' => 'terracotta_square.png']);
        Map::create(['mode_id' => '2', 'name' => 'Cabbage Patch', 'slug' => 'cabbage_patch',
            'description' => 'This map has plenty of side bushes to hide and surprise your enemies. The bounty star at the center is up for grabs, but most people will be vulnerable to open fire.',
            'image' => 'cabbage_patch.png']);

        Map::create(['mode_id' => '7', 'name' => 'Bone Box', 'slug' => 'bone_box',
            'description' => 'Bone Box map features side bushes and a center with 4 corner walls. This opens up play for hiding behind the walls for cover and also gaining map control.',
            'image' => 'bone_box.png']);
        Map::create(['mode_id' => '7', 'name' => 'Temple Catacombs', 'slug' => 'temple_catacombs',
            'description' => 'map',
            'image' => 'temple_catacombs.png']);
        Map::create(['mode_id' => '7', 'name' => 'Deep Hollows', 'slug' => 'deep_hollows',
            'description' => 'map',
            'image' => 'deep_hollows.png']);
        Map::create(['mode_id' => '7', 'name' => 'Hard Rock Mine', 'slug' => 'hard_rock_mine',
            'description' => 'Hard Rock Mine has plenty of bushes you can retreat to should you gain control of many crystals. The center only has 1 wall & bush to avoid enemy attacks.',
            'image' => 'hard_rock_mine.png']);
        Map::create(['mode_id' => '7', 'name' => 'Crystal Cavern', 'slug' => 'crystal_cavern',
            'description' => 'Crystal Cavern is one of the more standard maps with walls and bushes close to the center. Use them to your advantage to get map control!',
            'image' => 'crystal_cavern.png']);
        Map::create(['mode_id' => '7', 'name' => 'Mushroom Cave', 'slug' => 'mushroom_cave',
            'description' => 'Mushroom cave has some walls and mushrooms in various areas to plan your strategy around control the map. Use those to your advantage.',
            'image' => 'mushroom_cave.png']);

        Map::create(['mode_id' => '3', 'name' => 'Backyard Bowl', 'slug' => 'backyard_bowl',
            'description' => 'map',
            'image' => 'backyard_bowl.png']);
        Map::create(['mode_id' => '3', 'name' => 'Pinhole Punt', 'slug' => 'pinhole_punt',
            'description' => 'map',
            'image' => 'pinhole_punt.png']);
        Map::create(['mode_id' => '3', 'name' => 'Triple Dribble', 'slug' => 'triple_dribble',
            'description' => 'map',
            'image' => 'triple_dribble.png']);

        Map::create(['mode_id' => '5', 'name' => 'Pachinko Park', 'slug' => 'pachinko_park',
            'description' => 'map',
            'image' => 'pachinko_park.png']);
    }
}
