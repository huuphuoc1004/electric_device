<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    public function categoryProduct()
    {
        return $this->belongsTo(CategoryProduct::class);
    }

    public function getPictureUrlAttribute()
    {
        return $this->picture ? Storage::url(detectFolderByModel($this) . $this->picture) : '';
    }

}
