<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Nade extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'enable',
        'description',
        'map',
        'side',
        'type',
        'position_image',
        'lineup_image',
        'lineup_video'
    ];
}
