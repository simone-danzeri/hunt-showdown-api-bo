<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img',
        'light_melee_dmg',
        'heavy_melee_dmg',
        'damage',
        'effect_radius',
        'effect_duration',
        'throw_range',
        'fuse_timer',
        'control_range',
        'damage_per_tick',
        'cost',
        'summary',
    ];
}
