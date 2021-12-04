<?php
namespace App\Services\Admin;

use Illuminate\Support\Facades\Storage;

class BaseService
{
    protected $model;

    public function getModel() 
    {
        $limit = $limit ?? config('common.pagination.default');
        return $this->model->orderBy('updated_at', 'DESC')->paginate($limit);
    }

    public function createModel($inputs)
    {
        return $this->model->create($inputs);
    }

    public function getModelUpdate($id)
    {
        return $this->model->findOrFail($id);
    }

    public function updateModel($inputs, $id)
    {
        $model = $this->model->findOrFail($id);

        return $model->update($inputs);
    }

    public function deleteModel($id)
    {
        $model = $this->model->findOrFail($id);

        return $model->delete();
    }

    public function uploadImage($file, $model)
    {
        $folder = detectFolderByModel($model);
        $path = Storage::putFile($folder, $file);
        $explodePath = explode('/', $path);
        $picture = end($explodePath);
    
        return $picture;
    }
    
}
