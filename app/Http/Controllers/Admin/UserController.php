<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Services\MailService;

class UserController extends Controller
{
    public $listuser;
    protected $mailService;
    protected $collection;
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
        $this->collection = collect($request->only(['name', 'email', 'password', 'address', 'fb', 'ytb', 'desc']));
        session()->push('user', $this->collection->all());
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
    public function formSendMail(Request $request)
    {
        $input = $request->all();
        $collection = collect(session()->get('user'));
        $collection = collect(session()->get('user'))->where('email',);
        if($input['mail'] == 'all'){
            $user = $collection;
        }else{
            $user = $collection->where('email', $input['mail']);
        }
        foreach($user as $key => $value){
            $this->mailService->sendUserProfile($value);
            return "<p> Thành công! Email của bạn đã được gửi</p>";
        }
    }
}
