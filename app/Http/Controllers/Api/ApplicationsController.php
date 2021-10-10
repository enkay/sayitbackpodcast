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
			'city' => $this->getLocation($request->location, 'city'),
			'state' => $this->getLocation($request->location, 'state'),
			'country' => $this->getLocation($request->location, 'country'),
			'birthday' => $request->birthday_year . '-' . $request->birthday_month . '-' . $request->birthday_day,
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
		$user->updatePhoto($request->file('photo'));
		return response()->json('uploaded');
	}

	protected function getLocation($code, $value)
	{
		$locations = [
			'nyc' => [
				'city' => 'New York',
				'state' => 'NY',
				'country' => 'USA'
			],
			'la' => [
				'city' => 'Los Angeles',
				'state' => 'CA',
				'country' => 'USA'
			],
			'mia' => [
				'city' => 'Miami',
				'state' => 'FL',
				'country' => 'USA'
			],
		];

		return $locations[$code][$value];
	}
}
