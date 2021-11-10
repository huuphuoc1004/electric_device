<?php
namespace App\Services\Admin;

use App\Models\User;


class UserService extends BaseService
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getUser($limit = 5) 
    {
        return $this->model->paginate($limit);
    }

}