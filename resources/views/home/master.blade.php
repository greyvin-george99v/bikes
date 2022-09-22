<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.png ">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>

    <title>@yield('title')</title>
</head>
<body>
<!-- <div class="top">
  <div class="logo">
    <a href="#" class="logo"><img src="img/wblogo.png" alt=""></a> 
    <div class="button-container">
      <button class="button button-1">Login</button>
    </div>
</div>
</div> -->
      <!-- <button class="button button-1">Register</button> -->
      <!--header section-->
  @include(home.navigation)
      <!--header section end-->

    
      
<section style="background-image: url(img/img4.png);">   
    <div class="circle"></div> 
        <div class="content">
         <div class="textbox">
            <h2>It's not just Riding,<br>It's <span>Cycling</span></h2>
            <p>Start your journey today through the Mountains, Rivers, Hills, 
                Streets and Towns using the right cycling Tools and Gears.</p>
            <a href="#">Sign Up</a>
        </div>    
            <div class="imgBox">
            <img src="img/img1.png" alt="wheels">
        </div>
        </div>
        <!-- <ul class="thumb">
            <li><img src="img/thumb1.png" onclick="imgSlider('img/img1.png');changeCircleColor('#8d2108')"></li>
            <li><img src="img/thumb2.png" onclick="imgSlider('img/img2.png');changeCircleColor('#e15b3c')"></li>
            <li><img src="img/thumb3.png" onclick="imgSlider('img/img3.png');changeCircleColor('#8b331f')"></li>
        </ul> -->
        <ul class="sci">
            <li><a href="#"><img src="img/facebook.png"></a></li>
            <li><a href="#"><img src="img/twitter.png"></a></li>
            <li><a href="#"><img src="img/instagram.png"></a></li>


        </ul>
          <!--script-link----------->
   
</section>
  <!-- </div> -->
    
    <!--Content-->
@include('home.products')
  <!--End Of Content-->

  <!-- Bike Slider -->
@include('home.slider')
  <!--End Bike Slider -->


<div class="choose" style="background-image: url(img/choose.jpg);">
  <div class="chooseBikes">
    <h1>CHOOSE YOUR FAVORITE BIKE</h1>
    <p>We offer different types of bikes such as MOUNTAIN BIKES and ROAD BIKES.<br> Choose from different makes and sizes that are available.Brand new,Second hands,<br> Ex-UK’s & USA’s and local used bikes.</p>
  </div>
</div>
  
 

<!-- contact -->

<!-- footer -->
 @include('home.footer')
<!-- end footer -->

  <script type="text/javascript">
    function imgSlider(bicycle){
        document.querySelector('.wheels').src = bicycle;
    }
    function changeCircleColor(color){
        const circle = document.querySelector('.circle');
        circle.style.background = color;
    }
</script>
<!-- endoffooter -->
    <script src="layouts/js/jquery-3.3.1.min.js"></script>
    <script src="layouts/js/popper.min.js"></script>
    <script src="layouts/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="layouts/js/script.js"></script>
    <script type="text/javascript" src="layouts/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

</body>
</html>