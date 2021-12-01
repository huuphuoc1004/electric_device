<?php
namespace App\Services\Admin;

use App\Models\User;


class UserService extends BaseService
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getUser($limit=10) 
    {
        return $this->model->paginate($limit);
    }

    public function create($inputs)
    {
        return $this->model->create($inputs);
    }

}