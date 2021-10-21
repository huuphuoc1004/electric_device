<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectronicController extends Controller
{
    public function index()
    {
        return view('electronic.index');
    }

    public function allProduct() 
    {
        return view('electronic.all_product');
    }

    public function category()
    {
        return view('electronic.category');
    }

    public function productDetail()
    {
        return view('electronic.product');
    }

    public function cart()
    {
        return view('electronic.cart');
    }

    public function checkout() 
    {
        return view('electronic.checkout');
    }

    public function wishlist() 
    {
        return view('electronic.wistlist');
    }

    public function about() 
    {
        return view('electronic.about');
    }

    public function contact() 
    {
        return view('electronic.contact');
    }

    public function blog()
    {
        return view('electronic.blog');
    }

    public function blogDetail()
    {
        return view('electronic.blog_detail');
    }
}
