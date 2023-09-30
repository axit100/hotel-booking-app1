<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    
       protected $fillable = [
        'id',
        'title',
        'message',
        'image',
        'created_at',
        'updated_at',
        'user_id',
    ];

}
