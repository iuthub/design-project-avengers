@extends("layouts.app")

@section('content')
	
	<div class="movies">
	</div>

	<script type="text/javascript">
		var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "https://api.themoviedb.org/3/movie/popular?page=1&language=en-US&api_key=cd5b98697cc656b6f9d993276b6ddec5",
		  "method": "GET",
		  "headers": {},
		  "data": "{}"
		};

		$.ajax(settings).done(function (response) {

		  for(let i=0;i<response.results.length;i++){
		  	var movie_video = {
		  		"async": true,
				  "crossDomain": true,
				  "url": "https://api.themoviedb.org/3/movie/"+response.results[i].id+"/videos?api_key=cd5b98697cc656b6f9d993276b6ddec5&language=en-US",
				  "method": "GET",
				  "headers": {},
				  "data": "{}"
		  	};

		  	$.ajax(movie_video).done(function(movie){
		  		$('.movies').append(
		  			"<div class='card' style='width: 100%;'><img class='card-img-top' src='https://image.tmdb.org/t/p/w500/"+response.results[i].poster_path+"' alt='Card image cap'><div class='card-body'><h5 class='card-title'>"+ response.results[i].title +"</h5><p class='card-text'>"+response.results[i].overview+"</p><a href='http://www.youtube.com/watch?v="+movie.results[0].key+"' class='btn btn-primary'>Go somewhere</a></div></div>"
		  		);
		  		// console.log(movie);
		  	});

		  	// console.log(response.results[i]);
		  }
		});
	</script>

@endsection