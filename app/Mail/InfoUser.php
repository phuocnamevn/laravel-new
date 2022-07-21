<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InfoUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;

    public $file;

    public function __construct($user, $file)
    {
        $this->user = $user;
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.admin.inform-user-profile', [
            'name' => $this->user['name'],
            'email' => $this->user['email'],
            'address' => $this->user['address'],
        ])->attach($this->file);
    }
}
