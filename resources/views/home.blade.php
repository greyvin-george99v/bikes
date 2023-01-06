@extends('home.main')
@section('title', 'WheelsOnBike - Home')
@section('content')
     
<section style="background-image: url(img/img4.png);">

    <div class="circle"></div> 
        <div class="content">
         <div class="textbox">
            <h2>Don't just ride<br> <span>Cycle</span></h2>
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
  {{-- Categories start --}}   
<div class="bike" style="background-image: url('img/bg1.jpg') !important;">
<div class="row">
@foreach ($categories as $category)
  <div class="card" style="width: 18rem;">
    <img src="{{Storage::url($category->image)}}" class="card-img-top" alt="bike 1">
    <div class="card-body">
    <form action="{{route('filter', $category->id)}}" method="POST">
    {{csrf_field()}}
                <input type="hidden" name="id" value="{{$category->id}}">
      <h5 class="card-title">{{$category->name}}</h5>
      <p class="card-text">{{$category->description}}</p>
      <a href="#" class="btn btn-warning">VIEW PRODUCTS</a>
    </div>
  </div>
  @endforeach
</div>
</div>
{{--Categories end--}}
  <!--End Of Content-->
  <!-- Kids Bike -->
<div class="allBikes-content" style="background-image: url(img/img4.png);">
<div class="biker">
<div class="allBikes" >
 
    <h2 >{{$category->name}}</h2>
    <p>{{$category->description}}</p>
  </div>
<!-- 
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

    <li class="item-a">
 
    <div class="box">

    <div class="slide-img">
    <img alt="1" src="img/kid1.jpg">

    <div class="overlay">
    
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
  
    <div class="detail-box">

    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
    
    <a href="#" class="price">$23</a>
      
    </div>
    
    </div>		
  </li>

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
    
    <li class="item-d">  
    <div class="box">
    <div class="slide-img">
    <img alt="4" src="img/kid4.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    
    <div class="detail-box">

    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>

    <a href="#" class="price">$27</a> 
    </div>  
    </div>		
  </li>
   
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
   	
    <li class="item-a">
  
    <div class="box">
  
    <div class="slide-img">
    <img alt="1" src="img/kid1.jpg">

    <div class="overlay">
   
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
   
    <div class="detail-box">

    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>

    <a href="#" class="price">$23</a>
      
    </div>
    
    </div>		
  </li>

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
    
    <li class="item-d">  
    <div class="box">
    <div class="slide-img">
    <img alt="4" src="img/kid4.jpg">
    <div class="overlay">
    <a href="#" class="buy-btn">Buy Now</a>	
    </div>
    </div>
    
    <div class="detail-box">
   
    <div class="type">
    <a href="#">Rabbed Cardigan</a>
    <span>Noe Arrival</span>
    </div>
 
    <a href="#" class="price">$27</a> 
    </div>  
    </div>		
  </li>
	
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
  </section>   -->
</div> -->
</div>

<div class="choose" style="background-image: url(img/choose.jpg);">
  <div class="chooseBikes">
    <h1>CHOOSE YOUR FAVORITE BIKE</h1>
    <p>We offer different types of bikes such as MOUNTAIN BIKES and ROAD BIKES.<br> Choose from different makes and sizes that are available.Brand new,Second hands,<br> Ex-UK’s & USA’s and local used bikes.</p>
  </div>
</div>
  
@endsection