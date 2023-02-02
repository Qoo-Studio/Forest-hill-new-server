<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PurchaserResource extends JsonResource
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
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'birthDate' => $this->birth_date,
            'sin' => $this->sin,
            'governmentId' => $this->government_id,
            'expiryDate' => $this->expiry_date,
            'phoneNumber' => $this->phone_number,
            'cityId' => $this->city_id,
            'country' => $this->country,
            'suite' => $this->suite,
            'address' => $this->address,
            'postalCode' => $this->postal_code,
            'profession' => $this->profession,
            'avatar' => $this->avatar,
            'about' => $this->about,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
          ];
    }
}
