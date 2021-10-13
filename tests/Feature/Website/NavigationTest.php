<?php

namespace Tests\Feature\Website;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NavigationTest extends TestCase
{
	use RefreshDatabase, WithFaker;

	# logged out
	public function test_logged_out_navigation()
	{
			$response = $this->get('/');

			$response->assertSeeText('Sign in');
			$response->assertSee('href="' . route('login'), false);
			$response->assertDontSeeText('Admin');
			$response->assertDontSeeText('My Profile');
			$response->assertDontSeeText('Sign out');
	}

	# logged in
	public function test_logged_in_navigation()
	{
		$this->signIn();

		$response = $this->get('/');

		$response->assertDontSeeText('Sign in');
		$response->assertDontSeeText('Admin');
		$response->assertSeeText('My Profile');
		$response->assertSeeText('Sign out');
	}

	# logged in as admin
	public function test_logged_in_as_admin()
	{
		$this->signIn([
			'email' => $this->faker()->safeEmail(),
			'admin' => true,
		]);

		$response = $this->get('/');

		$response->assertDontSeeText('Sign in');
		$response->assertSeeText('Admin');
		$response->assertSeeText('My Profile');
		$response->assertSeeText('Sign out');
	}
}
