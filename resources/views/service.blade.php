@extends('layouts.master')
@section('dash')
@include('sidebar.service')
@endsection
@section('content')
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body {font-family: Arial, Helvetica, sans-serif;}
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

		<h1>Book a Servicing for your Vehicle</h3>

		<div class="container">
		<form action="/action_page.php">
			<label>Booking Date:</label>
			<input type="date" id="bdate">

			<label>Select your nearest Service Centre:</label>
			<select>
				<option value="centre1">L.I. Service Center, Dhapasi, Kathmandu</option>
				<option value="centre2">New Shiv Service, Sinamangal, Kathmandu</option>
				<option value="centre3">New Shiv Service, Baneshwor, Kathmandu</option>
				<option value="centre4">L.I. Auto Services, Kupondole, Lalitpur</option>
			</select>

			<label>Kilometers Ran:</label>
			<input type="text" placeholder="1234 KM...">

			<label>Additional Description:</label>
			<textarea placeholder="Additional information regarding the servicing..." style="height:200px"></textarea>

			<input type="submit" value="Submit">
		</form>
		</div>

	</body>
</html>
@endsection
