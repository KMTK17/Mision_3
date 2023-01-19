<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'average',
    ];

    public function sport(){

        return $this->belongsTo(Sport::class);
    }

    public function trainer(){

        return $this->belongsTo(Trainer::class);
    }

    public function player(){

        return $this->hasMany(Player::class);
    }
}