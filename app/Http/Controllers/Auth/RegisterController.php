<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('users.register');
    }
    public function register()
    {
        $user = User::create([
            'name' => 'London to Paris',
        ]);
    }
}
