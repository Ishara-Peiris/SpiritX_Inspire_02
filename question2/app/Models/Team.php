<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Team extends Model
{
    use HasFactory;

    protected $fillable = ['team_name'];

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }
}
