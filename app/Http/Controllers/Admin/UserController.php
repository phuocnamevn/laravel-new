<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Requests\FileRequest;
use App\Services\MailService;

class UserController extends Controller
{
    protected $mailService;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(MailService $mailService)
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

    public function formSendUserProfile()
    {
        return view('mails.send-mail-user', ['users' => $this->getUsers()]);
    }

    public function formSendMail(FileRequest $request)
    {
        $input = $request->all();
        $path = public_path('uploads');
        $attachment = $request->file('file');
        $name = time().'.'.$attachment->getClientOriginalExtension();
        $attachment->move($path, $name);
        $path_attachment = $path.'/'.$name;
        $collection = $this->getUsers();
        $users = $input['mail'] == 'all' ? $collection : $collection->where('email', $input['mail']);
        foreach ($users as $value) {
            $this->mailService->sendUserProfile($value, $path_attachment);

            return redirect()->back()->with(['msg' => 'Gửi mail thành công!']);
        }
    }

    private function getUsers()
    {
        return collect(session()->get('users'));
    }
}
