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
        $permissionGroup = $this->permissionGroupRepository->paginate();
        return view('admin.permission.permissiongroup.index', [
            'permissionGroup' => $permissionGroup]);
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
        return redirect()->route('permission-group.index')->with(['alert' => 'Add Success!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! $permissionGroupShow = $this->permissionGroupRepository->findById($id)) {
            abort(404);
        }
        $permissionGroupShow = $this->permissionGroupRepository->findById($id);
        return view('admin.permission.permissiongroup.form', [
            'permissionGroupShow' => $permissionGroupShow]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! $permissionGroupEdit = $this->permissionGroupRepository->findById($id)) {
            abort(404);
        }
        $permissionGroupEdit = $this->permissionGroupRepository->findById($id);
        return view('admin.permission.permissiongroup.form', [
            'permissionGroupEdit' => $permissionGroupEdit]);
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
        return redirect()->route('permission-group.index')->with(['alert' => 'Edit Success!']);
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
        return redirect()->route('permission-group.index')->with(['alert' => 'Delete Success!']);
    }
}