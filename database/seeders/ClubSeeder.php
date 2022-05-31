<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    static $clubs = [
        'Реал Мадрид',
        'Манчестер Юнайтед',
        'Ювентус',
        'Бавария',
        'Галатасарай',
        'Милан',
        'Ливерпуль',
        'Интер',
        'Марсель',
        'Фенербахче',
        'Арсенал',
        'Челси'
    ];

    public function run()
    {
        foreach (self::$clubs as $c) {
            Club::create(['caption' => $c]);
        }
    }
}
