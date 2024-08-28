<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumableType extends Model
{
    use HasFactory;
    public function consumables() {
        return $this->hasMany(Consumable::class);
    }
    protected $fillable = [
        'name'
    ];
}
