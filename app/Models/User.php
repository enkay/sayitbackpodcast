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
		return $this->birthday->age;
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

	public function updatePhoto($file)
	{
		$this->deletePhoto();
		$folder = $this->uuid;

		// store original
		$this->original_photo = $file->storePublicly($folder);

		// resize
		$image = Image::make($file);
		$image->fit(1080, 1080, function ($constraint) {
			$constraint->upsize();
		})->encode('png')->stream();
		$path = $folder . '/' . Str::orderedUuid() . '.png';
		Storage::put($path, $image, 'public');
		$this->photo = $path;

		$this->save();
	}
	
	public function deletePhoto()
	{
		Storage::delete([
			$this->photo,
			$this->original_photo,
		]);

		$this->update([
			'photo' => null,
			'original_photo' => null,
		]);
	}

	public function isAdmin()
	{
		return $this->admin ? true : false;
	}
}
