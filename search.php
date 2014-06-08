<!DOCTYPE html>
<html lang="en">
 <head>
    <title>neLo - Online Lodging -</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/script.js"></script>
    <link rel="shortcut icon" href="resources/imagini/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="resources/css/modalDialog.css">
    <link rel="stylesheet" type="text/css" href="resources/css/mainbody.css">
    <link rel="stylesheet" type="text/css" href="resources/css/header-footer.css">
</head>

 <body>
    <header class="nav-down">
        <div class="header-container">
        <nav class="user-nav">
            <div class="container">
                <div class="panel-left">
                    <div class="user-logo-state">
                        <div class="loginAll">
                            <div class="containe">
                                <p>Have an account?</p>
                                <a href="#modalLogin" class="login" role="button">Login</a>
                                <div id="modalLogin" class="modalLogin">
                                    <div>
                                        <a href="#closeLogin" title="Close" class="closeLogin">X</a>
                                        <div class="loginTitle">
                                            Login to neLo
                                        </div>
                                        <div class="loginForm">
                                            <form name="login" action="firstLogin.php" method="post" >
                                                Username: <input type="text" name="username"><br>
                                                Password: <input type="password" name="password" style="margin-left: 7px;"><br>
                                                <input type="submit" value="Login" class="login-button">
                                            </form>
                                        </div>
                                        <div class="hr">Wrong Username or Password!</div>
                                        <div class="loginForgot">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                                <p>|</p>
                                <ul class="drop_menu">
                                    <li><a href='#'>Sign Up</a>
                                        <ul>
                                            <li><a href='#modalSignupUser' class="register" role="button">User</a></li>
                                            <div id="modalSignupUser" class="modalSignupUser">
                                                <div>
                                                    <a href="#closeSignupUser" title="Close" class="closeSignupUser">X</a>
                                                    <div class="loginTitle">
                                                        Register User
                                                    </div>
                                                    <div class="loginForm">
                                                        <form name="login" action="register1.php" method="post" >
                                                            <div class="form1">
                                                                First Name: <input type="text" name="firstName" style="float: right; margin-left: 230px;"><hr><br>
                                                                Last Name: <input type="text" name="lastName" style="float: right;"><hr><br>
                                                                Adress: <input type="text" name="address" style="float: right;"><hr><br>
                                                                Location: <input type="text" name="location" style="float: right;"><hr><br>
                                                                City: <input type="text" name="city" style="float: right;"><hr><br>
                                                                Postal Code: <input type="text" name="postalCode" style="float: right;"><hr><br>
                                                                CNP: <input type="text" name="CNP" style="float: right;"><hr><br>
                                                                Birth Date: <input type="date" name="date" style="float: right;"><hr><br>
                                                                Mobile: <input type="text" name="mobile" style="float: right;"><hr><br>
                                                                Phone: <input type="text" name="phone" style="float: right;"><hr><br><br>

                                                                Username: <input type="text" name="username" style="float: right;"><hr><br>
                                                                Email: <input type="email" name="email" style="float: right;"><hr><br>
                                                                Password: <input type="password" name="Password" style="float: right;"><hr><br>
                                                                Confirm Password: <input type="password" name="Password" style="float: right;"><hr><br>
                                                                <input type="submit" value="Register" class="login-button" style="float: right;"> 
                                                            </div>                          
                                                        </form>
                                                    </div>
                                                    <div class="hr">Wrong Username or Password!</div>
                                                </div>
                                            </div>

                                            <li><a href='#modalSignupHotel' class="register" role="button">Hotel</a></li>
                                            <div id="modalSignupHotel" class="modalSignupHotel">
                                                <div>
                                                    <a href="#closeSignupHotel" title="Close" class="closeSignupHotel">X</a>
                                                    <div class="loginTitle">
                                                        Register Hotel
                                                    </div>
                                                    <div class="loginForm">
                                                        <form name="login" action="register2.php" method="post" >
                                                            <div class="form1">
                                                                Hotel Name: <input type="text" name="hotelName" style="float: right; margin-left: 230px;"><hr><br>
                                                                Adress: <input type="text" name="h_address" style="float: right;"><hr><br>
                                                                Contry: <input type="text" name="h_country" style="float: right;"><hr><br>
                                                                City: <input type="text" name="h_city" style="float: right;"><hr><br>
                                                                Postal Code: <input type="text" name="h_postalCode" style="float: right;"><hr><br>
                                                                Mobil: <input type="text" name="h_mobile" style="float: right;"><hr><br>
                                                                Phone: <input type="text" name="h_phone" style="float: right;"><hr><br>
                                                                Fax: <input type="text" name="h_fax" style="float: right;"><hr><br><br>
                                                                Username: <input type="text" name="h_username" style="float: right;"><hr><br>
                                                                Email: <input type="email" name="h_email" style="float: right;"><hr><br>
                                                                Password: <input type="password" name="h_password" style="float: right;"><hr><br>
                                                                Confirm Password: <input type="password" name="h_confirmPassword" style="float: right;"><hr><br>
                                                                <input type="submit" value="Register" class="login-button" style="float: right;">  
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="hr">Wrong Username or Password!</div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-right">
                    <ul class="drop_menu">
                        <li><a href="#" class="account-settings">Marius</a>
                            <ul>
                                <li><div>Gaby Marius</div></li>
                                <li><hr></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="menu-nav">
            <div class="container">
                <div class="panel-left">
                    <a href="index.php">
                        <img src="resources/css/images/logo.png"></img>
                    </a>
                </div>

                <div class="panel-right">
                    <a href="index.php" title="Home" class="Button">Home</a>
                    <a href="search.php" title="Home" class="Button">Search</a>
                    <a href="contact.php" title="Home" class="Button">Contact Us</a>
                </div>
            </div>
         </nav> 
        </div>
    </header>
<!-- header -->
    <div class="cover"></div>
<!-- cover image -->

    <div id='main'>
        <article class="background">
            <div class="heading">
                Search
                <hr>
            </div>
            <div class="container">
                <div class="search-box">
                    <form name="search-box" action="" method="">
                        
                            Destination/Hotel Name:<br> 
                            <input type="search" name="search" size="25" autocomplete="off" placeholder="e.g. City or Specific Hotel">
                        <br>
                            Buget between:<br> 
                            <input type="range" name="amountRange" min="0" max="500" value="0" step="10" oninput="this.form.amountInput.value=this.value" />
                            <input type="number" name="amountInput" min="0" max="500" value="0" step="10" oninput="this.form.amountRange.value=this.value" /><br>
                            And<br>
                            <input type="range" name="amountRange2" min="0" max="500" value="0" step="10" oninput="this.form.amountInput2.value=this.value" />
                            <input type="number" name="amountInput2" min="0" max="500" value="0" step="10" oninput="this.form.amountRange2.value=this.value" />
                        <br>
                            Check-in Date:<br>
                            <input type="date" name="date"><br>
                            Check-out Date:<br>
                            <input type="date" name="date">
                        <br>
                            Rooms: <input type="number" name="number" min="0" max="30" value="0" step="1">
                            Beds: <input type="number" name="number" min="0" max="30" value="0" step="1">
                        <br>
                            <input type="submit" value="Search" name="search">
                    </form>
                </div>
                <br>
                <div class="search-result">
                    <div class="hotel-block">
                        <div class="block-body">
                            <a href="hotels.php">
                                <div class="imgWrap">
                                    <img src="resources/imagini/bavaria.jpg" class="block-picture">
                                    <p class="imgDescription">---------- Details ----------</p>
                                </div>
                            </a>
                        </div>
                        <div class="block-footer">
                            <div class="hotel-detail">
                                <div class="hotel-name">Hotel Bavaria</div>
                                <div class="hotel-location"><img src="resources/imagini/location-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">Cluj</div>
                                <div class="hotel-type"><img src=""><img src="resources/imagini/type-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">Hotel</div>
                            </div>
                            <div class="rezervation">
                                <a href="#modalReservation">Book Now!</a>

                                <div id="modalReservation" class="modalReservation">
                                    <div>
                                        <a href="#closeReservation" title="Close" class="closeReservation">X</a>
                                        Form Rezervation
                                    </div>
                                </div>
                            </div>
                            <div class="hotel-description">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    <!--<aside>aside</aside>-->
    </div>
<!-- main body -->

    <footer class="footer">
        <div class="footer-container">
            <ul class="footer-left">
                <li><a href="about.php"><h5>ABOUT US</h5></a></li>
                <li><a href="partners.php"><h5>PARTNERS</h5></a></li>
                <li><a href="contact.php"><h5>CONTACT US</h5></a></li>
            </ul>
            <div class="footer-right">
                <div class="telefon">
                    
                    <span><img src="resources/imagini/icon_phone.png">0232 201 XXX</span><br>
                    <a href="mailto:the.nelo.web@gmail.com" style="float: right;">the.nelo.web@gmail.com</a>
                    
                </div>
                
                <div class="footer-copywrite">
                    
                    <h5><a href="index.php"><img src="resources/imagini/footer-logo.png" height="42" width="129"></a><br>Universitatea Alexandru Ioan Cuza, Strada Gen. Berthelot 16, Iasi<br>Copyright 2014 | neLo</h5>
                </div>
            </div>
        </div>
    </footer>
<!-- footer -->
 </body>
</html>