<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CategoryResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this -> id,
            'par_id' => $this -> par_id,
            'cat_name' => $this -> cat_name,
            'cat_order' => $this -> cat_order,
        ];
    }
}
