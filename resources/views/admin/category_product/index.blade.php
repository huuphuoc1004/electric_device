@extends('template.admin.master')
@section('main_content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>BẢNG DANH MỤC SẢN PHẨM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Danh mục sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="row">
                <div class="pl-4 pt-3 col-3">
                  <a href="{{ route('category_product.create') }}">
                      <button type="button" class="btn btn-primary">Thêm danh mục sản phẩm</button>
                  </a>
                </div>
                <div class="col-4"></div>
                <div class="col-4 pl-4 pt-3 row">
                    {!! Form::open(['method' => 'GET', 'url' => route('category_product.search')]) !!}
                        {{ Form::text('search', null, ['class' => 'form-control col-6', 'placeholder' =>  'Nhập dữ liệu', 'style' => 'float:left; width: 240px; margin-right: 10px;']) }}
                        {!! Form::submit( 'Tìm kiếm', ['class' => 'btn btn-warning col-4', 'style' => 'float:left']) !!}
                    {!! Form::close() !!}
                </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                @include('template.admin.msgSuccess')
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>Tên loại sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th style="width: 170px">Hành động</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($categoryProducts as $categoryProduct)
                        <tr>
                            <td>{{ $categoryProduct->name }}</td>
                            <td><img src="{{ $categoryProduct->pictureUrl }}" style="width: 200px; height: 150px" alt=""></td>
                            <td>
                                <a href="{{ route('category_product.edit', $categoryProduct->id) }}" class="btn btn-success" style="width: 70px; float:left; margin-right: 4px">Sửa</a>
                                {!! Form::open(['method' => 'DELETE', 'url' => route('category_product.destroy', $categoryProduct->id)]) !!}
                                  {!! Form::submit('Xóa', ['class' => 'btn btn-danger', 'style' => 'width: 70px; float:left']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <div class="alert alert-danger">Không tìm thấy danh mục người dùng</div>
                        </tr>
                    @endforelse
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Tên loại sản phẩm</th>
                      <th>Hình ảnh</th>
                      <th style="width: 170px">Hành động</th>
                    </tr>
                  </tfoot>
                </table>
                <nav class="mt-3 pagination justify-content-center">
                    {{ $categoryProducts->links() }}
                </nav>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@stop