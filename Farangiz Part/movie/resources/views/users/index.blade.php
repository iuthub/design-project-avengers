@extends('layouts.app')

@section('content')
	<div class="col-md-12">
		<h1>Welcome User: {{ $user->first_name }} {{ $user->last_name }}</h1>
	</div>
@endsection