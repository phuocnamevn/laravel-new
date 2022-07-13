<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Validation;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;

class CreateUserController extends Controller
{
    public function index(){
        return view('admin.usercreate');
    }
    public function validationForm(CreateUserRequest $request) {
        $this->validationForm($request->validated());
    }
}
