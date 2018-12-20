<?php

namespace App\Models;

class Category extends Model
{
    protected $fillable =['name','parent_id','description','order'];
    //
    public function customers(){
        return $this->hasMany('App\Models\Customer','category_id','id');
    }
}
