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
    <link rel="stylesheet" type="text/css" href="css/icomoon.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <!-- <link rel="stylesheet" type="text/css" href="{{url('css/road.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{url('css/lightslider.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js' , 'resources/js/custom.js'])

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
    @foreach($navCategories as $category)
    <li><a href="{{route('allproducts.index',['category'=> $category->name])}}">{{$category->name}}</a></li>
    <li><a href="#">Bikes &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">Men Bikes</a></li>
        <li><a href="#">Women Bikes</a></li>
        <li><a href="#">Kids Bikes</a></li>
      </ul>
    </li>
    <li><a href="#"> Accessories &dtrif;</a>
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
    @endforeach
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

<section style="background-image: url(img/img4.png);">

    <div class="circle"></div> 
        <div class="content">
         <div class="textbox">
            <h2>Don't just ride<br>It's<span>Cycling</span></h2>
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
       
</section>

    <!--Content-->
 @yield('content')

 <div class="choose" style="background-image: url(img/choose.jpg);">
  <div class="chooseBikes">
    <h1>CHOOSE YOUR FAVORITE BIKE</h1>
    <p>We offer different types of bikes such as MOUNTAIN BIKES and ROAD BIKES.<br> Choose from different makes and sizes that are available.Brand new,Second hands,<br> Ex-UK’s & USA’s and local used bikes.</p>
  </div>
</div> 
<!-- <div class="content d-flex align-items-center bg-light">
      <h2 class="w-100 text-center">Footer #1</h2>
    </div> -->
 
    <footer class="footer-20192">
      <div class="site-section">
        <div class="container">

          <div class="cta d-block d-md-flex align-items-center px-5">
            <div>
              <h2 class="mb-0">Ready for your New Bike?</h2>
              <h3 class="text-dark">Let's get started!</h3>
            </div>
            <div class="ml-auto">
              <a href="#" class="btn btn-dark rounded-0 py-3 px-5">Contact us</a>
            </div>
          </div>
          <div class="row">

            <div class="col-sm">
              <a href="#" class="footer-logo">Wheels On Bike </a>
              <p class="copyright">
                <small>&copy; 2023</small>
              </p>
            </div>
            <div class="col-sm">
              <h3>Customers</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Buyer</a></li>
                <li><a href="#">Supplier</a></li>
              </ul>
            </div>
            <div class="col-sm">
              <h3>Company</h3>
              <ul class="list-unstyled links">
                <li><a href="#">About us</a></li>
                <li><a href="#">Careers</a></li>
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
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-medium"></span></a></li>
                <li><a href="#"><span class="icon-paper-plane"></span></a></li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
    



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
 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="css/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script> 
    <script type="text/javascript" src="js/script.js"></script>
    <!-- <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script> -->
    <!-- <script src="{{url('js/js/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/cjs/popper.min.js"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/script.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script> -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
        // alert('hello');
          $('#myTable').DataTable();
      });
      

    //   var table = $("#myTable").dataTable({
    // "paging": true,
    // "searching": true,
    // "ordering": true

    </script>
</body>
</html>