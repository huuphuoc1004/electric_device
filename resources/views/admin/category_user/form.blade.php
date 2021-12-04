<div class="form-group">
    {{ Form::label('name', 'Tên người dùng', ['class' => 'form-group']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nhập tên']) }}
</div>
@if(isset($user))
    <div class="form-group">
        {{ Form::label('email', 'Email', ['class' => 'form-group']) }}
        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Nhập email', 'readonly' => 'readonly']) }}
    </div>
@endif
@if(!isset($user))
    <div class="form-group">
        {{ Form::label('email', 'Email', ['class' => 'form-group']) }}
        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Nhập email']) }}
    </div>
@endif
<div class="form-group">
    {{ Form::label('phone', 'Số điện thoại', ['class' => 'form-group']) }}
    {{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Nhập số điện thoại']) }}
</div>
<div class="form-group">
    {{ Form::label('password', 'Password', ['class' => 'form-group']) }}
    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Nhập mật khẩu']) }}
</div>
<div class="form-group">
    {{ Form::label('password', 'Password', ['class' => 'form-group']) }}
    {{ Form::password('password', ['class' => 'form-control', 'name' => 'confirm_password', 'placeholder' =>  'Confirm Password']) }}
</div>
<div class="form-group">
    {{ Form::label('category_user_id', 'Loại người dùng', ['class' => 'form-group']) }}
    {!! Form::select('category_user_id', $categoryUser, null, ['class' => 'form-control']) !!}
</div>