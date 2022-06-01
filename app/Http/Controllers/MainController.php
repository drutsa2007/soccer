<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Place;
use App\Models\Referee;
use App\Models\Tournament;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $places = Place::all();
        $referees = Referee::all();
        $clubs = Club::all();
        $clubs_c = Club::all()->count();
        $referees_c = Referee::all()->count();
        $places_c = Place::all()->count();
        $matches = Tournament::all();
        return view('pages.main', compact('clubs', 'places', 'referees',
            'clubs_c', 'referees_c', 'places_c', 'matches'));
    }
}
