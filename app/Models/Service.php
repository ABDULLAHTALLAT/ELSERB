<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }

    public function emails()
    {
        return $this->hasMany(Email::class);
    }
}

