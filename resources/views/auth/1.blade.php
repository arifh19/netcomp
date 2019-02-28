<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title Page-->
    <title>Net Competition 2019</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('/css/theme.css') }}" rel="stylesheet" media="all">

</head>

    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">

            </div>

        </div>
        @include('sweetalert::alert')
        <!-- Jquery JS-->
        <script src="{{ asset('/vendor/jquery-3.2.1.min.js') }}"></script>
        <!-- Bootstrap JS-->
        <script src="{{ asset('/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
        <!-- Vendor JS       -->

        <!-- Main JS-->
        <script src="{{ asset('/js/main.js')}}"></script>

    </body>
</html>
