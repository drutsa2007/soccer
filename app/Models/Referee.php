<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    use HasFactory;

    protected $table = 'referees';
    protected $primaryKey = 'id';

    public function peoples()
    {
        return $this->belongsTo(Peoples::class);
    }
}
