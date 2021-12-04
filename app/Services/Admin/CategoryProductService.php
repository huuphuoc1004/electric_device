<?php
namespace App\Services\Admin;

use App\Models\CategoryProduct;
use Illuminate\Support\Facades\Storage;

class CategoryProductService extends BaseService
{
    public function __construct(CategoryProduct $categoryProduct)
    {
        $this->model = $categoryProduct;
    }

    public function getCategoryProduct($limit = 5) 
    {
        return $this->model->get();
    }

    public function createHasImages($inputs, $file)
    {
        $picture = $this->uploadImage($file, $this->model);
        $inputs['picture'] = $picture;
        $this->model->create($inputs);
        
        return $this->model;
    }

    public function checkImageEmpty($inputs, $picture)
    {
        if (!empty($picture)) {
            $inputs['picture'] = $this->uploadImage($picture, $this->model);
        }

        return $inputs;
    }

    public function updateHasImages($inputs, $id, $picture)
    {
        $categoryUser = $this->model->findOrFail($id);
        $inputs = $this->checkImageEmpty($inputs, $picture);
        if (!empty($inputs['picture'])) {
            $folder = detectFolderByModel($this->model);
            Storage::delete($folder . $categoryUser->picture);
        }

        return $categoryUser->update($inputs);
    }

    public function deleteHasImages($id)
    {
        $categoryUser = $this->model->findOrFail($id);
        $folder = detectFolderByModel($this->model);
        Storage::delete($folder . $categoryUser->picture);

        return $categoryUser->delete();
    }

    public function find($data)
    {
        $limit = $limit ?? config('common.pagination.default');
        return CategoryProduct::where('name', 'LIKE', '%' . $data . '%')
        ->paginate($limit);
    }

}