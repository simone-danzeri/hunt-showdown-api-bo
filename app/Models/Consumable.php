<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    use HasFactory;
    public function consumable_type() {
        return $this->belongsTo(ConsumableType::class);
    }
    public function legendary_skins() {
        return $this->hasMany(LegendarySkin::class);
    }
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
