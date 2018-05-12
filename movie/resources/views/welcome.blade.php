<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    @include("layouts.header", ['home'=>'1'])

<!--Start homepage content-->
    <div class="main-image">
    <!--Indicators-->
    <!--myCarousel controls functions properly-->
    <!--active for visibility-->
        <div id="myCarousel" class="carousel-slide">
            <ol class="carousel-indicators">
                <li class="item1 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
            </ol>
            
        <!--wrapper for slides-->
        <!--slides specified with carousel-inner-->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('img/ian_somerhalder_man_celebrity_brunette_lying_29869_1920x1080.jpg') }}" alt="something">
                    <div class="carousel-caption">
                        <div class="text col-md-8 offset-md-2">
                            <h1 class='text-white'>Welcome to UMD</h1>
                            <p>Watch the largest collection of Movies and TV series anytime anywhere!</p>
                        </div>
                    </div>
                </div>            
                <div class="item">
                    <img src="{{ asset("img/emma_watson_5k-HD.jpg") }}">
                    <div class="carousel-caption">
                        <div class="text">
                            <h1 class='text-white'>Welcome to UMD</h1>
                            <p>Watch the largest collection of Movies and TV series anytime anywhere!</p>       
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset("img/thumb-1920-148910.jpg") }}">
                    <div class="carousel-caption">
                        <div class="text">
                            <h1 class='text-white'>Welcome to</h1>
                            <p>Watch the largest collection of Movies and TV series anytime anywhere!       </p>
                        </div>
                    </div>  
                </div>
            </div>
<!--Left & right controls-->
            <a class="left carousel-control" href="#myCarousel" role="button">
                <span>
                    <i class="fa fa-angle-double-left" style="font-size:36px"></i>
                </span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button">
                <span>
                      <i class="fa fa-angle-double-right" style="font-size:36px"></i>
                </span>
             </a>
        </div>
    </div>
    <!--HOME PAGE PIC-->
    <section class="content">
        <div class="container"><!--BS grid-->
            <div class="row">
                <div class="mrg-top">
                    <div class="col-md-6">                 
                        <img class="image-div" src="{{ asset("img/home-1.jpg") }}">                        
                        </div>
                        <div class="text-div col-md-6">
                            <h2>Watch On Any Device</h2>
                            <p class=w></p>
                            <div class="learn-more">
                                <a class="btn btn-success" href="{{ route("new_releases") }}">Start Watching</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--BS grid-->

            <div class="container"><!--BS grid-->
                <div class="row">
                    <div class="mrg-top">
                        <!--Create Playlist-->
                        <div class="text-div col-md-6">
                            <h2 class="watch">Make Your Own Playlist</h2>
                            <p class=w></p>
                            <p>
                                <a class="btn btn-success" href="{{ route("new_releases") }}">Start Watching</a>
                            </p>
                        </div> <!--col-md-6-->
                        <!--img for pleylist-->
                        <!--    <div class="content-text image-content">-->
                        <div class="col-md-6">
                            <img class="image-div" src="{{ asset("img/home-2.jpg") }}">
                        </div>
                    </div>
                </div><!--row end-->
            </div><!--bs end-->
            <!--Picture with horces-->
                        
            <div class="container"><!--BS grid-->
                <div class="row">
                    <div class="mrg-top">
                        <div class="col-md-6">
                            <img class="image-div" src="{{ asset("img/home-3.jpg") }}">
                        </div>
                    <!--text-->
                        <div class="text-div col-md-6">
                            <h2 class="watch">Watch in Ultra HD</h2>
                            <p class=w></p>
                            <p>
                                <a class="btn btn-success" href="{{ route('new_releases') }}">Start Watching</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div><!--END-->
    </section>
    <hr>
    <aside>
        <div>
            <h2 class="starter">Our Plans & Pricing</h2>
            <div class="w"></div>
        </div>
        <!--start container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="price">
                            <li> 1 month unlimited access!</li>
                                <li> Thousands of TV shows, movies & more.</li>
                        </ul>
                    </div><!--end row-->
    
                    <div class="col-md-4">
                    <ul class="price">
                            <li> Stream on your phone, laptop, tablet or TV.</li>
                                <li> You can even Download & watch offline.</li>
                        </ul>
                    </div>

                
                
                    <div class="col-md-4">
                    <ul class="price">
                            <li> 1 month unlimited access!</li>
                                <li> Thousands of TV shows, movies & more.</li>
                        </ul>
                    </div>
                </div><!--end row-->

            <div class="row">
                <div class="col-md-4">
                        <div class="table-price" style="background-image: {{ asset('img/bgK.jpg') }}">
                            <h6 class="starter">FREE TRIAL</h6>
                                <h2 class="size" >FREE</h2>
                                    <ul>
                                        <li>720p Available</li>
                                        <li>Watch on any Device</li>
                                        <li>20 Movies and Shows</li>
                                        <li>Download Available</li>
                                    </ul>

                                <p class="burron">
                                    <a class="btn btn-success btn1" href="#">Choose Plan</a>
                                </p>
                        </div>
                </div>  <!--end first col-->
                <!--2 col-->
                <div class="col-md-4">
                    <div class="table-price border">
                        <h6 class="starter">STARTER</h6>
                        <h2 class="size"><sup>$</sup>10<span>/month</span></h2>
                        <ul>
                            <li>HD Available</li>
                            <li>Watch on any Device</li>
                            <li>70 Movies and Shows</li>
                            <li>Download Available</li>
                        </ul>
                        <p class="burron">
                            <a class="btn btn-success btn1 clr" href="#">Choose Plan</a>
                        </p>
                    </div>
                </div>  <!--2 col-->
                <div class="col-md-4">
                    <div class="table-price">
                        <h6 class="starter">PREMIUM</h6>
                            <h2 class="size"><sup>$</sup>14<span>/month</span></h2>
                            <ul>
                                <li>Ultra HD Available</li>
                                <li>Watch on any Device</li>
                                <li>70 Movies and Shows</li>
                                <li>Unlimited Movies and Shows</li>
                            </ul>
                            <p class="burron">
                                <a class="btn btn-success btn1" href="#">Choose Plan</a>
                            </p>
                    </div>
                </div>  <!--2 col-->
            </div><!--end row-->
        </div><!--end container-->
    </aside>
    <!--footer-->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright"><div class="copyright-text-pro">© Copyright 2018 UMD. All Rights Reserved</div>
                </div>
            </div><!--end col-md-->
            <div class="col-md-6">
                <ul class="social-net">
                    <li>
                        <a href="https://www.snapchat.com" target="_blank" class="fa fa-snapchat-ghost"></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com" target="_blank" class="fa fa-youtube"></a>
                    </li>
                    <li>
                        <a href="https://www.vimeo.com" target="_blank" class="fa fa-vimeo"></a>
                    </li>
                </ul>
            </div>
        </div><!--end container-->
    </footer>

    <script src="{{ asset("js/jquery.min.js") }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset("js/js.js") }}"></script>
    <script src="{{ asset("js/preloader.js") }}"></script>


    <script type="text/javascript">
        var now_playing = {
            "async": true,
            "crossDomain": true,
            // "url": "https://api.themoviedb.org/3/movie/latest?language=en-US&api_key=cd5b98697cc656b6f9d993276b6ddec5",
            "url": "https://api.themoviedb.org/3/movie/now_playing?api_key=cd5b98697cc656b6f9d993276b6ddec5&language=en-US&page=1",
            "method": "GET",
            "headers": {},
            "data": "{}"
        }

        $.ajax(now_playing).done(function(movies_now){
            // console.log(movies_now);
            var items_img = $('.item img');
            var items_title = $(".item h1");
            var items_desc = $(".item p");
            for(var i=0;i<items_img.length;i++){
                items_img[i].src = "https://image.tmdb.org/t/p/original/"+movies_now.results[i].poster_path;
                items_title[i].innerHTML = movies_now.results[i].title;
                items_desc[i].innerHTML = movies_now.results[i].overview;
            }   
        });
    </script>
</body>
</html>