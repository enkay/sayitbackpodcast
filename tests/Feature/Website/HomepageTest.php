<?php

namespace Tests\Feature\Website;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
	use RefreshDatabase;

	// homepage loads
	public function test_homepage_loads()
	{
		$response = $this->get('/');

		$response->assertStatus(200);
	}

	// link to podcast providers
	public function test_homepage_has_links_to_podcast_providers_and_apply()
	{
		$response = $this->get('/');

		$response->assertSee('href="https://open.spotify.com/show/1418k8i0vFh6nORRsu1OjM"', false);
		$response->assertSee('href="https://podcasts.apple.com/ca/podcast/say-it-back/id1588973872"', false);
		$response->assertSee('href="https://podcasts.google.com/feed/aHR0cHM6Ly9hbmNob3IuZm0vcy82ZGFiMDdkMC9wb2RjYXN0L3Jzcw"', false);
		$response->assertSee('href="' . route('apply'), false);
	}
}
