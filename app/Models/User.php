<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable{
    use HasFactory;
    use AuthenticableTrait;
    protected $fillable = ['email', 'password', 'phone', 'address', 'school_id', 'type', 'parent_id', 'verified_at', 'closed', 'code', 'social_type'];
    const TYPES = [
        'admin' => 1,
        'student' => 2,
    ];
}
