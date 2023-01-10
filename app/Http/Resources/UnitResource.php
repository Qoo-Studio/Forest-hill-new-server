<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UnitResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'categoryId' => $this->category_id,
            'imageUrl' => $this->image_url,
            'fileUrl' => $this->file_url,
            'space' => $this->space,
            'bedroomCount' => $this->bedroom_count,
            'bathroomCount' => $this->bathroom_count,
            'floorNumber' => $this->floor_number,
            'price' => $this->price,
            'hasParking' => $this->has_parking,
            'isSunny' => $this->is_sunny,
            'sold' => $this->sold,
            'isPublic' => $this->is_public,
            'exposure' => $this->exposure,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
          ];
    }
}
