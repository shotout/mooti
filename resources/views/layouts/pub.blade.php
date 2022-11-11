<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? env('APP_NAME') }}</title>
    <link rel="icon" type="image/x-icon" href="{{url('/assets/logo/favicon.jpg')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="Mooti App">
    <meta name="author" content="Mooti App">
    <meta name="description" content="Mooti App, Blockchain, wallet, opensea, collection">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="og:site_name" content="Mooti App">
    <meta name="og:type" content="article">
    <meta name="og:image" content="{{url('/assets/logo/logo.png')}}">
    <meta name="og:url" content="https://mooti.app">

    @stack('page-meta')

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="{{asset('/assets/vendor/fontawesome/css/all.css')}}"
    >
    <link
        rel="stylesheet"
        href="{{asset('/assets/vendor/latest/bootstrap.min.css')}}"
    >

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        h4, h5 {
            font-weight: bold;
        }
        @media only screen and (min-width: 900px) {
            .container {
                padding: 0 100px !important;
            }
        }
    </style>

    @stack('page-css')
</head>
<body>

    @yield('main')

    <script src="{{asset('/assets/vendor/latest/jquery.slim.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/latest/bootstrap.bundle.min.js')}}"></script>
   
    @stack('page-js')
</body>
</html>