<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Contact extends Model
{
     use HasFactory;

     protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'appointment_time',
        'appointment_date',
        'selected_plan',
        'message',
    ];

    protected $casts = [
        'attachment_size' => 'integer',
    ];
}

