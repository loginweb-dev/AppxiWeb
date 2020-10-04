<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Nagy\LaravelRating\Traits\Rate\CanRate;
use Nagy\LaravelRating\Traits\Vote\CanVote;
use Nagy\LaravelRating\Traits\Like\CanLike;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;
    use CanRate;
    use CanVote;
    use CanLike;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function customer()
    {
        return $this->hasOne('App\Customer');
    }
    
//     public function roles()
//     {
//         return $this->hasMany('\TCG\Voyager\Models\Role');
//     }
}
