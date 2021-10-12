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
			$location = ($this->location !== 'other')
				? $this->full_location
				: null;

			return [
				'id' => $this->uuid,
				'photo' => $this->photo_url,
				'name' => $this->first_name ? ucfirst($this->first_name) : null,
				'age' => $this->birthday ? $this->age : null,
				'location' => $location,
				'occupation' => $this->occupation ? ucfirst($this->occupation) : null,
				'bio' => $this->bio,
			];
    }
}
