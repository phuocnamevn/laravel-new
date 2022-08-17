<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PermissionRequest;
use App\Repositories\Permission\PermissionRepository;
use App\Repositories\PermissionGroup\PermissionGroupRepository;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $permissionRepository;
    public $permissionGroupRepository;

    public function __construct(PermissionRepository $permissionRepository, PermissionGroupRepository $permissionGroupRepository)
    {
        $this->permissionRepository  = $permissionRepository;
        $this->permissionGroupRepository  = $permissionGroupRepository;
    }

    public function index()
    {
        return view('admin.permission.index', [
            'permissions' => $this->permissionRepository->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.form', [
            'permissionGroups' => $this->permissionGroupRepository->getAll()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {
        $this->permissionRepository->save($request->validated());
        return redirect()->route('permission.index')->with(['message' => __('messages.create_success')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! $permission = $this->permissionRepository->findById($id)) {
            abort(404);
        }
        return view('admin.permission.show', [
            'permission' => $permission
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! $permission = $this->permissionRepository->findById($id)) {
            abort(404);
        }
        return view('admin.permission.form', [
            'permission' => $permission,
            'permissionGroups' => $this->permissionGroupRepository->getAll()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, $id)
    {
        $this->permissionRepository->save($request->validated(), ['id' => $id]);
        return redirect()->route('permission.index')->with(['message' => __('messages.edit_success')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->permissionRepository->deleteById($id);
        return redirect()->route('permission.index')->with(['message' => __('messages.delete_success')]);
    }
}
