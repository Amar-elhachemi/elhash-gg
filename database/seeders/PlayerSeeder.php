<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    public function run(): void
    {
        Player::truncate();

        $players = [

            [
                'nickname'=>'donk',
                'avatar' => 'players/donk.png',
                'real_name'=>'Danil Kryshkovets',
                'country'=>'RU',
                'team'=>'Team Spirit',
                'dpi'=>800,
                'sensitivity'=>1.25,
                'resolution'=>'1280x960',
                'refresh_rate'=>360,
                'mouse'=>'Logitech G Pro X Superlight 2',
                'keyboard'=>'Wooting 60HE',
                'monitor'=>'ZOWIE XL2566K',
                'crosshair' => 'CSGO-SG5dx-aAeRk-dnoAc-TwqMh-yTSFE',
            ],

            [
                'nickname'=>'m0NESY',
                'avatar' => 'players/m0NESY.png',
                'real_name'=>'Ilya Osipov',
                'country'=>'UA',
                'team'=>'Falcons',
                'dpi'=>400,
                'sensitivity'=>2.30,
                'resolution'=>'1280x960',
                'refresh_rate'=>360,
                'mouse'=>'Logitech G Pro X Superlight 2',
                'keyboard'=>'Wooting 60HE',
                'monitor'=>'ZOWIE XL2566K',
                'crosshair' => 'CSGO-SG5dx-aAeRk-dnoAc-TwqMh-yTSFE',
            ],

            [
                'nickname'=>'ZywOo',
                'avatar' => 'players/ZywOo.png',
                'real_name'=>'Mathieu Herbaut',
                'country'=>'FR',
                'team'=>'Vitality',
                'dpi'=>400,
                'sensitivity'=>2.00,
                'resolution'=>'1280x960',
                'refresh_rate'=>360,
                'mouse'=>'Pulsar X2',
                'keyboard'=>'Wooting 60HE',
                'monitor'=>'ZOWIE XL2566K',
                'crosshair' => 'CSGO-SG5dx-aAeRk-dnoAc-TwqMh-yTSFE',
            ],

            [
                'nickname'=>'NiKo',
                'avatar' => 'players/NiKo.png',
                'real_name'=>'Nikola Kovac',
                'country'=>'BA',
                'team'=>'Falcons',
                'dpi'=>400,
                'sensitivity'=>1.35,
                'resolution'=>'1280x960',
                'refresh_rate'=>360,
                'mouse'=>'Razer DeathAdder V3 Pro',
                'keyboard'=>'Wooting 60HE',
                'monitor'=>'ZOWIE XL2566K',
                'crosshair' => 'CSGO-SG5dx-aAeRk-dnoAc-TwqMh-yTSFE',
            ],

            [
                'nickname'=>'ropz',
                'avatar' => 'players/ropz.png',
                'real_name'=>'Robin Kool',
                'country'=>'EE',
                'team'=>'Vitality',
                'dpi'=>400,
                'sensitivity'=>1.77,
                'resolution'=>'1920x1080',
                'refresh_rate'=>360,
                'mouse'=>'Logitech G Pro X Superlight',
                'keyboard'=>'Wooting 60HE',
                'monitor'=>'ZOWIE XL2566K',
                'crosshair' => 'CSGO-SG5dx-aAeRk-dnoAc-TwqMh-yTSFE',
            ],

            [
                'nickname'=>'s1mple',
                'avatar' => 'players/s1mple.png',
                'real_name'=>'Oleksandr Kostyliev',
                'country'=>'UA',
                'team'=>'FaZe',
                'dpi'=>400,
                'sensitivity'=>3.09,
                'resolution'=>'1280x960',
                'refresh_rate'=>360,
                'mouse'=>'Logitech G Pro X Superlight',
                'keyboard'=>'Logitech G915',
                'monitor'=>'ZOWIE XL2566K',
                'crosshair' => 'CSGO-SG5dx-aAeRk-dnoAc-TwqMh-yTSFE',
            ]

        ];

        foreach($players as $player){

            Player::create($player);

        }

    }
}
