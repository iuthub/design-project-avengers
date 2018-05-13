<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.min.css") }}">
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/CSS/profile.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/CSS/fontawesome.css') }}">
	<link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/CSS/owl.transitions.css') }}">
	<link rel="stylesheet" href ="{{ asset('css/circle-rating/css/circle.css') }}">
	<link rel="stylesheet" href="{{ asset('css/circle-rating/sass/circle.scss') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/jQuery/jquery.fullPage.css') }}" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('css/jQuery/jquery.fullPage.js') }}"></script>

	<title> Profile </title>
	<title></title>

</head>
<body>	

		<header>
		<div class="icon">
			<ul class="main">
				<li id="brand">
						<img src="{{ asset('img/LOGO.png') }}" alt="logo">
					</li>
						<li id="search">
						<span class="icons">
			  <i class="fa fa-caret-down" aria-hidden="true"></i>
	         <i class="fa fa-search fa-x" aria-hidden ="true"> </i>
	         	<i class="fa fa-align-left fa-x" aria-hidden="true"></i>
	         	</span>	
							<!--dropdown-->
							<ul class="sub">

								<div class="container">
									<div class="row">
										<div class="col-md-3">
									  	<ul class="content" id="pad">
											<ol>Type</ol>
											<ol class="text">
											<input type="radio" name="movies" value="movies"> Movies
											</ol>
											<ol>
											<input type="radio" name="movies" value="movies"> TV Series
											</ol>
											<ol>
											<input type="radio" name="movies" value="movies"> New Arrivals
											</ol>
											<ol>
											<input type="radio" name="movies" value="movies"> Documentory
											</ol>
									  </ul>
									</div>

								<div class="col-md-3">
								<ul class="content">
								<ol>Country</ol>
								<ol>
									<select class="custom-select" style="width:200px;">
										    <option value="0">All Countries</option>
										    <option value="1">Argentina</option>
										    <option value="2">Austrakia</option>
										    <option value="3">Bahamas</option>
										    <option value="4">Belgium</option>
										    <option value="5">Brazil</option>
										    <option value="6">Canada</option>
										    <option value="7">Chile</option>
										    <option value="8">Chine</option>
										    <option value="9">Denmark</option>
										    <option value="10">Ecuador</option>
										    <option value="11">France</option>
										    <option value="12">Greece</option>
								</select>
								</ol>




								</ul>
								</div><!--col-md-6-->



							<div class="col-md-3">
								<ul class="content">
								<ol>Genres</ol>
								<ol>
									<select class="custom-select" style="width:200px;">
										    <option value="0">All Genres</option>
										    <option value="1">Argentina</option>
										    <option value="2">Austrakia</option>
										    <option value="3">Bahamas</option>
										    <option value="4">Belgium</option>
										    <option value="5">Brazil</option>
										    <option value="6">Canada</option>
										    <option value="7">Chile</option>
										    <option value="8">Chine</option>
										    <option value="9">Denmark</option>
										    <option value="10">Ecuador</option>
										    <option value="11">France</option>
										    <option value="12">Greece</option>
								</select>
								</ol>

								</ul>
								</div><!--col-md-6-->

							<div class="col-md-3">
							
								<ul class="content">
								<ol>Genres</ol>
								<ol>
								<div class="slidecontainer">
 								 <input type="range" min="1" max="100" value="50">
 								</div> 								
								</ol>
								</ul>
								</div><!--col-md-6-->

										</div><!--row-->
									</div><!--container-->
								</ul><!--end class sub-->
							</li>

							
							<li class="hamburger">
							</li>





						</ul>
					</div>
								


		</header>

		<nav class="nav">
			<ul class="nav-i">
			<li>
				<a href="{{ route('users_index') }}">
					<span class="fa fa-tv icon">
					<p>Home</p>
					</span>
				</a>
			</li>
					<li>
						<a href="{{ route('users_movies') }}">
							<span class="fa fa-film icon">
								<p>Movies</p>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-desktop icon">
									<p>Playlist</p>
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span  class="fa fa-ticket icon">
								<p>New Arrivals</p>
							</span>	
						</a>
					</li>
					
					<li>
						<a href="{{ route('users_comings') }}">
							<span class="fa fa-clock-o icon">
								<p>
									Coming Soon
								</p>
							</span>
						</a>
					</li>
			</ul>
		</nav>


@yield('content')


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
<script src ="{{ asset('owlcarousel/carousel.js') }}"></script>
<script src="{{ asset('js/profile.js') }}"></script>


</body>
</html>