<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
     public function show(Champion $champion) {
        return view('vercampeon')->with('champion', $champion);
     }

    public function index() {
        $champions = Champion::all();

        return view('champ')-> with('champions', $champions);
    }
}
