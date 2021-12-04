<div class="form-group">
    {{ Form::label('name', 'Tên loại sản phẩm', ['class' => 'form-group']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nhập tên danh mục']) }}
</div><br/>
<div class="form-group">
    {{ Form::label('hinhanh', 'Hình ảnh', ['class' => 'form-group']) }}
    {{ Form::file('file') }}<br/>
    @if (isset($categoryProduct) && $categoryProduct->picture)
        {{ Html::image($categoryProduct->picture_url, 'alt', ['width' => 150, 'height' => 100]) }}
    @endif
</div>