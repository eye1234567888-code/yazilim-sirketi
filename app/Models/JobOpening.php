<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'requirements',
        'location',
        'department',
        'is_active',
        'deadline'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'deadline' => 'date'
    ];
}
