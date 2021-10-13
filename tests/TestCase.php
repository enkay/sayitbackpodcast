<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;

abstract class TestCase extends BaseTestCase
{
	use CreatesApplication, WithFaker;

	protected function signIn($attributes = null, $user = null)
	{
		$attributes = $attributes ?: ['email' => $this->faker()->safeEmail()];
		$user = $user ?: User::create($attributes);
		Auth::login($user);
		return $user;
	}

	protected function randomLocation()
	{
		$options = array_keys(config('cities'));
		return $options[array_rand($options)];
	}
}
