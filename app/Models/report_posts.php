<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post_likes;
use App\Models\User;
use Carbon\Carbon;


class report_posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'post_id',
        'report_user_id',
        'user_id',
        'status',
        'created_at',
        'updated_at',
    ];

   
        /*
 public function like_status()
    {
        return $this->hasOneThrough(
            User::class,
            Car::class,
            'mechanic_id', // Foreign key on the cars table...
            'car_id', // Foreign key on the owners table...
            'id', // Local key on the mechanics table...
            'id' // Local key on the cars table...
        );
    }
    */
    /*
 public function like_status()
    {
        return $this->hasOneThrough(
            Owner::class,
            Car::class,
            'mechanic_id', // Foreign key on the cars table...
            'car_id', // Foreign key on the owners table...
            'id', // Local key on the mechanics table...
            'id' // Local key on the cars table...
        );
    }
    */
}