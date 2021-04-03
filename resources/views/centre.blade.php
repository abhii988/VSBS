@extends('layouts.master')
@section('dash')
@include('sidebar.centre')
@endsection
@section('content')
<html>
    <style>
        h1 {
        text-align: center;
        padding: 2%;
        }
    </style>
    <body>
        <h1>Service Centres</h1>
        <span>Below are the Service Centres available for servicing.</span>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Name</th>
                <th>Details</th>
            </tr>
            </thead>
            <tr>
                <td rowspan="3">tasbir</td>
                <td>Name</td>
                <td>Name2</td>
                <td>Name1</td>
            </tr>
            <tbody>
            <tr>
                <td rowspan="3">tasbir</td>
                <td>Name</td>
                <td>Name2</td>
                <td>Name1</td>
            </tr>
            </tbody>
        </table>
    </body>
</html>
@endsection
