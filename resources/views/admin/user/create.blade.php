@extends('template.admin.master')
@section('main_content')
<section class="content">
    <div class="row">
        <div class="col-md-10">
            <h2>Thêm người dùng</h2>
        </div>
    </div>
    <div class="card">
        <div class="card-body p4">
            @include('template.errorValidate')
            {!! Form::open(['method' => 'post', 'url' => route('user.store'), 'enctype' => 'multipart/form-data']) !!}
                @include('admin.user.form')
                {!! Form::submit('Thêm', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</section>
@endsection