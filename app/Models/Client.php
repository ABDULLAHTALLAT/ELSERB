<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 'company_logo', 'website_url', 'work_id'
    ];

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }
}

