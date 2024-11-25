<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function gamesAsTeam1()
    {
        return $this->hasMany(Game::class, 'team1_id');
    }

    public function gamesAsTeam2()
    {
        return $this->hasMany(Game::class, 'team2_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    
}
