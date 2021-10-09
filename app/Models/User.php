<?php

namespace App\Models;

use App\Mail\VerifyEmail;
use App\Traits\HasUuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
	use HasApiTokens, HasUuid, HasFactory, Notifiable;

	protected $guarded = [];

	protected $casts = [
			'email_verified_at' => 'datetime',
	];

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
}
