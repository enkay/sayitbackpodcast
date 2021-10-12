<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ApplyTest extends TestCase
{
	use RefreshDatabase, WithFaker;

	// user gets created with email
	public function test_user_gets_created_with_email()
	{
		$form = [
			'email' => $this->faker()->safeEmail(),
		];

		$response = $this->post('/api/apply', $form);

		$response->assertSuccessful();
		
		$this->assertDatabaseCount('users', 1);
		$this->assertDatabaseHas('users', $form);
		$this->assertTrue(auth()->check());
		$this->assertEquals($form['email'], auth()->user()->email);
	}

	// onboarding
	public function test_user_can_submit_onboarding_questions()
	{
		$this->signIn();

		$birthday = now()->subYear($this->faker()->numberBetween(20, 40))->subDays($this->faker()->numberBetween(0,365))->startOfDay();

		$form = [
			'first_name' => $this->faker()->firstName(),
			'birthday_month' => $birthday->month,
			'birthday_day' => $birthday->day,
			'birthday_year' => $birthday->year,
			'location' => $this->randomLocation(),
			'occupation' => $this->faker()->jobTitle(),
			'gender' => $this->faker()->randomElement(['man', 'woman']),
			'interested_in' => $this->faker()->randomElement(['men', 'women']),
			'instagram' => $this->faker()->randomElement(['', 'instagram']),
		];

		$response = $this->post('/api/onboard', $form);

		$response->assertSuccessful();
		
		$this->assertDatabaseCount('users', 1);
		$this->assertDatabaseHas('users', [
			'first_name' => $form['first_name'],
			'birthday' => $birthday->toDateTimeString(),
			'location' => $form['location'],
			'occupation' => $form['occupation'],
			'gender' => $form['gender'],
			'interested_in' => $form['interested_in'],
			'instagram' => $form['instagram'] ?: null,
		]);
	}

	// upload photo
	public function test_users_can_upload_a_photo_when_applying()
	{
		$user = $this->signIn();

		$form = [
			'photo' => UploadedFile::fake()->image('avatar.jpg')
		];

		$response = $this->post('/api/onboard/photo', $form);

		$response->assertSuccessful();
		$this->assertNotNull($user->photo);
		$this->assertNotNull($user->original_photo);
		Storage::assertExists($user->photo);
		Storage::assertExists($user->original_photo);
	}
}
