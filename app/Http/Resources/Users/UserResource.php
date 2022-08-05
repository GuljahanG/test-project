<?php

namespace App\Http\Resources\Users;

use App\Http\Resources\Gifts\GiftChildrenCollectionResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'       => $this->id,
            'name'     => $this->name,
            'email'    => $this->email,
            'gifts'    => GiftChildrenCollectionResource::collection($this->gifts)
        ];
    }
}
