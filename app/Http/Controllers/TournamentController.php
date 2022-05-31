<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function view_tournament($id)
    {
        $tour = Tournament::find($id);
        return view('pages.tournament', compact('tour'));
    }
}
