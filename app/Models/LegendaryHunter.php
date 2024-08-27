<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegendaryHunter extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img',
        'bb_cost',
        'is_reward',
        'summary'
    ];
}
