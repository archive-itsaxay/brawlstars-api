<?php

use App\Brawler;
use Illuminate\Database\Seeder;

class BrawlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        new Brawler(['name' => 'Barley', 'slug' => 'barley',
            'description' => 'Barley is a long range attacker with a strong area of effect attacks. He can deal a lot of damage over time with both his regular attack and his super.',
            'image' => 'barley.png', 'thumb_image' => 'barley.png',
            'type_id' => '1', 'tier_id' => '2',
            'speed' => '2.5', 'hitpoints' => '2400', 'range_map' => '6.5'
        ]);
        new Brawler(['name' => 'Bo', 'slug' => 'bo',
            'description' => 'Bo thrives in guerilla warfare and can poke from range and destroy enemies with his hidden mines.',
            'image' => 'bo.png', 'thumb_image' => 'bo.png',
            'type_id' => '1', 'tier_id' => '3',
            'speed' => '2.5', 'hitpoints' => '2100', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Brock', 'slug' => 'brock',
            'description' => 'Brock is great for those who are happy to affect a fight from a distance. He’s great for establishing early position, and keeping enemies away from key objectives & choke points. Brock is weak and can be destroyed easily, so if the fight comes to him, be prepared to use his Super ability to take down any aggressor. Brock’s Super ability works nicely to open up line of sight to the enemies and reduce the places they can hide from his rockets.',
            'image' => 'brock.png', 'thumb_image' => 'brock.png',
            'type_id' => '1', 'tier_id' => '2',
            'speed' => '2.5', 'hitpoints' => '2800', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Bull', 'slug' => 'bull',
            'description' => 'Bull is the high health version of Shelly, except that Bull has a shorter range with his shotgun and also a super that can be used to gap close on running foes or to use it to escape.',
            'image' => 'bull.png', 'thumb_image' => 'bull.png',
            'type_id' => '2', 'tier_id' => '2',
            'speed' => '2.5', 'hitpoints' => '4800', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Colt', 'slug' => 'colt',
            'description' => 'Colt is the all-American character. Unfortunately, he isn’t all that great. Colt can be very difficult to get all of your bullets to go where you’d like them to, and he lacks many of the utilities that other Brawlers offer. But there’s an owner for everyone, and even Colt will find someone who can strike fear in the hearts of others when they’re at his controls.',
            'image' => 'colt.png', 'thumb_image' => 'colt.png',
            'type_id' => '1', 'tier_id' => '1',
            'speed' => '2.5', 'hitpoints' => '2800', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Crow', 'slug' => 'crow',
            'description' => 'Crow is a long range attacker that thrives in prolonged battles.',
            'image' => 'crow.png', 'thumb_image' => 'crow.png',
            'type_id' => '1', 'tier_id' => '6',
            'speed' => '2.8', 'hitpoints' => '2400', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Darryl', 'slug' => 'darryl',
            'description' => 'Darryl is the latest in the Brawl Stars family of robots. He his hard from close range, but his damage quickly falls off as the target drifts further away from him. Darryl is great at putting out a ton of pressure, and can very quickly force opponents off of their position due to his relatively high hit points & high damage output in close quarter combat. Where Darryl shines is his ability to use the super ability to surprise enemy brawlers - His super is the longest range in the game and when he catches unsuspecting enemies in a narrow corridor, he can inflict massive damage by ricocheting off the walls to land multiple blows.',
            'image' => 'darryl.png', 'thumb_image' => 'darryl.png',
            'type_id' => '2', 'tier_id' => '3',
            'speed' => '2.5', 'hitpoints' => '4400', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Dynamike', 'slug' => 'dynamike',
            'description' => 'Dynamike does a pretty fair amount of direct damage to areas on the battlefield. This can be very useful as a support player, especially in objective based game modes like Heist & Smash & Grab. He can deal loads of damage to grouped up opponents, and he can control an area very well provided that he has distractions (like his teammates) in the area, but the second Dynamike is alone… it gets very lonely for him. Like a bleeding fish in shark infested waters, he will quickly be pressured and overcome by force. Dynamike has very similar abilities to Barley, who in most cases is the superior area splash character. Check out Barley’s guide also!',
            'image' => 'dynamike.png', 'thumb_image' => 'dynamike.png',
            'type_id' => '1', 'tier_id' => '1',
            'speed' => '2.5', 'hitpoints' => '2800', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'El Primo', 'slug' => 'el_primo',
            'description' => 'For a common character, El Primo is just about as strong as it gets. He’s a very easy character to get the hang of. Simply slap and punch targets that are next to you. Simply enough right? Of course there are nuances to learn, but for the most part, he is a character that you can be competitive with right away in every game mode. His versatility between game modes make him a top choice for players who’d like to consider El Primo their ‘main’ brawler.',
            'image' => 'el_primo.png', 'thumb_image' => 'el_primo.png',
            'type_id' => '2', 'tier_id' => '1',
            'speed' => '2.5', 'hitpoints' => '5600', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Jessie', 'slug' => 'jessie',
            'description' => 'Jessie is a very well rounded brawler that can provide excellent support to her teammates in a variety of game modes. Her super ability is not to be underestimated. One of the best things about Jessie is that none of her abilities seem really strong, so she flies under the radar a bit as far as being a target that enemies feel they need to focus down. She doesn’t do anything EXTREMELY well, but she does almost ALL things well, and this makes her one of the most reliable choices for Brawlers. In capable hands, the skill cap of Jessie is VERY high and this brawler can really have a high impact for a skilled player.',
            'image' => 'jessie.png', 'thumb_image' => 'jessie.png',
            'type_id' => '1', 'tier_id' => '2',
            'speed' => '2.5', 'hitpoints' => '2800', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Mortis', 'slug' => 'mortis',
            'description' => 'Mortis is a melee attacker that can gap close on long range Brawlers. His super allows him to heal his health back. He is a strong Brawler to use for Smash & Grab.',
            'image' => 'mortis.png', 'thumb_image' => 'mortis.png',
            'type_id' => '2', 'tier_id' => '4',
            'speed' => '2.5', 'hitpoints' => '2800', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Nita', 'slug' => 'nita',
            'description' => 'Nita is a fantastic character, and a staple in many team compositions on almost every map & mode. Her bear can be overwhelming to opponents, and it’s a MUST to deal with it, or else the bear will force them into bad positions OR hit them enough to generate another Super for Nita - you find yourself playing in 4 on 3 situations more often than not. Perhaps the greatest utility player in the game that can also do other things very well also, with no glaring weaknesses.',
            'image' => 'nita.png', 'thumb_image' => 'nita.png',
            'type_id' => '2', 'tier_id' => '1',
            'speed' => '2.5', 'hitpoints' => '3200', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Pam', 'slug' => 'pam',
            'description' => 'Pam is a very good team healer that is very useful in coordinated team battles. Her super allows her to heal teammates in the designated circle.',
            'image' => 'pam.png', 'thumb_image' => 'pam.png',
            'type_id' => '2', 'tier_id' => '5',
            'speed' => '2.5', 'hitpoints' => '4000', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Piper', 'slug' => 'piper',
            'description' => 'Piper is a long ranged sniper that does more damage the further she is. She thrives in maps where there are a lot of obstacles where it allows her to hide.',
            'image' => 'piper.png', 'thumb_image' => 'piper.png',
            'type_id' => '1', 'tier_id' => '5',
            'speed' => '2.5', 'hitpoints' => '2400', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Poco', 'slug' => 'poco',
            'description' => 'Poco is great at poking Brawlers with short range. His super heals allies in range, allowing to last longer in prolonged battles.',
            'image' => 'poco.png', 'thumb_image' => 'poco.png',
            'type_id' => '1', 'tier_id' => '3',
            'speed' => '2.5', 'hitpoints' => '3200', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Ricochet', 'slug' => 'ricochet',
            'description' => 'Ricochet is a long range Brawler that utilizes bouncing bullets to take down his foes. He does well in maps with plenty of narrow walls such as Bounty and Smash and Grab. He is all about geometry!',
            'image' => 'ricochet.png', 'thumb_image' => 'ricochet.png',
            'type_id' => '1', 'tier_id' => '3',
            'speed' => '2.5', 'hitpoints' => '2800', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Shelly', 'slug' => 'shelley',
            'description' => 'Shelly is not only the very first character unlocked, but also one of the easiest to play in my opinion. In addition to being able to do very well with Shelly in the first ever game with her, she’s a beast in 1 on 1 situations, and can even overpower entire teams if they’re foolish enough to group up for her. Shelly is an extremely versatile brawler that can make a significant impact in the majority of the game modes. She’ll make a great addition to nearly any team.',
            'image' => 'shelly.png', 'thumb_image' => 'shelley.png',
            'type_id' => '1', 'tier_id' => '1',
            'speed' => '2.5', 'hitpoints' => '3200', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Spike', 'slug' => 'spike',
            'description' => 'Spike thrives at slowing down enemies and give your team an advantage at battles with his area of effect slow attacks.',
            'image' => 'spike.png', 'thumb_image' => 'spike.png',
            'type_id' => '1', 'tier_id' => '6',
            'speed' => '2.5', 'hitpoints' => '2400', 'range_map' => '8'
        ]);
        new Brawler(['name' => 'Tara', 'slug' => 'tara',
            'description' => 'Tara is a mid range attacker with a powerful super that acts like a black hole that sucks everyone that is caught in the center of her super. She is very valuable in team oriented modes and can turn the tide with her super alongside other nasty area of effect attacks.',
            'image' => 'tara.png', 'thumb_image' => 'tara.png',
            'type_id' => '1', 'tier_id' => '4',
            'speed' => '2.5', 'hitpoints' => '3200', 'range_map' => '8'
        ]);

    }
}
