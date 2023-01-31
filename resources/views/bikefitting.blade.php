<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="img/favicon.png ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">
    <meta name="format-detection" content="telephone=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" type="text/css" href="css/road.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bike.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
    <link rel="stylesheet" href="css/slick.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">



    <title>Wheels on Bike</title>
</head>

<body>
<!-- <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet"> -->
<div class="hero">
<nav class="primary-navigation">
<div class="logo">
    <a href="#" class="logo"><img src="img/wblogo.png" alt=""></a> 
    
  </div>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Bikes &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">Men Bikes</a></li>
        <li><a href="#">Women Bikes</a></li>
        <li><a href="#">Kids Bikes</a></li>
      </ul>
    </li>
    <li><a href="#">Accessories &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">Jerseys</a></li>
        <li><a href="#">Helmets</a></li>
        <li><a href="#">Shorts</a></li>
        <li><a href="#">Saddles</a></li>
      </ul>
    </li>
    <li><a href="{{url('/cyclingevent')}}">Cycling Events</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">Bike Fitting</a></li>
      
      </ul>
    </li>
    <li><a href="#">Contact</a></li>
  </ul>
 <!-- <div class="btn-1">
      <button class="button button-1">Login</button>
      <button class="button button-1">Signup</button>
</div> -->
<ul class="mr-auto"> <!-- A) Fix for white space -->
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-5">
          <div class="dropdown custom-dropdown">
            <a href="#" data-toggle="dropdown" class="d-flex align-items-center dropdown-link text-left" aria-haspopup="true" aria-expanded="false" data-offset="0, 20">
              <div class="profile-pic mr-5">
                <img src="img/person_2.jpg" alt="Image">
              </div>
              <div class="profile-info">
                <h3>@guest
                            Guest
                       @endguest
                       @auth
                        {{auth()->user()->name}}   
                       @endauth </h3>
                <span>Account</span>
              </div>


            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
              <a class="dropdown-item" href="#"> <span class="fa fa-user" aria-hidden="true"></span> User Dashboard</a>
              <a class="dropdown-item" href="#"><span class="icon icon-mail_outline"></span>Orders <span class="number">3</span></a>
              <!-- <a class="dropdown-item" href="#"><span class="icon icon-people"></span>Following</a>
              <a class="dropdown-item" href="#"><span class="icon icon-cog"></span>Setting<span>New</span></a> -->
              
             @if (Auth::user())
              <form action="{{route('logout')}}" method="POST">
              @csrf
              <a class="dropdown-item" href="{{route('logout')}}"  onclick="event.preventDefault();
                                                this.closest('form').submit();"><span  class="fa fa-sign-out" aria-hidden="true"></span type="submit">Log out</a>
              
              @else   
              <a href="{{route('login')}}" class="focus:font-bold"><li class="py-2 border-b border-white">
                  <svg aria-hidden="true" class="inline mr-1 flex-shrink-0 w-6 h-6 text-rose-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                  Sign In
                </li></a>
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </ul>
</nav>
</div>
<!-- Nav top -->
<div class="road">
  <div class="roadbikes" >
    <h2 id="sample" style="fill: white;">Bike Fitting Service</h2>
    <P>Wheels On Bike cares provides personalized bike fitting services in Kenya, Tanzania and Uganda to improve your comfort and tune your bike for optimal performance.</P>
    
  </div>
</div>
<div>

<div class="wrapper">
<img src="img/bike-fit.jpg" alt="">
  <div class="text-box">
<!-- <img src="img/settings-icon.png" alt=""> -->

    <h3>WHAT IS BICYCLE FITTING?</h3>
    <p>Bike fitting is the process of adjusting a rider’s bicycle to optimize performance, efficiency and comfort to the rider. Every rider’s ideal bike fit is different. That’s why bikes need to be adjusted to fit the rider’s needs.
    <br>The ideal  bike fit is one that minimizes chances of injuries and gives the rider maximum performance and comfort as well efficiency for their effort. <br>Some of the key factors considered in bike fitting include:</p>
    <ul>
      <li>Rider’s experience</li>
      <li>Rider’s goals (completing a 30km ride)</li>
      <li>Bike type</li>
    </ul>  
  </div>
   </div>
</div>

<div class="options">
  <div class="fit1">
    <h3>OUR BIKE FITTING OPTIONS</h3>
    <p>We offer a variety of bike fitting options to meet your needs. From our quick Performance fit to our complete fit, we have a fitting service suited for your riding style.</p>
    </div>
    <div class="content">
      <div class="col1">
        <h3>Quick Fit</h3>
        <p>Many cyclists have bikes that are not the right size which an cause back pain or other injuries while reducing pedaling efficiency. A Quick Fit service will adjust your bike’s saddle height and frame size to ensure comfort and efficiency.</p>
      </div>
      <div class="col1">
        <h3>Complete Fit</h3>
        <p>A complete fit involves measuring your body height, upper body, leg & arm length, shoulder width and foot size then we optimize your position on your bike to ensure you get the right size and set up for your requirements.</p>
      </div>
    </div>
    </div>

<script>
  // Initialize Variables
var closePopup = document.getElementById("popupclose");
var overlay = document.getElementById("overlay");
var popup = document.getElementById("popup");
var button = document.getElementById("textButton");
// Close Popup Event
closePopup.onclick = function() {
overlay.style.display = 'none';
popup.style.display = 'none';
$("#popup").fadeOut(500);
$("#overlay").fadeOut(500);
};
// Show Overlay and Popup
button.onclick = function() {
overlay.style.display = 'block';
popup.style.display = 'block';
$("#popup").fadeIn(500);
$("#overlay").fadeTo(500, 0.5);
};

</script>

<!-- script -->
<script src="js/js/jquery-2.2.4.min.js"></script>
<script src="js/js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/js/slick.min.js"></script>
<script src="js/js/jquery-ui.js"></script>
<script src="js/js/jquery.nice-select.js"></script>
<script src="js/js/scripts.js"></script>
</body>
</html>