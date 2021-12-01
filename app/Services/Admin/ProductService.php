<?php
namespace App\Services\Admin;

use App\Models\Product;
use App\Models\User;


class ProductService extends BaseService
{
    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function getProduct($limit = 5) 
    {
        return $this->model->paginate($limit);
    }

    public function create($inputs, $file)
    {
        $picture = $this->uploadImage($file, $this->model);
        $inputs['picture'] = $picture;
        $this->model->create($inputs);
        
        return $this->model;
    }

}