<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerifyEmailRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailVerificationController extends Controller
{
	# verify
	public function verify(VerifyEmailRequest $request)
	{
		$user = User::where('email', $request->email)->firstOrFail();

		if ($request->token === $user->getEmailVerificationToken())
		{
			$user->update(['email_verified_at' => now()]);
			Auth::login($user, true);
		}

		if($user->first_name && $user->photo) {
			$route = 'onboard.thanks';
		} else if ($user->first_name) {
			$route = 'onboard.photo';
		} else {
			$route = 'onboard';
		}

		return redirect()->route($route);
	}	
}
