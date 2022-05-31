<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    public function fans()
    {
        return $this->hasMany(Fan::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
