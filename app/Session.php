<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    /**
     * Get the sessions for the user.
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
