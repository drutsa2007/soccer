<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Place;
use App\Models\Referee;
use App\Models\Tournament;
use App\Models\TournamentLog;
use Illuminate\Http\Request;

class RefereeController extends Controller
{
    public function create_tournament()
    {
        $left_club = Club::inRandomOrder()->limit(1)->first();
        $right_club = Club::where('id', '<>', $left_club->id)->inRandomOrder()->limit(1)->first();
        $place = Place::inRandomOrder()->limit(1)->first();
        $referee = Referee::inRandomOrder()->limit(1)->first();
        $tour = Tournament::create([
            'left_club_id' => $left_club->id,
            'right_club_id' => $right_club->id,
            'place_id' => $place->id,
            'referee_id' => $referee->id,
            'left_club_goals' => 0,
            'right_club_goals' => 0,
        ]);
        TournamentLog::create([
            'tournament_id' => $tour->id,
            'text' => 'Матч начался',
        ]);
        return redirect()->route('view_tournament', $tour->id);
    }

}
