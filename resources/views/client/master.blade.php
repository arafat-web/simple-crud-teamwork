<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title') - Simple CRUD
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/dataTables.bootstrap5.min.css">

    <script src="{{asset('assets')}}/js/jquery-3.5.1.js"></script>
    <script src="{{asset('assets')}}/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/js/dataTables.bootstrap5.min.js"></script>
</head>

<body>
<!-- navbar -->
@include('client.include.header')
<!-- navbar end -->

<!-- sidebar -->
@include('client.include.sidebar')
<!-- sidebar end -->

<!-- main content -->
@yield('content')
<!-- main content end-->

<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>


</body>

</html>
