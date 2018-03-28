<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Business
 * @package App
 */
class Business extends Model
{
    //

    public function user() {
        return $this->belongsTo('App\User');
    }
}
