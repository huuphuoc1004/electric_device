<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryUserRequest;
use App\Services\Admin\CategoryProductService;
use App\Services\Admin\CategoryUserService;
use Illuminate\Http\Request;

class CategoryUserController extends Controller
{
    public function __construct(CategoryUserService $categoryUserService)
    {
        $this->categoryUserService = $categoryUserService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryUsers = $this->categoryUserService->getModel();
        return view('admin.category_user.index', compact('categoryUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryUserRequest $request)
    {
        $categoryUserParam = $request->all();
        if ($this->categoryUserService->createModel($categoryUserParam)) {
            return redirect()->route('category_user.index')->with('msgAddSuccess', 'Thêm loại người dùng thành công.');
        } else {
            return redirect()->route('category_user.create')->with('msgAddFail', 'Thêm loại người dùng không thành công.');
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
        $categoryUser = $this->categoryUserService->getModelUpdate($id);

        return view('admin.category_user.edit', compact('categoryUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUserRequest $request, $id)
    {
        $categoryUserParam = $request->all();
        if ($this->categoryUserService->updateHasImages($categoryUserParam, $id)) {
            return redirect()->route('category_user.index')->with('msgUpdateSuccess', 'Cập nhật loại người dùng thành công');
        } else {
            return redirect()->route('category_user.edit')->with('msgAddFail', 'Sửa danh mục không thành công.');
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
        if ($this->categoryUserService->deleteModel($id)) {
            return redirect()->route('category_user.index')->with('msgDeleteSuccess', 'Xóa thành công');
        } else {
            return redirect()->route('category_user.index')->with('msgDeleteFail', 'Xóa không thành công');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $categoryUsers = $this->categoryUserService->find($search);
        
        return view('admin.category_user.index')->with(compact('categoryUsers'));
    }
}
