<?php
namespace App\Services\Admin;

use App\Models\CategoryProduct;


class CategoryProductService extends BaseService
{
    public function __construct(CategoryProduct $categoryProduct)
    {
        $this->model = $categoryProduct;
    }

    public function getCategoryProduct($limit = 5) 
    {
        return $this->model->paginate($limit);
    }

}