<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/style.css") }}">

    <title>UMD</title>

    <style>
        .carousel-inner .item  img,
        .carousel-inner .item a img {
            width: 100%;        
            margin: auto;
        }
    </style>
</head>
<body class="ishome">
   @include('layouts.header', ['home'=>'2'])
    
    <section class='container'>
        <div class="row">
            <div class="col-md-12" id="new_releases">
                <div class="card-columns"></div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var new_releases = document.getElementsByClassName("card-columns")[0];

        var movies_request = {
          "async": true,
          "crossDomain": true,
          // "url": "https://api.themoviedb.org/3/movie/latest?language=en-US&api_key=cd5b98697cc656b6f9d993276b6ddec5",
          "url": "https://api.themoviedb.org/3/movie/upcoming?api_key=cd5b98697cc656b6f9d993276b6ddec5&language=en-US&page=1",
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
</body>
</html>