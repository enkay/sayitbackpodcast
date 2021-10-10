<?php

namespace App\Mail;

use App\Models\LoginToken;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoginLink extends Mailable
{
    use Queueable, SerializesModels;

    public $login_token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(LoginToken $login_token)
    {
        $this->login_token = $login_token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->subject('Sign In Link')
									->view('emails.auth.login', [
										'title' => 'Sign In',
										'preview' => 'Sign in to Say It Back'
									])
									->text('emails.auth.login-text');
    }
}
