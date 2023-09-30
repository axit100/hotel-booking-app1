<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Passport\HasApiTokens;
use App\Models\categories;

class Contact extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
       protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'category_id',
        'logo',
        'profile_photo',
        'attachment',
        'company_name',
        'category_id',
        'address',
        'website',
        'email_id',
        'mobile_1',
        'mobile_2',
        'phone_1',
        'phone_2',
        'phone_3',
        'latitude',
        'longitude',
        'residency',
        'fax',
        'status',
        'created_at',
        'sort_id',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function category()
    {
        return $this->hasOne(categories::class, 'id', 'category_id')->where('status', 1);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */


}
