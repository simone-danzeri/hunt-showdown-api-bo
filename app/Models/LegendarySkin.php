<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegendarySkin extends Model
{
    use HasFactory;
    public function weapon() {
        return $this->belongsTo(Weapon::class);
    }
    public function consumable() {
        return $this->belongsTo(Consumable::class);
    }
    public function tool() {
        return $this->belongsTo(Tool::class);
    }
    public function dlc() {
        return $this->belongsTo(Dlc::class);
    }
    protected $fillable = [
        'name',
        'img',
        'bb_cost',
        'is_reward',
        'summary'
    ];
}
