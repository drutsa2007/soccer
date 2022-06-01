<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Tournament;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    static function pass($id)
    {
        $tour = Tournament::find($id);
        $club = mt_rand(0, 1);
        if ($club == 0) {
            $command = 'left';
        }
        else {
            $command = 'right';
        }
        $side_command = $command."_club_id";
        $player = Player::where('club_id', $tour->$side_command)->inRandomOrder()->limit(1)->first();
        $text = "Игрок ".$player->peoples->name." передал пас.";
        return $text;
    }

    static function goal($id)
    {
        $tour = Tournament::find($id);
        $club = mt_rand(0, 1);
        if ($club == 0) {
            $command = 'left';
        }
        else {
            $command = 'right';
        }
        $side_command = $command."_club_id";
        $player = Player::where('club_id', $tour->$side_command)->inRandomOrder()->limit(1)->first();
        $result = mt_rand(0, 1);
        if ($result == 0) {
            $check = "штанга.";
        }
        else {
            $check = "ГООООЛ!!!!.";
            $t = $command."_club_goals";
            $tour->$t =$tour->$t + 1;
            $tour->save();
        }
        $text = "Игрок ".$player->peoples->name." ударил по воротам: ".$check;
        return $text;
    }
}
