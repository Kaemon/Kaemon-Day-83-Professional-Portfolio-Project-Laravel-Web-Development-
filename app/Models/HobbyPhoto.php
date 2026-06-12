<?php

namespace App\Models;

use Database\Factories\HobbyPhotoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobbyPhoto extends Model
{
    /** @use HasFactory<HobbyPhotoFactory> */
    use HasFactory;

    protected $fillable = [
        'image',
        'sort_order',
    ];
}
