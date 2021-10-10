<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
	# show
	public function show(Request $request, $uuid)
	{
		$model = User::where('uuid', $uuid)->firstOrFail();
		$user = UserResource::make($model)->resolve();
		return view('profiles.show', compact('user'));
	}
}
