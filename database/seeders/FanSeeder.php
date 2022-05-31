<?php

namespace Database\Seeders;

use App\Models\Fan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=151; $i<=500; $i++) {
            Fan::create([
                'peoples_id' => $i,
                'club_id' => mt_rand(1, 12),
            ]);
        }
    }
}
