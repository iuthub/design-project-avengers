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
    <header>
        <div class="wrapper">
            <div id="brand">
                <img src="{{ asset("img/LOGO2.png") }}" alt="logo"/>
            </div>
            <nav id="top_nav">
                <ul id="menu">     
                    <li class="nav-width">
                        <a href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-width">
                        <a href="{{ route("latest_movie") }}">Upcoming</a>
                    </li>
                    <li class="nav-width">
                        <a href="#" class="underline">Most Popular</a>                   
                    </li>
                    <li class="nav-width">
                        <a href="#">FAQS</a>
                    </li>
                </ul>
<!--hamburger-->
                <div id="toggle">
                        <div class="span" id="one"></div>
                </div>
            </nav>
            <div class="login">
                <a onclick="document.getElementById('id01').style.display='block'; document.getElementById('id02').style.display='none';" href="#" class="btn btn-success">Login</a>
                <div id="id01" class="modal">
                    <form class="model-content animate" action="{{ route("login") }}" method='POST'>
                        @csrf
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'"  class="close" title="Close Modal">&times;</span>
                            <img src="img/avatar1.png" alt="Avatar" class="avatar">
                        </div>                        
                        <div class="log-content">
                            <input type="text" placeholder="Enter Username" name="email" required/>
                            <input type="password" placeholder="Enter Password" name="password" required/>
                            <div class="btn-pos">
                                <button type="submit" value="Login">
                                    Login
                                </button>
                            </div>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me       
                            </label>        
                            <div>
                                <span><a href="#">Forgot password?</a></span>
                             </div>  
                        </div>      
                    </form>
                </div>
            </div>
            <div class="register">
                <a onclick="document.getElementById('id02').style.display='block'; document.getElementById('id01').style.display='none';" href="#" class="btn btn-success">Register</a>
                <div id="id02" class="modal">
                    <form class="model-content animate" action="{{ route("register") }}" method='POST'>
                        @csrf
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id02').style.display='none' "  class="close" title="Close Modal">&times;</span>
                            <img src="img/avatar1.png" alt="Avatar" class="avatar">
                        </div>                        
                        <div class="log-content">
                            <input type="text" name="first_name" placeholder="Enter First Name">
                            <input type="text" name="last_name" placeholder="Enter Last Name">
                            <input type="text" placeholder="Enter Email" name="email" required/>
                            <input type="password" placeholder="Enter Password" name="password" required/>
                            <div class="btn-pos">
                                <button type="submit" value="Login">
                                    Login
                                </button>
                            </div>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me       
                            </label>        
                            <div>
                                <span><a href="#">Forgot password?</a></span>
                             </div>  
                        </div>      
                    </form>
                </div>
            </div>
        </div>
 
        <div id="resize">
        <!--start resizing-->
                <ul id="menu">
                    <li  class="nav-width">
                        <a href="{{ route('welcome') }}" class="underline">Home</a>                     
                    </li>
                    <hr>
                    <li class="nav-width">
                        <a href="{{ route("latest_movie") }}">Upcoming</a>
                    </li>
                    <hr>
                    <li class="nav-width">
                        <a href="{{ route('new_releases') }}">Most Popular</a>        
                    </li>
                    <hr>
                    <li class="nav-width">
                        <a href="#">FAQS</a>    
                    </li>
                    <hr>
                    <li class="nav-width">
                        <a onclick="document.getElementById('id02').style.display='block'" href="#" class="btn btn-success">Sign In</a>               
                        <div id="id02" class="modal">

                            <form class="model-content animate" action="/dilmurod_miwka.php">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id02').style.display='none' "  class="close" title="Close Modal">&times;</span>
                                    <img src="{{ asset("img/avatar1.png") }}" alt="Avatar" class="avatar">
                                </div>
                  
                                <div class="log-content">
                                        <input type="text" placeholder="Enter Username" name="uname" required />
                                        <input type="password" placeholder="Enter Password" name="psw" required />
                                        <div class="btn-pos">
                                            <button type="submit" value="Login">
                                                Login
                                            </button>
                                        </div>
                                        <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me       
                                        </label>                    
                                        <div>
                                            <a href="#">Forgot password?</a></span>
                                         </div>  
                                </div>      
                            </form>
                        </div>
                    </li>
                </ul>
<!--end resizing-->   
        </div>
    </header>
    
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
</body>
</html>