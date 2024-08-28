<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToolType extends Model
{
    use HasFactory;
    public function tools() {
        return $this->hasMany(Tool::class);
    }
    protected $fillable = [
        'name'
    ];
}
