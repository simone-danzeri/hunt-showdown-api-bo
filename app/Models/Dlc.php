<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dlc extends Model
{
    use HasFactory;
    public function legendary_skins() {
        return $this->hasMany(LegendarySkin::class);
    }
    public function legendary_hunters() {
        return $this->hasMany(LegendaryHunter::class);
    }
    protected $fillable = [
        'name',
        'summary'
    ];
}
