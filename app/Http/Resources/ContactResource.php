<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ContactResource extends Resource
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
            'name' => $this -> name,
            'saltname' => $this -> saltname,
            'sex' => $this -> sex,
            'post' => $this -> post,
            'email' => $this -> email,
        ];
    }
}
