<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'password', 'permission_id'
    ];

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }

    public function emails()
    {
        return $this->hasMany(Email::class);
    }
}

