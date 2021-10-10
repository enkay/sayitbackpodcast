<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Mail\LoginLink;
use App\Models\LoginToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
	# login
	public function login(Request $request)
	{
		$login_token = LoginToken::createForEmail($request->input('email'));
		Mail::to($request->input('email'))->send(new LoginLink($login_token));
		return response()->json('login link sent');
	}

	# authorize
	public function authorize_login(LoginRequest $request)
	{
		$login_token = LoginToken::where('token', $request->token)
                             ->where('created_at', '>', now()->subHours(6))
                             ->firstOrFail();
        
								 
		$user = User::findOrFail($login_token->user_id);
		LoginToken::where('user_id', $user->id)->delete();

		Auth::login($user, true);
		return redirect()->route('app.index');
	}
}
