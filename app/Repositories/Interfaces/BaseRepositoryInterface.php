<?php

namespace App\Repositories\Interfaces;

interface BaseRepositoryInterface
{
    public function paginate(array $input = [], $perPage = 10);

    public function save(array $input, array $conditions = []);

    public function findById($id);

    public function deleteById($id);

    public function getAll();
}
