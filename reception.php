<!doctype html>
<html lang="en">
  <head>
     <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/reception.css">


    <!-- Theme Style -->
    <link rel="stylesheet"type="text/css" href="css/style.css">
    <link rel="stylesheet"type="text/css" href="index.css">
  </head>
  <body>
    
    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-7 text-right">
              <p class="mb-0">
                <a href="index.php" class="cta-btn" style="font-size: 15px;">B B M S +</a></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <img src="img/logo.jpg">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hospital.php">Hospital</a>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link  active dropdown-toggle"  id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blood Bank</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="manager.php">Manager</a>
                  <a class="dropdown-item" href="Reception.php">Receptionist</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.php">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
 <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/reception.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1 style="color:#d34343; font-weight:bold;">Receptionist Portal</h1>
              <p style="color:black; font-weight:bold;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    
    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1 style="color: white;">Receptionist SignUp</h1>
          
          <form action="./receptionpost.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" required autocomplete="on" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"name="lname" required autocomplete="on"/>
            </div>
          </div>

            <div class="field-wrap">
            <label>
              Blood Bank Number<span class="req">*</span>
            </label>
            <input type="text" name="bno"required autocomplete="on"/>
          </div>

          <div class="field-wrap">
            <label>
              Blood Bank Name<span class="req">*</span>
            </label>
            <input type="text" name="bname"required autocomplete="on"/>
          </div>

          <div class="field-wrap">
            <label>
              City<span class="req">*</span>
            </label>
            <input type="text" name="city"required autocomplete="on"/>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="eemail" required autocomplete="on"/>
          </div>

           <div class="field-wrap">
            <label>
              Mobile Number<span class="req">*</span>
            </label>
            <input type="text"name="phone"required Maxlength="10" Minlength="10" autocomplete=n"on"/>
          </div>

           <div class="field-wrap">
            <label>
              Enter Security Question<span class="req">*</span>
            </label>
            <input type="text" name="security" required autocomplete=n"off"/>
          </div>

          <div class="field-wrap">
            <label>
              Enter Security Answer<span class="req">*</span>
            </label>
            <input type="text" name="securityans" required autocomplete=n"off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block" style="color:white;">Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1 style="color:white;">Welcome Back!</h1>
          
          <form action="receptionlogin.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="eemail" required autocomplete="on"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="on"/>
          </div>
          
           <a href="rreset.php" style="float:right;">Forgot Password?</a>
          <button type="submit" name="btn-login" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->



 <section class="cover_1" style="background-image: url(img/bg_1.jpg);">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-md-10">
            <h2 class="heading element-animate">Experience Our Advance Facilities</h2>
            <p class="sub-heading element-animate mb-5">BBMS+ is one of the largest online platforms for Blood Bank Management System.<br>Experience the best customer services and advance facilities by providing your valuable feedback to us.</p>
            <p class="element-animate"><a href="contact.php" class="btn btn-primary btn-lg">Get In Touch</a></p>
          </div>
        </div>
      </div>
    </section>
  
    
    <!-- END footer -->
         
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/reception.js"></script>
  </body>
</html>