<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_number',
        'names',
        'phone',
        'email',
        'address',
        'image',
        'experience',
        'skills',
        'description',
        'payment_mode',
        'category',
    ];
}
