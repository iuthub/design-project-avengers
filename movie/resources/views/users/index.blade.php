@extends('users.layout')

@section('content')
	
	<div class="owl-carousel">	
		<div class ="slider-one slide">
		  <img src ="{{ asset('owlcarousel/images/flash.jpg') }}" alt ="flash">
		</div>
		<div class = "slider-two slide">
		   <img src ="{{ asset("owlcarousel/images/human.jpg") }}" alt ="human">
		</div>
		   <div class ="slider-three slide">
		    <img src ="{{ asset('owlcarousel/images/sheralt.jpg') }}" alt ="sherlock">
		</div>
	</div>

<div class="container">

<ul class="dashboard-genres-pro">
				<li>
					<img src="{{ asset('images/drama.png') }}" alt="Drama">
					<h6>Drama</h6>
				</li>
				<li class="active">
					<img src="{{ asset('images/comedy.png') }}" alt="Comedy">
					<h6>Comedy</h6>
				</li>
				<li>
					<img src="{{ asset('images/action.png') }}" alt="Action">
					<h6>Action</h6>
				</li>
				<li>
					<img src="{{ asset('images/romance.png') }}" alt="Romance">
					<h6>Romance</h6>
				</li>
				<li>
					<img src="{{ asset('images/horror.png') }}" alt="Horror">
					<h6>Horror</h6>
				</li>
				<li>
					<img src="{{ asset('images/fantasy.png') }}" alt="Fantasy">
					<h6>Fantasy</h6>
				</li>
				<li>
					<img src="{{ asset('images/sci-fi.png') }}" alt="Sci-Fi">
					<h6>Sci-Fi</h6>
				</li>
				<li>
					<img src="{{ asset('images/thriller.png') }}" alt="Thriller">
					<h6>Thriller</h6>
				</li>
				<li>
					<img src="{{ asset('images/western.png') }}" alt="Western">
					<h6>Western</h6>
				</li>
				<li>
					<img src="{{ asset('images/adventure.png') }}" alt="Adventure">
					<h6>Adventure</h6>
				</li>
				<li>
					<img src="{{ asset('images/animation.png') }}" alt="Animation">
					<h6>Animation</h6>
				</li>
				<li>
					<img src="{{ asset('images/documentary.png') }}" alt="Documentary">
					<h6>Documentary</h6>
				</li>
			</ul>
		</div>

<div class="dashboard-container">
				
				<h4 class="heading-margin-bottom">Comedies</h4>
							
				<section class='container'>
		        <div class="row">
		            <div class="col-md-12" id="new_releases">
		                <div class="card-columns" id="section_cards"></div>
		            </div>
		        </div>
		    </section>
				</div><!-- close .row -->

				{{-- 
				<ul class="page-numbers">
					<li><a class="previous page-numbers" href="#!"><i class="fa fa-chevron-left"></i></a></li>
					<li><span class="page-numbers current">1</span></li>
					<li><a class="page-numbers" href="#!">2</a></li>
					<li><a class="page-numbers" href="#!">3</a></li>
					<li><a class="page-numbers" href="#!">4</a></li>
					<li><a class="next page-numbers" href="#!"><i class="fa fa-chevron-right"></i></a></li>
				</ul> --}}
				
						
			</div>
	
		<script type="text/javascript">
			var slides = document.getElementsByClassName('slide');

			var movies_request = {
          "async": true,
          "crossDomain": true,
          // "url": "https://api.themoviedb.org/3/movie/latest?language=en-US&api_key=cd5b98697cc656b6f9d993276b6ddec5",
          "url": "https://api.themoviedb.org/3/movie/top_rated?api_key=cd5b98697cc656b6f9d993276b6ddec5&language=en-US&page=1",
          "method": "GET",
          "headers": {},
          "data": "{}"
        }

       $.ajax(movies_request).done(function (movies) {
       	// console.log(movies);
       	for(var i=0;i<slides.length;i++){
					// console.log(slides[i].childNodes[1].src);
					slides[i].childNodes[1].src ="https://image.tmdb.org/t/p/original/"+movies.results[i].poster_path;
					slides[i].childNodes[1].style.width = "80%";
				}
       })

       var genres_request = {
          "async": true,
          "crossDomain": true,
          // "url": "https://api.themoviedb.org/3/movie/latest?language=en-US&api_key=cd5b98697cc656b6f9d993276b6ddec5",
          "url": "https://api.themoviedb.org/3/genre/movie/list?api_key=cd5b98697cc656b6f9d993276b6ddec5&language=en-US",
          "method": "GET",
          "headers": {},
          "data": "{}"
        }

       $.ajax(genres_request).done(function (genres) {
       	// console.log(genres);

       	for(var i=0;i<genres.genres.length;i++){
	       		if(genres.genres[i].name == "Comedy"){
		       			var movies_req = {
			          "async": true,
			          "crossDomain": true,
			          // "url": "https://api.themoviedb.org/3/movie/latest?language=en-US&api_key=cd5b98697cc656b6f9d993276b6ddec5",
			          "url": "https://api.themoviedb.org/3/genre/"+genres.genres[i].id+"/movies?api_key=cd5b98697cc656b6f9d993276b6ddec5&language=en-US&include_adult=false&sort_by=created_at.asc",
			          "method": "GET",
			          "headers": {},
			          "data": "{}"
			        }
			        $.ajax(movies_req).done(function (movies){
			        	// console.log(movies);

			        	for(var i=0; i<movies.results.length;i++){
			        				var video_req = {
			        					"async": false,
							          "crossDomain": true,
							          // "url": "https://api.themoviedb.org/3/movie/latest?language=en-US&api_key=cd5b98697cc656b6f9d993276b6ddec5",
							          "url": "https://api.themoviedb.org/3/movie/"+movies.results[i].id+"/videos?api_key=cd5b98697cc656b6f9d993276b6ddec5&language=en-US",
							          "method": "GET",
							          "headers": {},
							          "data": "{}"
			        				}

			        				$.ajax(video_req).done(function(video){
			        					// console.log(video);
			        					$('#section_cards').append("<div class='item-listing-container'><a href='https://www.youtube.com/watch?v="+video.results[0].key+"'><img src='https://image.tmdb.org/t/p/w500/"+movies.results[i].poster_path+"' alt='Listing'></a><div class='item-listing-text'><div class='item-listing-text-vertical-align'><h6><a href='https://www.youtube.com/watch?v="+video.results[0].key+"''>"+movies.results[i].original_title+"</a></h6>													      <div class='c100 p12 small green'><span>"+movies.results[i].vote_average*10+"%</span>						                            <div class='slice'><div class='bar'></div><div class='fill'></div>			                    </div></div></div></div>");
			        				});
		                  
		            }
			        });
	       		}
       	}
       })

       $('.dashboard li').click(function(num){
       	console.log(num);
       })
			
		</script>

@endsection