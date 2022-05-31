<?php

namespace Database\Seeders;

use App\Models\Peoples;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeoplesSeeder extends Seeder
{
    static $peoples = [
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
        /*foreach (self::$peoples as $p) {
            Peoples::create([
                'name' => $p[0],
                'surname' => $p[1],
            ]);
        }*/
    }
}
