# Checkout Laravel Package For BrawlStars API
[Laravel Brawlstars](https://github.com/itsaxay/laravel-brawlstars)

# Brawl Stars API

A Brawl Stars API that provides information about the game.

## How to use?

Consume the API to get all the information you need from these routes.

### Endpoints

[Api Base route: http://brawlapi.appdemo.in](http://brawlapi.appdemo.in).

| Route | HTTP Verb | Description |
|---|---|---|
| [`/api/brawlers`][1] | `GET` | All Brawlers information |
| `/api/brawlers/:slug` | `GET` | Single Brawler information |
| [`/api/modes`][2] | `GET` | All Modes information |
| `/api/modes/:slug` | `GET` | Single Mode information |
| [`/api/maps`][3] | `GET` | All Maps information |
| `/api/maps/:slug` | `GET` | Single Map information |

[1]: http://brawlapi.appdemo.in/api/brawlers
[2]: http://brawlapi.appdemo.in/api/modes
[3]: http://brawlapi.appdemo.in/api/maps

### Images

[Images Base route: http://brawlimages.appdemo.in](http://brawlimages.appdemo.in).

You can get the images too!

| Route | Description |
|---|---|
| [`/brawlers/images/${slug}.png`][4] | Brawlers images |
| [`/brawlers/thumbs/${slug}.png`][5] | Brawlers thumb images |
| [`/modes/${slug}.jpg`][6] | Modes images |
| [`/maps/${slug}.png`][7] | Maps images |

[4]: http://brawlimages.appdemo.in/brawlers/images/tara.png
[5]: http://brawlimages.appdemo.in/brawlers/thumb/tara.png
[6]: http://brawlimages.appdemo.in/modes/bounty.jpg
[7]: http://brawlimages.appdemo.in/maps/death_valley.png

## Want to help?

If you like the API, please star this repository.

If you create an app using the API, please mention this repository and add it in the table.

If you want to contribute to the API, feel free to create a pull request.

If you :heart: the API, [help me pay the hosting](https://buymeacoffee.com/axaygadekar)!

Made with  :heart:  by clash fans.

----------
This content is not affiliated with, endorsed, sponsored, or specifically approved by Supercell and Supercell is not responsible for it. For more information see [Supercell’s Fan Content Policy](http://www.supercell.com/fan-content-policy).
