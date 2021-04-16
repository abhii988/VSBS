@extends('admin.layouts.master')
@section('content')
    <style>
        .footer{position: relative; height: 10px;}
        h1 {
            text-align: center;
            padding: 2%;
        }
        #add {
            position: relative;
            right: 660px;
        }
    </style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Edit Product <a id="add" class="btn btn-primary" href="{{ route('admin.accessories.index') }}"> Back</a></h1>

            </div>
        </div>
    </div>
{{--    <form action="#" method="POST" enctype="multipart/form-data">--}}
<form action="{{ route('accessories.update',[$accessories->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('Patch')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $accessories->name }}" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" value="{{ $accessories->price }}" class="form-control" placeholder="price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/image/{{ $accessories->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
