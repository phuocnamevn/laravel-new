<?php

namespace App\Repositories\PermissionGroup;

use App\Models\PermissionGroup;
use App\Repositories\BaseRepository;

class PermissionGroupRepository extends BaseRepository implements PermissionGroupInterface
{
    public function __construct(PermissionGroup $model)
    {
        $this->model = $model;
    }
}
