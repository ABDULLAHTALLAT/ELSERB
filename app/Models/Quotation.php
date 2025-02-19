<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'phone', 'email', 'company', 'service_id', 'message'
    ];

    // العلاقة مع Service (إذا كان لديك نموذج خدمة مرتبط)
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
