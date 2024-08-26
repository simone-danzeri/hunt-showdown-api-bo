<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameTrait extends Model
{
    use HasFactory;
    protected $fillable = [
        'trait_name',
        'trait_img',
        'points',
        'summary'
    ];
}
