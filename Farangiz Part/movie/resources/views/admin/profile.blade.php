@extends('layouts.app')

@section("content")
	<div class="card">
		<div class="card-header">
			@if($trashed)
				<a href="{{ route("admin.users") }}" class="btn btn-info">All Users</a>
			@else
				<a href="{{ route("admin.users.trashed") }}" class="btn btn-warning">Recently Deleted Users</a>
			@endif
		</div>
		<div class="card-body">
			<table class="table table-stripped">
				<thead>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					@if($trashed)
						<th>Restore</th>
						<th>Delete</th>
					@else
						<th>Edit</th>
						<th>Trash</th>
					@endif
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{ $user->first_name }}</td>
							<td>{{ $user->last_name }}</td>
							<td>{{ $user->email }}</td>
							@if(Auth::user()->id != $user->id)
								@if($trashed)
									<td><a href="{{ route('admin.user.restore', ['id'=>$user->id]) }}" class="btn btn-success">Restore</a></td>								
									<td><a href="{{ route('admin.user.delete', ['id'=>$user->id]) }}" class="btn btn-danger">Delete</a></td>								
								@else
									<td><a href="{{ route('profile', ['id'=>$user->id]) }}" class="btn btn-success">Edit</a></td>
									<td><a href="{{ route('admin.user.trash', ['id'=>$user->id]) }}" class="btn btn-danger">Trash</a></td>
								@endif
							@endif
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection