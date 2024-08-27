<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;
    protected $fillable = [
        'weapon_img',
        'ammo_reserve',
        'bullet_speed',
        'sway',
        'effective_range',
        'reload_time',
        'light_melee_dmg',
        'heavy_melee_dmg',
        'cost',
        'summary'
    ];
}
