<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'university', 'category', 'total_runs', 'balls_faced', 
        'innings_played', 'wickets', 'overs_bowled', 'runs_conceded',
        'image',
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
