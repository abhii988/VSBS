@extends('admin.layouts.master')
@section('dash')
@include('admin.sidebar.service')
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
        @if( count($user_bookings) < 1 )
            <h1>There are no bookings present</h1>
        @else
            <h1>Booking Details</h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>S.N.</th>
                <th>Date</th>
                <th>Vehicle</th>
                <th>Booking Description</th>
                <th>Status</th>
                <th>Edit</th>
            </tr>
            </thead>
            @foreach( $user_bookings as $ub )
                <tbody>
                <tr>
                    <td>
                        {{$ub->id}}
                    </td>
                    <td>
                        {{$ub->date}}
                    </td>
                    <td>
                        {{$ub->vehicle}}
                    </td>
                    <td>
                        {{ $ub->booking_desc }}
                    </td>
                    <td>
                        {{ $ub->status }}
                    </td>
                    <td>
                        <a href="#"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        @endif
	</body>
</html>
@endsection
