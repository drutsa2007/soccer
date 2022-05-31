<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k = 1;
        for($i=1; $i<=12; $i++) {
            for($j=1; $j<=11; $j++) {
                Player::create([
                    'peoples_id' => $k,
                    'club_id' => $i,
                ]);
                $k++;
            }
        }
    }
}
