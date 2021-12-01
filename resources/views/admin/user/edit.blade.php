@extends('template.admin.master')
@section('main_content')
    <div id="page-inner" class="col-10">
        <div class="row">
            <div class="col-md-10">
                <h2>Sửa người dùng</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            {{-- @include('template.admin.msgUpdateFail')
                            @include('template.errorValidate') --}}
                            {!! Form::model($user, ['method' => 'PUT', 'route' => ['user.update', $user->id], 'enctype' => 'multipart/form-data']) !!}
                                @include('admin.user.form')
                                {!! Form::submit('Sửa', ['class' => 'btn-submit']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
@endsection