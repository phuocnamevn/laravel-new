<?php

namespace App\Repositories\Interfaces;

interface PermissionGroupInterface
{
    public function all();

    public function getPermissiongroup();

    public function deletebyid($id);

    public function findid($id);

    public function update(array $input, array $conditions = []);
}
