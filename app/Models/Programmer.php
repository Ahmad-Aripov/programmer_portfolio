<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'professional_title',
        'experience',
        'education',
        'skills',
    ];
    protected $casts = [
        'experience' => 'array',
        'education' => 'array',
        'skills' => 'array',
    ];

}
