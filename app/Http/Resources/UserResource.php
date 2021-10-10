<?php

namespace App\Http\Resources;

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
					'id' => $this->uuid,
					'photo' => $this->photo_url,
					'name' => ucfirst($this->first_name),
					'age' => $this->age,
					'location' => config('cities.' . $this->location . '.name'),
					'occupation' => ucfirst($this->occupation),
				];
    }
}
