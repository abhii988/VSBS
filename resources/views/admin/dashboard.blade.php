@extends('admin.layouts.master')
@section('dash')
@include('admin.sidebar.dashboard')
@endsection
@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>VSBS</title>
        <!-- Favicon -->
        <link href='img/carimg.png' rel='icon' type='image/x-icon'/>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{URL::to('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
        <link rel="stylesheet" href="{{URL::to('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{URL::to('assets/css/argon.css?v=1.2.0')}}" type="text/css">
      </head>
    <style>
        h1 {
            text-align: center;
            padding: 2%;
        }
    </style>
    <body>
        <h1>Dashboard</h1>
        <h4 style="text-align: center">Hello {{ Auth::user()->name }}!</h4>
        <span style="text-align: center">Welcome to your dashboard</span>
    </body>
</html>
@endsection
