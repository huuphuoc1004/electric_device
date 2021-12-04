<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\CategoryUser;
use App\Services\Admin\CategoryUserService;
use App\Services\Admin\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(UserService $userService, CategoryUserService $categoryUserService)
    {
        $this->userService = $userService;        
        $this->categoryUserService = $categoryUserService;
    }
    public function index()
    {
        $users = $this->userService->getUser(3);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryUser = $this->categoryUserService->getUserForSelect();
        return view('admin.user.create', compact('categoryUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $userParam = $request->all();
        if ($this->userService->create($userParam)) {
            return redirect()->route('user.index')->with('msgAddSuccess', 'Thêm người dùng thành công.');
        } else {
            return redirect()->route('user.create')->with('msgAddFail', 'Thêm người dùng không thành công.');
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
        $categoryUser = $this->categoryUserService->getUserForSelect();
        $user = $this->userService->getUserUpdate($id);

        return view('admin.user.edit', compact('categoryUser', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $userParam = $request->all();
        if ($this->userService->update($userParam, $id)) {
            return redirect()->route('user.index')->with('msgUpdateSuccess', 'Cập nhật thành công');
        } else {
            return redirect()->route('user.create')->with('msgAddFail', 'Thêm danh mục không thành công.');
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
        if ($this->userService->delete($id)) {
            return redirect()->route('user.index')->with('msgDeleteSuccess', 'Xóa thành công');
        } else {
            return redirect()->route('user.index')->with('msgDeleteFail', 'Xóa không thành công');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $users = $this->userService->find($search);
        
        return view('admin.user.index')->with(compact('users'));
    }
}
