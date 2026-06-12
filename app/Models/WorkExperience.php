<?php

namespace App\Models;

use Database\Factories\WorkExperienceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    /** @use HasFactory<WorkExperienceFactory> */
    use HasFactory;

    protected $fillable = [
        'company',
        'role',
        'description',
        'period',
        'gradient_color',
        'sort_order',
    ];
}
