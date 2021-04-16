@extends('admin.layouts.master')
@section('dash')
    @include('admin.sidebar.accessories')
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
            #add {
                position: relative;
                left: 230px;
            }
        </style>
    </head>
    <body>
    @if (count($accessories)<1)
        <h1>There are no accessories here. Please <a href="{{ route('admin.accessories.create') }}">Click Here</a> to add Accessories.</h1>
    @else
    <h1>Accessories Details <a id="add" class="btn btn-primary" href="{{ route('admin.accessories.create') }}">Add</a></h1>
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>S.N.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Reviews</th>
                    <th>Ratings</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($accessories as $ac)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td><img src="/image/{{ $ac->image }}" width="100px"></td>
                        <td>{{ $ac->name }}</td>
                        <td>{{ $ac->price }}</td>
                        <td>{{ $ac->rating }}</td>
                        <td>{{ $ac->total_ratings }}</td>
                        <td>
                            <form action="{{ route('accessories.destroy',$ac->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('accessories.edit',[$ac->id]) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {!! $accessories->links() !!}
        @endif
    </div>
    </body>
    </html>
@endsection
