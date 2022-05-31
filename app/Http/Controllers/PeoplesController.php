<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeoplesController extends Controller
{
    public function get_people()
    {
        return "123";
        //return response()->json(["success" => "sadr"], 200);
    }
}
