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
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th data-breakpoints="sm xs">Detail</th>
                                        <th data-breakpoints="xs">Amount</th>
                                        <th data-breakpoints="xs md">Stock</th>
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="/css/admin/images/ecommerce/1.png" width="48" alt="Product img"></td>
                                        <td><h5>Simple Black Clock</h5></td>
                                        <td><span class="text-muted">randomised words even slightly believable</span></td>
                                        <td>$16.00</td>
                                        <td><span class="col-green">In Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green" data-toggle="modal" data-target="#myModal"><i class="zmdi zmdi-receipt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="/css/admin/images/ecommerce/10.png" width="48" alt="Product img"></td>
                                        <td><h5>Brone Candle</h5></td>
                                        <td><span class="text-muted">It is a long established  will be distracted</span></td>
                                        <td>$15.00</td>
                                        <td><span class="col-amber">Low Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="/css/admin/images/ecommerce/11.png" width="48" alt="Product img"></td>
                                        <td><h5>Wood Simple Clock</h5></td>
                                        <td><span class="text-muted">There passages of Lorem Ipsum available</span></td>
                                        <td>$16.00</td>
                                        <td><span class="col-amber">Low Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="/css/admin/images/ecommerce/5.png" width="48" alt="Product img"></td>
                                        <td><h5>Unero Small Bag</h5></td>
                                        <td><span class="text-muted">It is a long established fact that a distracted</span></td>
                                        <td>$23.00</td>
                                        <td><span class="col-red">Out Of Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="/css/admin/images/ecommerce/6.png" width="48" alt="Product img"></td>
                                        <td><h5>Simple Black Clock</h5></td>
                                        <td><span class="text-muted">Contrary to popular belief, simply random text</span></td>
                                        <td>$16.00</td>
                                        <td><span class="col-green">In Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="/css/admin/images/ecommerce/2.png" width="48" alt="Product img"></td>
                                        <td><h5>Brone Lamp Glasses</h5></td>
                                        <td><span class="text-muted">All the Lorem Ipsum generators on predefined chunks</span></td>
                                        <td>$12.00</td>
                                        <td><span class="col-green">In Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="/css/admin/images/ecommerce/3.png" width="48" alt="Product img"></td>
                                        <td><h5>Simple Black Clock</h5></td>
                                        <td><span class="text-muted">established fact that a be distracted</span></td>
                                        <td>$22.00</td>
                                        <td><span class="col-red">Out Of Stock</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>        
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">                            
                            <ul class="pagination pagination-primary m-b-0">
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Trigger the modal with a button -->
<a class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</a>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create User</h4>
      </div>
      <div class="modal-body">
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">                                    
                        <input type="text" class="form-control" placeholder="Username" />
                    </div>
                    <div class="form-group">                                   
                        <input type="password" class="form-control" placeholder="Password" />
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" class="form-control no-resize" placeholder="Description"></textarea>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="card-inside-title">Danh mục</div>
            <select class="form-control show-tick">
                <option>Select Category --</option>
                <option>Web Design</option>
                <option>Photography</option>
                <option>Technology</option>
                <option>Lifestyle</option>
                <option>Sports</option>
            </select>
            <div>DateTime</div>
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control datetimepicker" placeholder="Please choose date & time...">
                    </div>
                </div>
            </div>
            <div class="row-clearfix">
                <div>Giới tính</div>
                <div class="form-group">
                    <div class="radio inlineblock m-r-20">
                        <input type="radio" name="gender" id="male" class="with-gap" value="option1">
                        <label for="male">Male</label>
                    </div>                                
                    <div class="radio inlineblock">
                        <input type="radio" name="gender" id="Female" class="with-gap" value="option2" checked="">
                        <label for="Female">Female</label>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <label>Email Address</label>
                <div class="input-group masked-input mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                    </div>
                    <input type="text" class="form-control email" placeholder="Ex: example@example.com">
                </div>
            </div>
            <div class="row clearfix">
                
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Create</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop