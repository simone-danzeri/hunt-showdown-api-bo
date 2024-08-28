<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    public function slot() {
        return $this->belongsTo(Slot::class);
    }
    public function weapon() {
        return $this->belongsTo(Weapon::class);
    }
    protected $fillable = [
        'variant_name',
        'variant_img',
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
