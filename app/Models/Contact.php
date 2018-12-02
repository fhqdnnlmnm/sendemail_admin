<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    public function customers()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
