@extends('template.admin.master')
@section('main_content')
<section class="content">
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <form class="card auth_form">
                <div class="header">
                    <img class="logo" src="/css/admin/images/logo.svg" alt="">
                    <h5 style="padding-left: 10px">Sign Up</h5>
                    <span style="padding-left: 10px">Register a new membership</span>
                </div>
                <div class="body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter Email">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                        </div>
                    </div>                        
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Password">
                        <div class="input-group-append">                                
                            <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                        </div>                            
                    </div>
                    <div class="checkbox">
                        <input id="remember_me" type="checkbox">
                        <label for="remember_me">I read and agree to the <a href="javascript:void(0);">terms of usage</a></label>
                    </div>
                    <a href="index.html" class="btn btn-primary btn-block waves-effect waves-light">SIGN UP</a>
                    <div class="signin_with mt-3">
                        <a class="link" href="sign-in.html">You already have a membership?</a>
                    </div>
                </div>
            </form>
            <div class="copyright text-center">
                &copy;
                <script>document.write(new Date().getFullYear())</script>,
                <span><a href="templatespoint.net">Templates Point</a></span>
            </div>
        </div>
        <div class="col-lg-8 col-sm-12">
            <div class="card">
                <img src="/css/admin/images/signup.svg" style="height: 650px" alt="Sign Up" />
            </div>
        </div>
    </div>
</section>
@stop