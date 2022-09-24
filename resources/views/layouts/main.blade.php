<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.png ">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/lightslider.css')}}">
    <script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{url('js/lightslider.js')}}"></script>

    <title>Wheels on Bike</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
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
        <li><a href="#">Iconography</a></li>
      </ul>
    </li>
    <li><a href="#">Work &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Illustration</a></li>
        <li><a href="#">Iconography</a></li>
      </ul>
    </li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
 <div class="btn-1">
      <button class="button button-1">Login</button>
      <button class="button button-1">Signup</button>
</div>
</nav>
</div>


     
<section style="background-image: url(img/img4.png);">

    <div class="circle"></div> 
        <div class="content">
         <div class="textbox">
            <h2>Don't just ride<br>It's <span>Cycle</span></h2>
            <p>Start your journey today through the Mountains, Rivers,<br> Hills, 
                Streets and Towns using the right cycling Tools <br> and Gears.</p>
            <a href="#">Sign Up</a>
        </div>    
            <div class="imgBox">
            <img src="img/img1.png" class="wheels">
        </div>
        </div>
        <ul class="thumb">
            <li><img src="img/thumb1.png" onclick="imgSlider('img/img1.png');changeCircleColor('#8d2108')"></li>
            <li><img src="img/thumb2.png" onclick="imgSlider('img/img2.png');changeCircleColor('#e15b3c')"></li>
            <li><img src="img/thumb3.png" onclick="imgSlider('img/img3.png');changeCircleColor('#8b331f')"></li>
        </ul>
        <ul class="sci">
            <li><a href="#"><img src="img/facebook.png"></a></li>
            <li><a href="#"><img src="img/twitter.png"></a></li>
            <li><a href="#"><img src="img/instagram.png"></a></li>


        </ul>
          <!--script-link----------->
          <script type="text/javascript">
           function imgSlider(bicycle){
             document.querySelector('.wheels').src = bicycle;
             }
           function changeCircleColor(color){
               const circle = document.querySelector('.circle');
               circle.style.background = color;
    }
</script>         
   

</section>
  <!-- </div> -->
    
    <!--Content-->
<div class="bike" style="background-image: url('img/bg1.jpg') !important;">
<div class="row">
  <div class="card" style="width: 18rem;">
    <img src="img/bike1.png" class="card-img-top" alt="bike 1">
    <div class="card-body">
      <h5 class="card-title">Road Bikes</h5>
      <p class="card-text">Aerodynamic road bikes to carry you over the steepest climbs and keep you smiling on the descents.</p>
      <a href="#" class="btn btn-warning">VIEW PRODUCTS</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="img/bike2.png" class="card-img-top" alt="bike 2">
    <div class="card-body">
      <h5 class="card-title">Mountain Bikes</h5>
      <p class="card-text">Theres a mountain bike for everyone. Push the limits or escape the daily grind with our mountain bikes.</p>
      <a href="" class="btn btn-warning">VIEW PRODUCTS</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="img/helmet.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Accessories</h5>
      <p class="card-text">We have a great selection of high quality bike accessories and spare parts to keep you on the road.</p>
      <a href="#" class="btn btn-warning" style="fill: orange !important;">VIEW PRODUCTS</a>
    </div>
  </div>
</div>
</div>
  <!--End Of Content-->
  <!-- Kids Bike -->
<div class="allBikes-content" style="background-image: url(img/img4.png);">
<div class="biker">
<div class="allBikes" >

    <h2 >KID'S BIKES</h2>
    <p>Kids just love to play and have fun while riding a bike.<br> Check out Wheels on Bike wide selection of kids bicycles. Browse below to find the perfect gift.</p>
  </div>
  <section class="slider">
    <ul id="autoWidth" class="cs-hidden">
    <!--1------------------------------------>	
    <li class="item-a">
  <!--box-slider--------------->
    <div class="box">
    <!--img-box---------->
    <div class="slide-img">
    <img alt="1" src="img/kid1.jpg">
    <!--overlayer---------->
    <div class="overlay">
    <!--buy-btn------>	
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    <!--detail-box--------->
    <div class="detail-box">
    <!--type-------->
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <!--price-------->
    <a href="#" class="price">$23</a>
      
    </div>
    
    </div>		
  </li>
    <!--2------------------------------------>	
    <li class="item-b">
    <div class="box">
    <div class="slide-img">
    <img alt="2" src="img/kid2.jpg">
  
    <div class="overlay">
    
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
   
    <div class="detail-box">
 
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
 
    <a href="#" class="price">$20</a>
      
    </div>
    
    </div>		
  </li>
    <!--3------------------------------------>	
    <li class="item-c">
    <div class="box">
    <div class="slide-img">
    <img alt="3" src="img/kid3.jpg">
    <div class="overlay">  
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>    
    <div class="detail-box">
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
   
    <a href="#" class="price">$26</a>
      
    </div>
    
    </div>		
  </li>
    <!--4------------------------------------>	
    <li class="item-d">  
    <div class="box">
    <div class="slide-img">
    <img alt="4" src="img/kid4.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    
    <div class="detail-box">
    <!--type-------->
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <!--price-------->
    <a href="#" class="price">$27</a> 
    </div>  
    </div>		
  </li>
    <!--5------------------------------------>	
    <li class="item-e">
    <div class="box">
    <div class="slide-img">
    <img alt="5" src="img/kid5.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    <div class="detail-box">
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <a href="#" class="price">$26</a>
      
    </div>
    
    </div>		
  </li>
    <!--6------------------------------------>	
    <li class="item-f">
    <div class="box">
    <div class="slide-img">
    <img alt="6" src="img/kid6.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    <div class="detail-box">
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <a href="#" class="price">$30</a>
    </div>
    
    </div>		
  </li>
    
    
</ul>
  </section> 
</div>
<div class="biker">
<div class="allBikes" >
  <h2 >MEN BIKES</h2>
  <p>You never outgrow fun. That’s why we have quality men’s bikes to fuel your youthful spirit.<BR> Men’s mountain bikes are perfect for trails. Or, grab a cruiser for a ride through the neighborhood and into town.<br> Get the best Men bikes in Kenya with affordable Prices.</p>
</div>
  <section class="slider">
    <ul id="AutoWidth" class="cs-hidden">
    <!--1------------------------------------>	
    <li class="item-a">
  <!--box-slider--------------->
    <div class="box">
    <!--img-box---------->
    <div class="slide-img">
    <img alt="1" src="img/kid1.jpg">
    <!--overlayer---------->
    <div class="overlay">
    <!--buy-btn------>	
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    <!--detail-box--------->
    <div class="detail-box">
    <!--type-------->
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <!--price-------->
    <a href="#" class="price">$23</a>
      
    </div>
    
    </div>		
  </li>
    <!--2------------------------------------>	
    <li class="item-b">
    <div class="box">
    <div class="slide-img">
    <img alt="2" src="img/kid2.jpg">
  
    <div class="overlay">
    
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
   
    <div class="detail-box">
 
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
 
    <a href="#" class="price">$20</a>
      
    </div>
    
    </div>		
  </li>
    <!--3------------------------------------>	
    <li class="item-c">
    <div class="box">
    <div class="slide-img">
    <img alt="3" src="img/kid3.jpg">
    <div class="overlay">  
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>    
    <div class="detail-box">
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
   
    <a href="#" class="price">$26</a>
      
    </div>
    
    </div>		
  </li>
    <!--4------------------------------------>	
    <li class="item-d">  
    <div class="box">
    <div class="slide-img">
    <img alt="4" src="img/kid4.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    
    <div class="detail-box">
    <!--type-------->
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <!--price-------->
    <a href="#" class="price">$27</a> 
    </div>  
    </div>		
  </li>
    <!--5------------------------------------>	
    <li class="item-e">
    <div class="box">
    <div class="slide-img">
    <img alt="5" src="img/kid5.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    <div class="detail-box">
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <a href="#" class="price">$26</a>
      
    </div>
    
    </div>		
  </li>
    <!--6------------------------------------>	
    <li class="item-f">
    <div class="box">
    <div class="slide-img">
    <img alt="6" src="img/kid6.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    <div class="detail-box">
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <a href="#" class="price">$30</a>
    </div>
    
    </div>		
  </li>
    
    
</ul>
  </section>   
</div> 
<div class="biker">
  <div class="allBikes">
    <h2 >WOMEN BIKES</h2>
  <p>Stylish and comfortable to ride – women’s cruisers, comfort bikes, and more.<br> The design of our exclusive Perfect Fit frame delivers an amazing difference in how comfortable you feel <br>when you ride our cruiser and comfort bikes. Get the best women bikes in Kenya with affordable Prices.</p>
</div>
  <section class="slider">
    <ul id="Autowidth" class="cs-hidden">
    <!--1------------------------------------>	
    <li class="item-a">
  <!--box-slider--------------->
    <div class="box">
    <!--img-box---------->
    <div class="slide-img">
    <img alt="1" src="img/kid1.jpg">
    <!--overlayer---------->
    <div class="overlay">
    <!--buy-btn------>	
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    <!--detail-box--------->
    <div class="detail-box">
    <!--type-------->
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <!--price-------->
    <a href="#" class="price">$23</a>
      
    </div>
    
    </div>		
  </li>
    <!--2------------------------------------>	
    <li class="item-b">
    <div class="box">
    <div class="slide-img">
    <img alt="2" src="img/kid2.jpg">
  
    <div class="overlay">
    
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
   
    <div class="detail-box">
 
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
 
    <a href="#" class="price">$20</a>
      
    </div>
    
    </div>		
  </li>
    <!--3------------------------------------>	
    <li class="item-c">
    <div class="box">
    <div class="slide-img">
    <img alt="3" src="img/kid3.jpg">
    <div class="overlay">  
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>    
    <div class="detail-box">
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
   
    <a href="#" class="price">$26</a>
      
    </div>
    
    </div>		
  </li>
    <!--4------------------------------------>	
    <li class="item-d">  
    <div class="box">
    <div class="slide-img">
    <img alt="4" src="img/kid4.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    
    <div class="detail-box">
    <!--type-------->
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <!--price-------->
    <a href="#" class="price">$27</a> 
    </div>  
    </div>		
  </li>
    <!--5------------------------------------>	
    <li class="item-e">
    <div class="box">
    <div class="slide-img">
    <img alt="5" src="img/kid5.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    <div class="detail-box">
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <a href="#" class="price">$26</a>
      
    </div>
    
    </div>		
  </li>
    <!--6------------------------------------>	
    <li class="item-f">
    <div class="box">
    <div class="slide-img">
    <img alt="6" src="img/kid6.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    <div class="detail-box">
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    <a href="#" class="price">$30</a>
    </div>
    
    </div>		
  </li>
    
    
</ul>
  </section>  
</div>
</div>

<div class="choose" style="background-image: url(img/choose.jpg);">
  <div class="chooseBikes">
    <h1>CHOOSE YOUR FAVORITE BIKE</h1>
    <p>We offer different types of bikes such as MOUNTAIN BIKES and ROAD BIKES.<br> Choose from different makes and sizes that are available.Brand new,Second hands,<br> Ex-UK’s & USA’s and local used bikes.</p>
  </div>
</div>
  
 

<!-- contact -->

<!-- footer -->
  
  <footer class="footer-20192">
    <div class="site-section">
      <div class="container">

        <div class="cta d-block d-md-flex align-items-center px-5">
          <div>
            <h2 class="mb-0">Reach out for more info</h2>
            <h3 class="text-dark">Let's get started!</h3>
          </div>
          <div class="contactUs">
            <a href="#" class="btn btn-dark rounded-0 py-3 px-5">Contact us</a>
          </div>
        </div>
        <div class="row">

          <div class="col-sm">
            <a href="#" class="footer-logo">Wheels on Bikes</a>
            <p class="copyright">
              <small>&copy; 2022</small>
            </p>
          </div>
          <div class="col-sm">
            <h3>Categories</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Road Bikes</a></li>
              <li><a href="#">Mountain Bikes</a></li>
              <li><a href="#">Accessories</a></li>

            </ul>
          </div>
          <div class="col-sm">
            <h3>Wheels On Bike</h3>
            <ul class="list-unstyled links">
              <li><a href="#">About us</a></li>
              <!-- <li><a href="#">Careers</a></li> -->
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>
          <div class="col-sm">
            <h3>Further Information</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Follow us</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
  </footer>
  
<!-- endoffooter -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- <script src="{{url('js/js/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/cjs/popper.min.js"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/script.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script> -->

</body>
</html>