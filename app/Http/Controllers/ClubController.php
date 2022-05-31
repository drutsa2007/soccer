<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function view($id)
    {
        $club = Club::find($id);
        return view('pages.club', compact('club'));
    }
}
