<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
	# apply
	public function apply(ApplicationRequest $request)
	{
		$user = User::create([
			'email' => $request->email,
		]);

		$user->sendEmailVerificationEmail();
	}

	# verify
	public function verify()
	{
		return redirect()->route('onboard');
	}	
}
