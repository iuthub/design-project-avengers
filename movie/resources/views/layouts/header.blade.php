<header>
        <div class="wrapper">
            <div id="brand">
                <img src="{{ asset("img/LOGO2.png") }}" alt="logo"/>
            </div>
            <nav id="top_nav">
                <ul id="menu">     
                    <li class="nav-width">
                        <a href="{{ route('welcome') }}" @if($home=='1') class="underline" @endif>Home</a>
                    </li>
                    <li class="nav-width">
                        <a href="{{ route('latest_movie') }}" @if($home=='2') class="underline" @endif>Upcoming</a>
                    </li>
                    <li class="nav-width">
                        <a href="{{ route("new_releases") }}" @if($home=='3') class="underline" @endif>Most Popular</a>                   
                    </li>
                    <li class="nav-width">
                        <a href="{{ route('contactPage') }}" @if ($home == '4') class="underline" @endif>Contact US</a>
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
                        </div>      
                    </form>
                </div>
            </div>
            <div class="register">
                <a onclick="document.getElementById('id02').style.display='block'; document.getElementById('id01').style.display='none';" href="#" class="btn btn-success">Register</a>
                <div id="id02" class="modal">
                    <form class="model-content animate" action="{{ route("register_user") }}" method='POST'>
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
                                    Register
                                </button>
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
                        <a href="{{ route('welcome') }}">Home</a>                     
                    </li>
                    <hr>
                    <li class="nav-width">
                        <a href="{{ route('latest_movie') }}">Upcoming</a>
                    </li>
                    <hr>
                    <li class="nav-width">
                        <a href="{{ route("new_releases") }}">Most Popular</a>        
                    </li>
                    <hr>
                    <li class="nav-width">
                        <a href="{{ route('contactPage') }}">Contact US</a>    
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