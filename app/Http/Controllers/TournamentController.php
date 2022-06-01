<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\TournamentLog;
use Illuminate\Http\Request;

class TournamentController extends Controller
{


    public function view_tournament($id)
    {
        $tour = Tournament::find($id);
        return view('pages.tournament', compact('tour'));
    }

    public function start_tournament($id)
    {
        $actions = [
            "ударить поворотам",
            "показать карточку",
            "назначить штрафной",
            "дать пас",
            "остановить матч",
        ];
        $random_weight = mt_rand(0, 7);
        if ($random_weight == 7) $select_action = 4;
        if ($random_weight >=0 && $random_weight <=4) $select_action = 0;
        if ($random_weight >=5 && $random_weight <=6) $select_action = mt_rand(1, 3);
        switch ($select_action) {
            case 0: $text = RefereeController::card($id); break;
            case 1: $text = RefereeController::kick($id); break;
            case 2: $text = "Остановить матч!"; break;
            case 3: $text = PlayerController::pass($id); break;
            case 4: $text = PlayerController::goal($id); break;
        }
        //$text = $actions[$select_action];
        $log = TournamentLog::create([
            'tournament_id' => $id,
            'text' => $text,
        ]);
        //return view('ajax._tournament_events', compact('tour', 'events'));
        return $text;
    }

    public function tournament_logs($id)
    {
        $tour = Tournament::find($id);
        return view('pages.log', compact('tour'));
    }
}
