<?php

namespace App\Services;

use App\Mail\InfoUser;
use Illuminate\Support\Facades\Mail;

class MailService
{
    public function sendUserProfile($user, $file)
    {
        Mail::to($user['email'])->send(new InfoUser($user, $file));
    }
}
