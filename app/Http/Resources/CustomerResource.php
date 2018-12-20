<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CustomerResource extends Resource
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
            'id' => $this->id,
            'name' => $this->name,
            'country' => $this->country,
            'category_info' => ['parent_id' => $this->category->parent_id, 'id' => $this->category_id],
            'category_id' => $this->category_id
            // 'contacts' => ContactResource::collection($this->contacts),
            // 'category' => new CategoryResource($this->category),
        ];
    }
}
