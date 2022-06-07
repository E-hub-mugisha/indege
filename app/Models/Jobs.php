<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
        'job_poster',
        'phone',
        'job_type',
        'description',
        'amount',
        'payment_mode',
        'location',
    ];
}
