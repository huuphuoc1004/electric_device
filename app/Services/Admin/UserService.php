<?php
namespace App\Services\Admin;

use App\Models\User;


class UserService extends BaseService
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function find($data)
    {
        $limit = $limit ?? config('common.pagination.default');
        return User::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere ('email', 'LIKE', '%' . $data . '%')
            ->paginate($limit);
    }

}