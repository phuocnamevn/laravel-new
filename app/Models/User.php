<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use Notifiable;
    use AuthenticableTrait;
    protected $fillable = ['name', 'email', 'password', 'phone', 'address', 'school_id', 'type', 'parent_id', 'verified_at', 'closed', 'code', 'social_type'];
    public const TYPES = [
        'admin' => 1,
        'student' => 2,
    ];

    public function isAdmin(): bool
    {
        return $this->type == self::TYPES['admin'];
    }

    public function customer()
    {
        return $this->hasOne(User::class);
    }
}
