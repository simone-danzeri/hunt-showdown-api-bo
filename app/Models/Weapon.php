<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;
    public function bullet_type() {
        return $this->belongsTo(BulletType::class);
    }
    public function slot() {
        return $this->belongsTo(Slot::class);
    }
    public function variants() {
        return $this->hasMany(Variant::class);
    }
    public function custom_ammos() {
        return $this->belongsToMany(CustomAmmo::class);
    }
    public function legendary_skins() {
        return $this->hasMany(LegendarySkin::class);
    }
    protected $fillable = [
        'weapon_name',
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
