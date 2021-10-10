<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LoginToken extends Model
{
	use HasFactory;

    protected $guarded = [];
    public $table = 'login_tokens';

    // relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // methods
    public static function createForEmail($email)
    {
        $user = User::where('email', $email)->firstOrFail();

        return self::create([
            'user_id' => $user->id,
            'token' => Str::uuid()->toString(),
        ]);
    }
    public function getUrlAttribute()
    {
			return route('login.authorize', [
				'token' => $this->token,
			], true);
    }
}
