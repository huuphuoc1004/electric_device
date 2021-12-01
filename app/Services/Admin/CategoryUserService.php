<?php
namespace App\Services\Admin;

use App\Models\CategoryUser;

class CategoryUserService extends BaseService
{
    public function __construct(CategoryUser $categoryUser)
    {
        $this->model = $categoryUser;
    }

    public function getUserForSelect()
    {
        return $this->model->pluck('name', 'id');
    }

}