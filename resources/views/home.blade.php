@extends('home.main')
@section('title', 'WheelsOnBike - Home')
@section('content')
     
<!-- <section style="background-image: url(img/img4.png);">

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
          script-link---------
          <script type="text/javascript">
           function imgSlider(bicycle){
             document.querySelector('.wheels').src = bicycle;
             }
           function changeCircleColor(color){
               const circle = document.querySelector('.circle');
               circle.style.background = color;
    }
</script>         
   

</section> -->
  <!-- </div> -->
  
    <!--Content-->
  {{-- Categories start --}}   
<div class="bike" style="background-image: url('img/bg1.jpg') !important;">
<div class="row">
@foreach ($categoriesGrid as $category)
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
  
  
<!-- <div class="allBikes-content" style="background-image: url(img/img4.png);"> -->
@foreach ($categoriesKids as $category)<div class="allBikes" >
         <form action="{{route('filter', $category->id)}}" method="POST">
        {{csrf_field()}}
        <h2>{{ nl2br(e($category->name)) }}</h2>
        <p>{{ $category->description }}</p>
      <div class="gallery">
      @foreach($category->products->take(4) as $product)
      <div class="display1">
        <a href="{{route('product' ,$product->slug )}}"></a>
        <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="{{ $product->image }}">
        <h3>{{$product->name}}</h3>
        <h6>Ksh {{(int)$product->price}}</h6>
        <button class="buttonBike">Buy Now</button>
      </div> 
      @endforeach
      </div>
      </div>
    @endforeach
<!-- </div> -->
 
@foreach ($categoriesMen as $category)
<div class="allBikes" style="background-color:#eeebea;" >
         <form action="{{route('filter', $category->id)}}" method="POST">
        {{csrf_field()}}
        <h2>{{ nl2br(e($category->name)) }}</h2>
        <p>{{ $category->description }}</p>
      <div class="gallery">
      @foreach($category->products->take(4) as $product)
      <div class="display1">
        <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="{{ $product->image }}">
        <h3>{{$product->name}}</h3>
        <h6>Ksh {{(int)$product->price}}</h6>
        <a href="{{route('product' ,$product->slug )}}"></a>
        <button class="buttonBike">Buy Now</button>
      </div> 
      @endforeach
      </div>
      </div>
    @endforeach
<!-- </div> -->
@foreach ($categoriesParts as $category)<div class="allBikes" >
         <form action="{{route('filter', $category->id)}}" method="POST">
        {{csrf_field()}}
        <h2>{{ nl2br(e($category->name)) }}</h2>
        <p>{{ $category->description }}</p>
      <div class="gallery">
      @foreach($category->products->take(4) as $product)
      <div class="display1">
        <a href="{{route('product' ,$product->slug )}}"></a>
        <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="{{ $product->image }}">
        <h3>{{$product->name}}</h3>
        <h6>Ksh {{(int)$product->price}}</h6>
        <button class="buttonBike">Buy Now</button>
      </div> 
      @endforeach
      </div>
      </div>
    @endforeach
 </div> 

    


 
  
@endsection