<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Services\MailService;

class UserController extends Controller
{
    protected $mailService;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function index()
    {
        return view('admin.users.index', ['users' => $this->getUsers()]);
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
        session()->push('users', $request->only(['name', 'email', 'password', 'address', 'fb', 'ytb', 'desc']));
        return  redirect('/admin/user');
    }

    public function mail()
    {
        return view('mails.sendmailUser', ['users' => $this->getUsers()]);
    }
    
    public function show()
    {
        return view('mails.sendmailUser', ['users' => $this->getUsers()]);
    }

    public function formSendMail(Request $request)
    {
        $input = $request->all();
        $collection = $this->getUsers();
        if($input['mail'] == 'all'){
            $user = $collection;
        }else{
            $user = $collection->where('email', $input['mail']);
        }
        foreach($user as $key => $value){
            $this->mailService->sendUserProfile($value);
            return redirect()->back()->with(['msg' => 'Gửi mail thành công!']);
        }
    }

    private function getUsers()
    {
        return collect(session()->get('users')); 
    }
}
