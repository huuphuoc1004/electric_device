@extends('template.admin.master')
@section('main_content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Product List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">eCommerce</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Create User
        </button>
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Create User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input v-model="user.name" type="text" class="form-control" placeholder="Name...">
                        </div>
                        <div class="form-group">
                            <label>Category_User_ID</label>
                            <select v-model="user.category_user_id" class="form-control">
                                <option>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input v-model="user.email" type="text" class="form-control" placeholder="Email...">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input v-model="user.password" type="password" class="form-control" placeholder="Password...">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input v-model="user.confirm_password" type="password" class="form-control" placeholder="Password...">
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-primary">Add User</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>CategoryProduct</th>
                                        <th style="width: 300px">Picture</th>
                                        <th style="width: 400px">Description</th>
                                        <th>Price (đ)</th>
                                        <th style="width: 200px">Discount (%)</th>
                                        <th>Review</th>
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id}}</td>
                                            <td>{{ $product->name}}</td>
                                            <td>{{ $product->categoryProduct->name}}</td>
                                            <td><img src="{{ $product->pictureUrl}}" style="width: 200px; height: 150px" alt="product"></td>
                                            <td>{{ $product->description}}</td>
                                            <td>{{ number_format($product->price) }}</td>
                                            <td>{{ $product->discount}}</td>
                                            <td>
                                                @for ($i = 1; $i < $product->review ; $i++)
                                                    <span class="fa fa-star checked"></span>
                                                @endfor
                                                @for ($i = $product->review + 1; $i < 6 ; $i++)
                                                    <span class="fa fa-star"></span>
                                                @endfor 
                                                <p> {{$product->review}} </p>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach     
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pagination pagination-primary m-b-0 page-item">                            
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop