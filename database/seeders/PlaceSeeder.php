<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    static $places = [
        ['Стадион Первого мая', 114000],
        ['Мельбурн Крикет Граунд', 100024],
        ['Камп Ноу', 99354],
        ['Соккер Сити', 94736],
        ['Уэмбли', 90000],
        ['Ацтека', 87523],
        ['Букит-джалил', 87523],
        ['Борг-эль-Араб', 86000],
        ['Стадион индийской молодёжи', 85000],
        ['Австралия', 84000],
        ['Зигналь-Идуна-парк', 81359],
        ['Стад де Франс', 81338],
        ['Сантьяго Бернабеу', 81044],
        ['Лужники', 81000],
        ['Шах-Алам', 80372],
        ['Монументаль', 80093],
    ];

    public function run()
    {
        foreach (self::$places as $p) {
            Place::create([
                'caption' => $p[0],
                'size' => $p[1],
            ]);
        }
    }
}
