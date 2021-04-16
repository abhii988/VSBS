@extends('admin.layouts.master')
@section('dash')
@include('admin.sidebar.users')
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
            .table {
                margin: 0 0 40px 0;
                width: 100%;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
                display: table;
            }
            .trow {
                display: table-row;
                background: #f6f6f6;
            }
            .trow:nth-of-type(odd) {
                background: #e9e9e9;
            }
            .trow.header {
                font-weight: 900;
                color: #ffffff;
                background: #ea6153;
            }
            .trow.blue {
                background: #2980b9;
            }
            .cell {
                padding: 6px 12px;
                display: table-cell;
            }
		</style>
	</head>
	<body>
    @if( count($users) < 1 )
        <h1>There are no Users present!</h1>
    @else
        <h1>The users that can use the system.</h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>
                        S.N.
                    </th>
					<th>
						Name
					</th>
					<th>
						Type
					</th>
                    <th>
                        Email
                    </th>
                    <th>
                        Contact
                    </th>
				</tr>
            </thead>
				@foreach( $users as $u )
                <trow>
					<tr>
                        <td>
                            {{$u->id}}
                        </td>
						<td>
							{{$u->name}}
						</td>
						<td>
                            {{$u->type}}
						</td>
                        <td>
                            {{$u->email}}
                        </td>
                        <td>
                            {{$u->contact}}
                        </td>
					</tr>
				@endforeach
                </trow>
			</table>
{{--            <div class="table">--}}

{{--                <div class="trow header blue">--}}
{{--                    <div class="cell">--}}
{{--                        Name--}}
{{--                    </div>--}}
{{--                    <div class="cell">--}}
{{--                        Email--}}
{{--                    </div>--}}
{{--                    <div class="cell">--}}
{{--                        Password--}}
{{--                    </div>--}}
{{--                    <div class="cell">--}}
{{--                        Active--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="trow">--}}
{{--                    @foreach( $users as $u )--}}
{{--                        <div class="cell" data-title="Username">--}}
{{--                        {{$u->name}}--}}
{{--                        </div>--}}
{{--                        <div class="cell" data-title="Email">--}}
{{--                            {{$u->email}}--}}
{{--                        </div>--}}
{{--                        <div class="cell" data-title="Password">--}}
{{--                            {{$u->type}}--}}
{{--                        </div>--}}
{{--                        <div class="cell" data-title="Active">--}}
{{--                            Yes--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
    @endif
	</body>
</html>
@endsection
