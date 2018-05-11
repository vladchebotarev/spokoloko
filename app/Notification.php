<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the users for the notification.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_notifications', 'notification_id', 'user_id');
    }
}
