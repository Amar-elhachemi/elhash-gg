<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crosshair extends Model
{
    protected $fillable = [

        'player_id',

        'name',

        'code',

        'color',

        'size',

        'gap',

        'thickness',

        'outline',

        'dot'

    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}