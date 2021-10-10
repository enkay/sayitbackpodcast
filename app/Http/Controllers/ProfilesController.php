<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
	# show
	public function show(Request $request, $uuid)
	{
		$user = User::where('uuid', $uuid)->firstOrFail();
		return view('profiles.show', compact('user'));
	}
}
