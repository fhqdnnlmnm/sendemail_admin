<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    public function company()
    {
        return $this->belongsTo('App\Models\Company','com_id','id');
    }
}
