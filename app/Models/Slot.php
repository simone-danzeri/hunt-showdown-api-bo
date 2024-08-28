<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    public function weapons() {
        return $this->hasMany(Weapon::class);
    }
    public function variants() {
        return $this->hasMany(Variant::class);
    }
    protected $fillable = [
        'slot_name'
    ];
}
