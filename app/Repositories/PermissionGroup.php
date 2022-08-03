<?php

namespace App\Repositories;

use App\Models\PermissionGroup as ModelsPermissionGroup;
use App\Repositories\Interfaces\PermissionGroupInterface;
use Illuminate\Support\Facades\DB;

class PermissionGroup implements PermissionGroupInterface
{
    public function all()
    {
        return ModelsPermissionGroup::all();
    }

    public function getPermissiongroup()
    {
        return DB::table('permission_groups')
       ->select('*')
       ->orderByDesc('id')
       ->limit(10)
       ->get();
    }

    public function deletebyid($id)
    {
        return DB::table('permission_groups')->where('id', $id)->delete();
    }

    public function findid($id)
    {
        return ModelsPermissionGroup::all()->find($id);
    }

    public function update(array $inputs, array $conditions = ['id' => null])
    {
    }
}
