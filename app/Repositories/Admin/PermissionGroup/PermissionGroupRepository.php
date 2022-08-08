<?php

namespace App\Repositories\Admin\PermissionGroup;

use App\Models\PermissionGroup;

;
use App\Repositories\BaseRepository;

class PermissionGroupRepository extends BaseRepository implements PermissionGroupInterface
{
    public function __construct(PermissionGroup $model)
    {
        $this->model = $model;
    }
    // public function all()
    // {
    //     return ModelsPermissionGroup::all();
    // }

    // public function getPermissiongroup()
    // {
    //     return DB::table('permission_groups')
    //    ->select('*')
    //    ->orderByDesc('id')
    //    ->limit(10)
    //    ->get();
    // }

    // public function deletebyid($id)
    // {
    //     return DB::table('permission_groups')->where('id', $id)->delete();
    // }

    // public function findid($id)
    // {
    //     return ModelsPermissionGroup::all()->find($id);
    // }

    // public function update(array $inputs, array $conditions = ['id' => null])
    // {
    // }
}
