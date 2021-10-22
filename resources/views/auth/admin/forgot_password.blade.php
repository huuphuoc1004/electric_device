@extends('template.admin.master')
@section('main_content')
<section class="content">
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <form class="card auth_form">
                <div class="header">
                    <img class="logo" src="/css/admin/images/logo.svg" alt="">
                    <h5 style="padding-left: 10px">Forgot Password?</h5>
                    <span style="padding-left: 10px">Enter your e-mail address below to reset your password.</span>
                </div>
                <div class="body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter Email">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                        </div>
                    </div>
                    <a href="index.html" class="btn btn-primary btn-block waves-effect waves-light">SUBMIT</a>                        
                    <div class="signin_with mt-3">
                        <a href="javascript:void(0);" class="link">Need Help?</a>
                    </div>
                </div>
            </form>
            <div class="copyright text-center">
                &copy;
                <script>document.write(new Date().getFullYear())</script>,
                <span>Designed by <a href="https://thememakker.com/" target="_blank">ThemeMakker</a></span>
            </div>
        </div>
        <div class="col-lg-8 col-sm-12">
            <div class="card">
                <img src="/css/admin/images/signin.svg" style="height: 650px" alt="Forgot Password"/>
            </div>
        </div>
    </div>
</section>
@stop