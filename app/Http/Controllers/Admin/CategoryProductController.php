<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryProductCreateRequest;
use App\Http\Requests\CategoryProductUpdateRequest;
use App\Services\Admin\CategoryProductService;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(CategoryProductService $categoryProductService)
    {
        $this->categoryProductService = $categoryProductService;
    } 
    public function index()
    {
        $categoryProducts = $this->categoryProductService->getModel();
        return view('admin.category_product.index', compact('categoryProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryProductCreateRequest $request)
    {
        $categoryProductParam = $request->validated();
        if ($this->categoryProductService->createHasImages($categoryProductParam, $request->file('file'))) {
            return redirect()->route('category_product.index')->with('msgAddSuccess', 'Thêm loại sản phẩm thành công.');
        } else {
            return redirect()->route('category_product.create')->with('msgAddFail', 'Thêm loại sản phẩm không thành công.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryProduct = $this->categoryProductService->getModelUpdate($id);

        return view('admin.category_product.edit', compact('categoryProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryProductUpdateRequest $request, $id)
    {
        $categoryProductParam = $request->validated();
        if ($this->categoryProductService->updateHasImages($categoryProductParam, $id, $request->file('file'))) {
            return redirect()->route('category_product.index')->with('msgUpdateSuccess', 'Sửa loại sản phẩm thành công');
        } else {
            return redirect()->route('category_product.edit')->with('msgUpdateFail', 'Sửa loại sản phẩm không thành công');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->categoryProductService->deleteHasImages($id)) {
            return redirect()->route('category_product.index')->with('msgDeleteSuccess', 'Xóa thành công');
        } else {
            return redirect()->route('category_product.index')->with('msgDeleteFail', 'Xóa không thành công');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $categoryProducts = $this->categoryProductService->find($search);
        
        return view('admin.category_product.index')->with(compact('categoryProducts'));
    }
}
