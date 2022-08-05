<?php

namespace App\Http\Resources\Gifts;

use Illuminate\Http\Resources\Json\JsonResource;

class GiftResource extends JsonResource
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
            'user_id'  => $this->user_id,
        ];
    }
}
