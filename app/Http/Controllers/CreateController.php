<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(){
        return view('admin.usercreate');
    }
    public function validationForm(Request $request) {
        echo "<pre>";
            print_r($request->only('username'));
        echo "</pre>";

        // $this->validation($request,[
        //     'username' => ['required|min:2'],
        //     'email' => ['required|'],
        //     'password' => ['required|min:8|']
        // ]);
    }
}
