<!doctype html>
    <html class="no-js " lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Admin</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
    <link href="{{ asset('css/admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/plugins/charts-c3/plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/plugins/morrisjs/morris.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/admin/plugins/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/admin/plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/admin/plugins/jquery-spinner/css/bootstrap-spinner.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/admin/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('css/admin/images/loader.svg') }}" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
      <input type="search" value="" placeholder="Search..." />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>