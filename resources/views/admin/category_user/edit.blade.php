@extends('template.admin.master')
@section('main_content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Sửa người dùng</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary p-4">
                    @include('template.admin.msgUpdateFail')
                    @include('template.errorValidate')
                    {!! Form::model($user, ['method' => 'PUT', 'route' => ['user.update', $user->id], 'enctype' => 'multipart/form-data']) !!}
                        @include('admin.user.form')
                        {!! Form::submit('Sửa người dùng', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@stop