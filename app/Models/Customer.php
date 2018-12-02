<?php
/*
 * @Author: 01tech.Ray 
 * @Date: 2018-11-30 11:07:14 
 * @Last Modified by: 01tech.Ray
 * @Last Modified time: 2018-11-30 11:09:31
 */
namespace App\Models;

class Customer extends Model
{
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id','id');
    }

    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }
}
