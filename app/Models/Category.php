<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function company(){
        return $this->hasMany('App\Models\Company','cat_id','id');
    }
}
