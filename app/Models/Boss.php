<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    use HasFactory;
    protected $fillable = [
        'boss_name',
        'slug',
        'boss_img',
        'release_date',
        'is_wild_target',
        'summary'
    ];
}
