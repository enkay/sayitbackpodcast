<?php

namespace Tests\Feature\Website;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OnboardingTest extends TestCase
{
	use RefreshDatabase;
	
	// apply page loads
	public function test_apply_page_loads()
	{
		$response = $this->get('/apply');

		$response->assertStatus(200);
	}
	
	// onboard page loads
	public function test_onboard_page_loads()
	{
		$this->signIn();

		$response = $this->get('/welcome');

		$response->assertStatus(200);
	}
	
	// onboard page requires auth
	public function test_onboard_page_requires_auth()
	{
		$response = $this->get('/welcome');

		$response->assertStatus(302);
	}
	
	// onboard photo page loads
	public function test_onboard_photo_page_loads()
	{
		$this->signIn();

		$response = $this->get('/welcome/photo');

		$response->assertStatus(200);
	}
	
	// onboard photo page requires auth
	public function test_onboard_photo_page_requires_auth()
	{
		$response = $this->get('/welcome/photo');

		$response->assertStatus(302);
	}
}
