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
        return $this->model->orderBy('updated_at', 'DESC')->paginate($limit);
    }

    public function create($inputs)
    {
        return $this->model->create($inputs);
    }

    public function getUserUpdate($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($inputs, $id)
    {
        $user = $this->model->findOrFail($id);

        return $user->update($inputs);
    }

    public function delete($id)
    {
        $tour = $this->model->findOrFail($id);

        return $tour->delete();
    }

    public function find($data)
    {
        return User::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere ('email', 'LIKE', '%' . $data . '%')
            ->paginate(6);
    }

}