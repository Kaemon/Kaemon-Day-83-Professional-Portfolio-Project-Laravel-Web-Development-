<?php

namespace App\Models;

use Database\Factories\EducationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /** @use HasFactory<EducationFactory> */
    use HasFactory;

    protected $fillable = [
        'school',
        'degree',
        'period',
        'image',
        'logo',
        'link',
        'sort_order',
    ];
}
