<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email'=> $this->email,
            'dob'=> $this->dob,
            'address'=> $this->address,
            'zipcode'=> $this->zipcode,
            'state'=> $this->state,
            'citizenship'=> $this->citizenship,
            'residency'=> $this->residency,
            'mobile_number'=> $this->mobile_number,
            'user_id'=> $this->user_id,
            'user_name'=> $this->user_name,
            'user_password'=> $this->user_password,
            'created_at'=> $this->created_at->format('d-m-y'),
            'updated_at' => $this->updated_at->format('d-m-y'),
            
        ];
        //return parent::toArray($request);
        
    }
}
