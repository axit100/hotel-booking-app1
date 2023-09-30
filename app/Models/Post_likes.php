<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post_likes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'post_id',
        'status',
        'created_at',
        'updated_at',
    ];

    

}