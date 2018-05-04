@extends('layouts.app')

@section("content")
	<div class="card">
		<div class="card-header">
			Profile
		</div>
		<div class="card-body">
			<form action="{{ route('admin.update', ["id"=>$user->id]) }}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="first_name">First Name:</label>
			    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">
				</div>
				<div class="form-group">
					<label for="last_name">Last Name:</label>
			    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
			    <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
				</div>
				<button type="submit" class="btn btn-info">Submit</button>
			</form>
		</div>
	</div>

@endsection