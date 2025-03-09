<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use HasFactory, SoftDeletes;

    // Fields that can be mass-assigned
    protected $fillable = [
        'name', 'email', 'password', 'mobile', 'profile', 'is_super', 'status',
    ];

    // Fields hidden from JSON output
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Fields that should be cast to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
