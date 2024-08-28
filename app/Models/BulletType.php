<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulletType extends Model
{
    use HasFactory;
    public function weapons() {
        return $this->hasMany(Weapon::class);
    }
    protected $fillable = [
        'name'
    ];
}
