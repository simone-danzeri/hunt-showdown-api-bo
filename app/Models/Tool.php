<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;
    public function tool_type() {
        return $this->belongsTo(ToolType::class);
    }
    public function legendary_skins() {
        return $this->hasMany(LegendarySkin::class);
    }
    protected $fillable = [
        'tool_name',
        'tool_img',
        'capacity',
        'light_melee_dmg',
        'heavy_melee_dmg',
        'damage',
        'effect_radius',
        'effect_duration',
        'throw_range',
        'fuse_timer',
        'effective_range',
    ];
}
