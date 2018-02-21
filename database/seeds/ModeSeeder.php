<?php

use App\Mode;
use Illuminate\Database\Seeder;

class ModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        new Mode(['name' => 'Boss Fight', 'slug' => 'boss_fight',
            'description' => 'Boss fight mode',
            'image' => 'boss_fight.png']);

        new Mode(['name' => 'Bounty', 'slug' => 'bounty',
            'description' => 'Bounty is a 3 vs 3 game mode where kills are what matters. No objectives, aside from having more points than your opponent when the 2 minute 30 second round timer runs out. Points are obtained by killing enemy brawlers. As you rack up the kills, your brawler becomes more and more wanted, earning an additional star for each kill obtained without dying. Brawlers become “Most Wanted” at 7 stars. When a brawler dies, however many stars he is worth will be awarded in points to the team that kills him. Don’t get too confident if you’re in the lead, because quite often a team may dominate for the majority of the round. A key kill or two on high value targets can quickly even the score.',
            'image' => 'bounty.png']);

        new Mode(['name' => 'Brawl Ball', 'slug' => 'brawl_ball',
            'description' => 'Score goals with your team to win this contest. Will operate just like Soccer, with two goals to win.',
            'image' => 'brawl_ball.png']);

        new Mode(['name' => 'Heist', 'slug' => 'heist',
            'description' => 'Two teams of 3 go head to head on a Heist of gems! One team tries to defend a safe located in their spawn, while the other team tries to open it. To open the safe, the attacking team must traverse across the map into the enemy spawn, and shoot the heavily fortified safe until it is destroyed, and the gems come raining down. If the defending team can protect the safe for the duration of the round, it will be declared the winner!',
            'image' => 'heist.png']);

        new Mode(['name' => 'Robo Rumble', 'slug' => 'robo_rumble',
            'description' => 'robo rumble description',
            'image' => 'robo_rumble.png']);

        new Mode(['name' => 'Showdown', 'slug' => 'showdown',
            'description' => 'Showdown is a departure from the team-based play of Brawl Stars. Ten brawlers are placed into an oversized map where they’ll battle for power ups. Each power up will increase a brawler’s hit points and attack power. Win the game by outlasting all other opponents! Camping on the outskirts won’t work, as gas from the edges of the map collapses inward, forcing the brawlers to engage with one another until a champion is crowned!',
            'image' => 'showdown.png']);

        new Mode(['name' => 'Smash & Gran', 'slug' => 'smash_grab',
            'description' => 'A gem mine in the center of a small arena spawns a gem every few seconds. Teams of 3 will work together to control the gems and keep them away from their opponent. Each gem collected by a brawler will stay with that brawler until victory… or until their death. If a brawler dies, the gems he is carrying will spill onto the battlefield and become fair game for any player to pick up. The game is won when one team controls at least 10 gems for at least 16 seconds. This game mode is known for crazy swings of momentum in the closing seconds of the battle!',
            'image' => 'smash_grab.png']);

    }
}
