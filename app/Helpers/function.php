<?php

function detectFolderByModel($model)
{
    switch (get_class($model)) {
        case \App\Models\User::class;
            return 'images/user';
            break;
        case \App\Models\CategoryProduct::class:
            return 'images/category_product/';
            break;
        case \App\Models\Product::class:
            return 'images/product/';
            break;
        default:
            return '';
    }
}
