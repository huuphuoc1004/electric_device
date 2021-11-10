@extends('template.electronic.master')
@section('main_content')
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">login-register</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login register wrapper start -->
        <div class="login-register-wrapper">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row">
                        <!-- Login Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap  pr-lg-50">
                                <h2>Sign In</h2>
                                @if (session('msgLogin'))
                                    <div class="alert alert-danger">
                                        <p>{{ session('msgLogin') }}</p>
                                    </div>
                                @endif
                                {!! Form::open(['method' => 'POST', 'route' => ['auth.login_user']]) !!}
                                    <div class="single-input-item">
                                        <input type="email" name="email" placeholder="Enter your Email"/>
                                    </div>
                                    <div class="single-input-item">
                                        {{ Form::password('password', ['placeholder' =>  'Enter your Password']) }}
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                    <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                                </div>
                                            </div>
                                            <a href="#" class="forget-pwd">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="sqr-btn">Login</button>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <!-- Login Content End -->

                        <!-- Register Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap mt-md-34 mt-sm-34">
                                <h2>Singup Form</h2>
                                @if (session('msgRegister'))
                                    <div class="alert alert-danger">
                                        <p>{{ session('msgRegister') }}</p>
                                    </div>
                                @endif
                                {!! Form::open(['method' => 'POST', 'route' => ['auth.register_user']]) !!}
                                    <div class="single-input-item">
                                        {{ Form::text('name', null, ['placeholder' => 'Full Name']) }}
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" name="email" placeholder="Enter your Email" required />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                {{ Form::password('password', ['placeholder' =>  'Enter your Password']) }}
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                {{ Form::password('password', ['placeholder' =>  'Repeat your Password']) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        {{ Form::text('phone', null, ['placeholder' => 'Your Phone']) }}
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="subnewsletter">
                                                    <label class="custom-control-label" for="subnewsletter">Subscribe Our Newsletter</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="sqr-btn">Register</button>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->
@stop