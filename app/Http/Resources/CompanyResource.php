<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\ContactResource;
use App\Http\Resources\CategoryResource;

class CompanyResource extends Resource
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
            'catid' => ['par_id' => $this ->category->par_id, 'cat_id' => $this->cat_id],
            'cat_id' => $this->cat_id
            // 'contacts' => ContactResource::collection($this->contacts),
            // 'category' => new CategoryResource($this->category),
        ];
    }


    // public function with($request){
    //     return [
    //         'links' => [
    //             'self' => url('api/articles'.$this->id),
    //         ],
    //     ];
    // }
}
