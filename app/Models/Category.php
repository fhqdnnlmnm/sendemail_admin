<?php

namespace App\Models;

class Category extends Model
{
    protected $fillable =['name','parent_id','description','order'];
    //
    public function companys(){
        return $this->hasMany('App\Models\Company','category_id','id');
    }
}
