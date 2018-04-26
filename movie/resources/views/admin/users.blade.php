@extends('layouts.app')

@section("content")
	<div class="card">
		<div class="card-body">
			<table class="table table-stripped">
				<thead>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Edit</th>
					<th>Delete</th>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{ $user->first_name }}</td>
							<td>{{ $user->last_name }}</td>
							<td>{{ $user->email }}</td>
							<td><a href="{{ route('profile', ['id'=>$user->id]) }}" class="btn btn-success">Edit</a></td>
							<td><a href="#" class="btn btn-danger">Delete</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection