<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    protected $fillable = [
        'left_club_id',
        'right_club_id',
        'place_id',
        'referee_id',
        'left_club_goals',
        'right_club_goals',
    ];

    public function l_club()
    {
        return $this->belongsTo(Club::class, 'left_club_id');
    }

    public function r_club()
    {
        return $this->belongsTo(Club::class, 'right_club_id');
    }

    public function logs()
    {
        return $this->hasMany(TournamentLog::class);
    }

}
