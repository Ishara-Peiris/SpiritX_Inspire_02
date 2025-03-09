<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Player;
use App\Models\Team;


class TeamController extends Controller
{
   
    // Show the form to create a new team
    public function create()
    {
        // Get players who are not assigned to any team
        $players = Player::doesntHave('teams')->get();
        
        // Return the 'team.blade.php' view with the players
        return view('team', compact('players'));
    }

    // Store the newly created team
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'team_name' => 'required|string|max:255',
            'players' => 'required|array|min:1|max:11', // At least 1 player, but no more than 11
            'players.*' => 'exists:players,id', // Ensure the player IDs exist in the database
        ]);

        // Create a new team
        $team = Team::create([
            'team_name' => $request->team_name,
            // Optionally, you can add logic here for team_logo if necessary
        ]);

        // Attach selected players to the team
        $team->players()->attach($request->players);

        // Redirect back with a success message
        return redirect()->route('teams.index')->with('success', 'Team created successfully!');
    }
}
