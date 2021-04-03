@extends('layouts.master')
@section('dash')
@include('sidebar.booking')
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

		<h1>Book a Servicing for your Vehicle</h1>

		<div class="container">
			@if (Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
			<form action="{{route('booking.store')}}" method="post">
				@csrf
				<label>Booking Date:</label>
				<input type="date" placeholder="Company..." name="date" class="form-control @error('date') is-invalid @enderror">
					@error('date')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				<label>Select your Vehicle:</label>
				<select name="vehicle">
					@foreach( $user_vehicles as $uv )
						<option value="{{ $uv->model }}">{{ $uv->model }}</option>
					@endforeach
				</select>

				<label>Select your nearest Service Centre:</label>
				<select>
					<option value="centre1">L.I. Service Center, Dhapasi, Kathmandu</option>
					<option value="centre2">New Shiv Service, Sinamangal, Kathmandu</option>
					<option value="centre3">New Shiv Service, Baneshwor, Kathmandu</option>
					<option value="centre4">L.I. Auto Services, Kupondole, Lalitpur</option>
				</select>

				<label>Kilometers Ran:</label>
				<input type="number" placeholder="1234 KM..." name="vehicle_km" class="form-control @error('vehicle_km') is-invalid @enderror">
					@error('vehicle_km')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				<label>Additional Description:</label>
				<textarea placeholder="Additional information regarding the servicing..." style="height:200px" name="booking_desc" class="form-control @error('booking_desc') is-invalid @enderror"></textarea>
					@error('booking_desc')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				<input type="submit" value="Submit">
			</form>
		</div>

	</body>
</html>
@endsection
