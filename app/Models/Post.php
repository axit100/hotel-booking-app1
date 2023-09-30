<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post_likes;
use App\Models\User;
use Carbon\Carbon;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'type',
        'image',
        'video',
        'title',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];

      public function user()
        {
            return $this->hasOne(User::class, 'id', 'user_id');
        }
      public function like()
        {
             return $this->hasMany(Post_likes::class, 'post_id', 'id')->where('status',1);
        }
        
    public function getCreatedAtAttribute($value){
    $date = Carbon::parse($value);
    return $date->format('Y-m-d H:i:s');
}
public function getUpdatedAtAttribute($value){
    $date = Carbon::parse($value);
    return $date->format('Y-m-d H:i:s');
}

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
