<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * @package App
 */
class Service extends Model
{
    //

    public function user() {
        return $this->belongsTo('App\User');
    }
}
