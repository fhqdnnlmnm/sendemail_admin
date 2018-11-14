<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=[];
    
    //
    public function contacts()
    {
        return $this->hasMany('App\Models\Contact','com_id','id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category','cat_id','id');
    }
}
