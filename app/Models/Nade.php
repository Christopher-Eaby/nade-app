<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Nade extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'enable',
        'description',
        'map',
        'side',
        'type',
        'preview_image',
        'position_image',
        'lineup_image',
        'lineup_video'
    ];
}
