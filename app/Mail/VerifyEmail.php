<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token_url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
		$this->user = $user;
		$base_url = config('app.url') . '/verify?';
    $this->token_url = $base_url . http_build_query([
			'email' => $user->email,
			'token' => $user->getEmailVerificationToken(),
		]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Please verify your email address')
            ->view('emails.auth.verify-email', [
							'title' => 'Verify your email address',
							'preview' => 'Please verify your email address',
						])
						->text('emails.auth.verify-email-text');
    }
}
