<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;


class SampleController extends Controller
{
    public function show()
    {
        return view('sample');
    }

    public function show2()
    {   
        $players = Player::paginate(8); 
        return view('player',compact('players')); 
    }

   

    public function show3($id)
    {
        $player = Player::findOrFail($id);
        return view('players.show', compact('player'));
    }
}
