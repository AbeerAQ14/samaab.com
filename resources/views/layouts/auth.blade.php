<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;5{{asset('')}}00;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/demo2/style.css')}}">
    <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.png')}}" />
</head>
<body>
<div class="main-wrapper">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            @section('content')
            @show
        </div>
    </div>
</div>

<script src="{{asset('admin_assets/vendors/core/core.js')}}"></script>
<script src="{{asset('admin_assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('admin_assets/js/template.js')}}"></script>
</body>
</html>
