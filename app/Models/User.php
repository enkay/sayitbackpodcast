<?php

namespace App\Models;

use App\Mail\VerifyEmail;
use App\Traits\HasUuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class User extends Authenticatable
{
	use HasApiTokens, HasUuid, HasFactory, SoftDeletes, Notifiable;

	protected $guarded = [];

	protected $casts = [
			'email_verified_at' => 'datetime',
			'birthday' => 'date',
	];

	// getters
	public function getPhotoUrlAttribute()
	{
		return $this->photo ? Storage::url($this->photo) : null;
	}
	public function getOriginalPhotoUrlAttribute($value)
	{
		return $this->original_photo ? Storage::url($this->original_photo) : null;
	}
	public function getAgeAttribute()
	{
		return $this->birthday ? $this->birthday->age : null;
	}
	public function getFullLocationAttribute()
	{
		return config('cities.' . $this->location . '.name');
	}
	public function getBioAttribute($value)
	{
		if ($value) return $value;

		if ($this->first_name) $value .= $this->first_name;
		if ($this->birthday) $value .= ', ' . $this->age;
		if ($this->location && $this->location !== 'other') $value .= ' from ' . $this->full_location;
		return $value;
	}
	public function getProfileUrlAttribute()
	{
		return route('profiles.show', $this->uuid, true);
	}

	// methods
	public function getEmailVerificationToken()
	{
		return hash_hmac('sha256', $this->email, $this->id . $this->created_at);
	}

	public function sendEmailVerificationEmail()
	{
		Mail::to($this->email)->send(new VerifyEmail($this));
	}

	public function hasEmailVerified()
	{
		return $this->email_verified_at ? true : false;
	}

	public function uploadOriginalPhoto($file)
	{
		$path = $file->storePublicly($this->uuid);
		Storage::delete($this->original_photo);
		return $path;
	}

	public function uploadPhoto($file)
	{
		$image = Image::make($file);
		$image->fit(1080, 1080, function ($constraint) {
			$constraint->upsize();
		})->encode('jpg')->stream();

		$path = $this->uuid . '/' . Str::orderedUuid() . '.jpg';
		
		Storage::put($path, $image, 'public');
		Storage::delete($this->photo);

		return $path;
	}

	public function isAdmin()
	{
		return $this->admin ? true : false;
	}
}
