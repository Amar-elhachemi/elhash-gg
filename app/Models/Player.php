<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [

    'nickname',
    'real_name',
    'country',
    'team',
    'avatar',

    'dpi',
    'sensitivity',
    'resolution',
    'refresh_rate',

    'crosshair',

    'mouse',
    'keyboard',
    'monitor',

];

public function crosshairs()
{
    return $this->hasMany(Crosshair::class);
}
}