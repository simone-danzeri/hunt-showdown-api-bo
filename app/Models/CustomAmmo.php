<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomAmmo extends Model
{
    use HasFactory;
    public function weapons() {
        return $this->belongsToMany(Weapon::class);
    }
    protected $fillable = [
        'name'
    ];
}
