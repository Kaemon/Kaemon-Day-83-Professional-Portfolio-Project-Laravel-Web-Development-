<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'logo',
        'to_email',
        'smtp_username',
        'smtp_password',
        'from_name',
    ];

    protected $casts = [
        'smtp_password' => 'encrypted',
    ];
}
