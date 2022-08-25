<?php

namespace App\Repositories\Customer;

use App\Models\Customer;
use App\Repositories\BaseRepository;

class CustomerRepository extends BaseRepository implements CustomerInterface
{
    public function __construct(Customer $model)
    {
        $this->model = $model;
    }
}
