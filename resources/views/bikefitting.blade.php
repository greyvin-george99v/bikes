<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
 <div class="btn-1">
      <button class="button button-1">Login</button>
      <button class="button button-1">Signup</button>
</div>
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
    <h3>WHAT IS BICYCLE FITTING?</h3>
    <p>Bike fitting is the process of adjusting a rider’s bicycle to optimize performance, efficiency and comfort to the rider. Every rider’s ideal bike fit is different. That’s why bikes need to be adjusted to fit the rider’s needs.

The ideal bike fit is one that minimizes chances of injuries and gives the rider maximum performance and comfort as well efficiency for their effort.</p>
    </div>
   </div>
</div>
<section>   
  <div class="fit1">
    <h3>OUR BIKE FITTING OPTIONS</h3>
    <p>We offer a variety of bike fitting options to meet your needs. From our quick Performance fit to our complete fit, we have a fitting service suited for your riding style.</p>
    </div>
 </section>

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