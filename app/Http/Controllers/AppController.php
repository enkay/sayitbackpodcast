<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
	# index
	public function index()
	{
		$user = Auth::user();

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
