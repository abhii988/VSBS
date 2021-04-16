@extends('admin.layouts.master')
@section('dash')
    @include('admin.sidebar.service')
@endsection
@section('content')
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .footer{position: relative; height: 10px;}

            * {box-sizing: border-box;}

            label {
                color: aliceblue;
            }

            input[type=text], input[type=date], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=submit] {
                background-color: #71afd8;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #3077a7;
            }

            .container {
                border-radius: 5px;
                background-color: #93a0ed;
                padding: 20px;
            }
            h1 {
                text-align: center;
                padding: 2%;
            }
        </style>
    </head>
    <body>
    <h1>Please Enter the Accessories Details</h1>
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif
        <form action="{{route('accessories.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label>Enter the Accessory's Name:</label>
            <input type="text" placeholder="Name..." name="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label>Enter the Accessory's Price:</label>
            <input type="text" placeholder="Price..." name="price" class="form-control @error('price') is-invalid @enderror">
            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label>Enter the Accessory's Total Reviews:</label>
            <input type="text" placeholder="Total Number of Reviews..." name="rating" class="form-control @error('rating') is-invalid @enderror">
            @error('rating')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label>Enter the Accessory's Total Rating:</label>
            <input type="text" placeholder="Total Number of Rating Stars..." name="total_ratings" class="form-control @error('total_ratings') is-invalid @enderror">
            @error('total_ratings')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label>Enter the Accessory's Image:</label>
            <input type="file" name="image" placeholder="image" class="form-control">

            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    </body>
    </html>
@endsection
