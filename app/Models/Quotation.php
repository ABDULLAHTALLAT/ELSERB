<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'phone', 'email', 'service_id', 'message'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
