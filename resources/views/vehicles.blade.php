@extends('layouts.master')
@section('dash')
@include('sidebar.vehicles')
@endsection
@section('content')
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
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
		@if( count($user_vehicles) < 1 )
			<h1>Please Register your Vehicle</h1>
			<div class="container">
				@if (Session::has('message'))
					<div class="alert alert-success">
						{{Session::get('message')}}
					</div>
				@endif
				<form action="{{route('vehicles.store')}}" method="post">
					@csrf
					<label>Enter your Vehicle's Manufacturer:</label>
					<input type="text" placeholder="Company..." name="company" class="form-control @error('company') is-invalid @enderror">
					@error('company')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror

					<label>Enter your Vehicle's Model:</label>
					<input type="text" placeholder="Model..." name="model" class="form-control @error('model') is-invalid @enderror">
					@error('model')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror

					<label>Enter your Vehicle's Made Year:</label>
					<input type="text" placeholder="Year..." name="made_year" class="form-control @error('made_year') is-invalid @enderror">
					@error('made_year')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror

					<input type="submit" value="Submit">
				</form>
			</div>
		@else
            <h1>Your Vehicles</h1>
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Comapany</th>
                        <th>Model</th>
                        <th>Make Year</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
				@foreach( $user_vehicles as $uv )
                    <tbody>
                        <tr>
                            <td>
                                {{$uv->company}}
                            </td>
                            <td>
                                {{$uv->model}}
                            </td>
                            <td>
                                {{ $uv->made_year }}
                            </td>
                            <td><i class="fas fa-edit"></i></td>
                            <td><i class="fas fa-trash"></i></td>
                        </tr>
                    </tbody>
				@endforeach
			</table>
		@endif
	</body>
</html>
@endsection
