<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
