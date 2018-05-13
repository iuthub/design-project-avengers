<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	@include("layouts.header", ['home'=>'4'])
	<hr>
	<div class="col-md-12">
		<div style="display: block; margin: 30px">
			<h2 style="margin-bottom: 25px">Feedback</h2>
			<form action="{{ url('contact')}}" method="POST">
				{{ csrf_field() }}
				<div class="row join-user">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name" class="control-label">Name*</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="number" class="control-label">Phone Number*</label>
							<input type="text" name="number" class="form-control">
						</div>
						<div class="form-group">
							<label for="email" class="control-label">E-mail*</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="message" class="control-label">Message</label>
							<textarea name="message" id="message" cols="50" rows="4" class="form-control"></textarea>
						</div>
						<button class="btn btn-danger" type="submit">Send</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>