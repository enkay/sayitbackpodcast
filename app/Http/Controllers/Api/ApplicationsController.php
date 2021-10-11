<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationRequest;
use App\Http\Requests\OnboardUserRequest;
use App\Http\Requests\UploadPhotoRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationsController extends Controller
{
	# apply
	public function apply(ApplicationRequest $request)
	{
		$user = User::create([
			'email' => $request->email,
		]);
		
		Auth::login($user, true);

		$user->sendEmailVerificationEmail();
		
		return response()->json('created');
	}

	# onboard
	public function onboard(OnboardUserRequest $request)
	{
		$user = Auth::user();

		$user->update([
			'first_name' => $request->first_name,
			'birthday' => $request->birthday_year . '-' . $request->birthday_month . '-' . $request->birthday_day,
			'location' => $request->location,
			'city' => config('cities' . $request->location . '.city'),
			'state' => config('cities' . $request->location . '.state'),
			'country' => config('cities' . $request->location . '.country'),
			'occupation' => $request->occupation,
			'gender' => $request->gender,
			'interested_in' => $request->interested_in,
			'instagram' => $request->instagram,
		]);

		return response()->json('submitted');
	}

	# upload photo
	public function upload_photo(UploadPhotoRequest $request)
	{
		$user = Auth::user();
		
		$user->update([
			'original_photo' => $user->uploadOriginalPhoto($request->file('photo')),
			'photo' => $user->uploadPhoto($request->file('photo'))
		]);

		return response()->json('uploaded');
	}
}
