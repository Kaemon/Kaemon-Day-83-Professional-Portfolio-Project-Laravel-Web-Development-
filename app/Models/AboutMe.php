<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    protected $fillable = [
        'name',
        'role',
        'tagline',
        'content',
        'instagram_link',
        'linkedin_link',
        'github_link',
        'image',
    ];
}
