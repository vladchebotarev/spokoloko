<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'provider', 'provider_id', 'confirmed'
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
     * Get the notifications for the user.
     */
    public function notifications()
    {
        return $this->belongsToMany('App\Notification', 'user_notifications', 'user_id', 'notification_id');
    }

    /**
     * Get the venues for the user.
     */
    public function venues()
    {
        return $this->hasMany('App\Venue');
    }

    /**
     * Get the businesses for the user.
     */
    public function businesses()
    {
        return $this->hasMany('App\Service');
    }

    /**
     * Get the sessions for the user.
     */
    public function sessions()
    {
        return $this->hasMany('App\Session');
    }
}
