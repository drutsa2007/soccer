<?php

namespace Database\Seeders;

use App\Models\Referee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefereeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=140; $i<=150; $i++) {
            Referee::create([
                'peoples_id' => $i,
            ]);
        }
    }
}
