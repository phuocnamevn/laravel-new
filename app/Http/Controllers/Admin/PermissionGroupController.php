<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PermissionGroupRequest;
use App\Repositories\Admin\PermissionGroup\PermissionGroupInterface;

class PermissionGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $permissionGroupRepository;

    public function __construct(PermissionGroupInterface $permissionGroupRepository)
    {
        $this->permissionGroupRepository  = $permissionGroupRepository;
    }

    public function index()
    {
        $db = $this->permissionGroupRepository->paginate();
        return view('admin.permission.permissiongroup.index', compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.permissiongroup.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionGroupRequest $request)
    {
        $this->permissionGroupRepository->save($request->validated());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! $show = $this->permissionGroupRepository->findById($id)) {
            abort(404);
        }
        $show = $this->permissionGroupRepository->findById($id);
        return view('admin.permission.permissiongroup.form', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! $show = $this->permissionGroupRepository->findById($id)) {
            abort(404);
        }
        $edit = $this->permissionGroupRepository->findById($id);
        return view('admin.permission.permissiongroup.form', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionGroupRequest $request, $id)
    {
        $this->permissionGroupRepository->save($request->validated(), ['id' => $id]);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->permissionGroupRepository->deleteById($id);
        return redirect()->back();
    }
}
