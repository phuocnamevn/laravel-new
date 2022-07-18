<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\UserRequest;

class UserController extends Controller
{
    public $listuser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->listuser = session()->get('user');
        return view('admin.users.index', ['list' => $this->listuser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $input = $request->all();
        $collection = collect($input);
        session()->push('user', $collection->all());
        return  redirect('/admin/user');
    }

    public function mail()
    {
        $this->listuser = session()->get('user');
        return view('mails.sendmailUser', ['list' => $this->listuser]);
    }
    
    public function show()
    {
        $this->listuser = session()->get('user');
        return view('mails.sendmailUser', ['list' => $this->listuser]);
    }
}
