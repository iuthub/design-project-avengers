@extends('users.layout')

@section('content')
	<section class='container'>
        <div class="row">
            <div class="col-md-12" id="new_releases">
                <div class="card-columns"></div>
            </div>
        </div>
    </section>

     <script type="text/javascript">
        var new_releases = document.getElementsByClassName("card-columns")[0];

        var movies_request = {
          "async": true,
          "crossDomain": true,
          // "url": "https://api.themoviedb.org/3/movie/latest?language=en-US&api_key=cd5b98697cc656b6f9d993276b6ddec5",
          "url": "https://api.themoviedb.org/3/movie/popular?api_key=cd5b98697cc656b6f9d993276b6ddec5&language=en-US&page=1",
          "method": "GET",
          "headers": {},
          "data": "{}"
        }

        $.ajax(movies_request).done(function (movies) {
            // console.log(movies.results);

            for(var i=0; i < movies.results.length;i++){
                  var card = document.createElement('div');
                  card.classList.add("card");
                  card.classList.add("border-info");
                  card.classList.add("text-white");
                  card.classList.add("bg-dark");
                  card.classList.add("new_release");
                  
                  var img = document.createElement('img');
                  img.classList.add('card-img-top');
                  img.classList.add('poster_img');
                  img.src = "https://image.tmdb.org/t/p/w500/"+movies.results[i].poster_path;
                  card.appendChild(img);

                  var card_body = document.createElement('div');
                  card_body.classList.add('card-body');
                  card.appendChild(card_body);

                  var h4 = document.createElement("h4");
                  h4.classList.add("card-title");
                  h4.classList.add("text-white");
                  h4.innerHTML = movies.results[i].original_title;
                  card_body.appendChild(h4);

                  var p = document.createElement('p');
                  p.classList.add('card-text');
                  p.innerHTML = movies.results[i].overview;
                  card_body.appendChild(p);

                  

                  var movie_video_request = {
                      "async": false,
                      "crossDomain": true,
                      // "url": "https://api.themoviedb.org/3/movie/latest?language=en-US&api_key=cd5b98697cc656b6f9d993276b6ddec5",
                      "url": "https://api.themoviedb.org/3/movie/"+movies.results[i].id+"/videos?api_key=cd5b98697cc656b6f9d993276b6ddec5&language=en-US",
                      "method": "GET",
                      "headers": {},
                      "data": "{}"
                    }

                    $.ajax(movie_video_request).done(function (movie_video) {
                      if(movie_video.results.length!=0){
                          var a = document.createElement("a");
                          a.classList.add("btn");
                          a.classList.add("btn-info");
                          a.classList.add("w-100");
                          a.innerHTML = "Watch";
                          a.href = "https://www.youtube.com/watch?v="+movie_video.results[0].key;
                          card_body.appendChild(a);
                      }
                    });


                    new_releases.appendChild(card);
            }
        });
    </script>
@endsection