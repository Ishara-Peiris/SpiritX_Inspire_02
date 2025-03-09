<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;


class PlayerController extends Controller
{
    public function show()
    {
        return view('players');
    }
   

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'university' => 'nullable|string|max:255',
            'category' => 'required|in:Batsman,Bowler,All-rounder,Wicketkeeper',
            'total_runs' => 'required|integer|min:0',
            'balls_faced' => 'required|integer|min:0',
            'innings_played' => 'required|integer|min:0',
            'wickets' => 'required|integer|min:0',
            'overs_bowled' => 'required|numeric|min:0',
            'runs_conceded' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate image
        ]);

        // Handle the file upload if present
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Validate the image file
            if ($request->file('image')->isValid()) {
                // Store the image in the 'players' folder inside 'public' disk
                $imagePath = $request->file('image')->store('players', 'public');
            } else {
                return back()->with('error', 'The uploaded image is invalid.');
            }
        }

        // Create a new player record in the database
        Player::create([
            'name' => $request->name,
            'university' => $request->university,
            'category' => $request->category,
            'total_runs' => $request->total_runs,
            'balls_faced' => $request->balls_faced,
            'innings_played' => $request->innings_played,
            'wickets' => $request->wickets,
            'overs_bowled' => $request->overs_bowled,
            'runs_conceded' => $request->runs_conceded,
            'image' => $imagePath, // Store the image path in the database
        ]);

        // Redirect with a success message
        return redirect()->route('admin.create')->with('success', 'Player added successfully!');
    }




    public function getStats()
    {
        $overallRuns = Player::sum('total_runs'); 
        $overallWickets = Player::sum('wickets'); 
        $highestRunScorer = Player::orderBy('total_runs', 'desc')->first(); 
        $highestWicketTaker = Player::orderBy('wickets', 'desc')->first(); 

        return response()->json([
            'overallRuns' => $overallRuns,
            'overallWickets' => $overallWickets,
            'highestRunScorer' => [
                'name' => $highestRunScorer->name ?? 'N/A',
                'runs' => $highestRunScorer->total_runs ?? 0,
            ],
            'highestWicketTaker' => [
                'name' => $highestWicketTaker->name ?? 'N/A',
                'wickets' => $highestWicketTaker->wickets ?? 0,
            ],
        ]);
    }
}
