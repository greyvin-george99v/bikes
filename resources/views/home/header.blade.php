@extends('main')
@section('title', 'WheelsOnBike - Home')
@section('content')
<div class="top">
      <nav>
        <div class="container">
          <ul class="navbar-left">
            <li><a href="#">Home</a></li>
            <!-- <img src="img/wblogo.png" alt=""> -->
            <li><a href="#about">About</a></li>
          </ul> <!--end navbar-left -->
      
          <ul class="navbar-right">
            <li><a href="#" id="cart"><i class="fa fa-shopping-cart"></i> Cart <span class="badge">3</span></a></li>
          </ul> <!--end navbar-right -->
        </div> <!--end container -->
      </nav>
      <div class="container">
        <div class="shopping-cart">
          <div class="shopping-cart-header">
            <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
            <div class="shopping-cart-total">
              <span class="lighter-text">Total:</span>
              <span class="main-color-text">$2,229.97</span>
            </div>
          </div> <!--end shopping-cart-header -->
      
          <ul class="shopping-cart-items">
            <li class="clearfix">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
              <span class="item-name">Sony DSC-RX100M III</span>
              <span class="item-price">$849.99</span>
              <span class="item-quantity">Quantity: 01</span>
            </li>
      
            <li class="clearfix">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1" />
              <span class="item-name">KS Automatic Mechanic...</span>
              <span class="item-price">$1,249.99</span>
              <span class="item-quantity">Quantity: 01</span>
            </li>
      
            <li class="clearfix">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1" />
              <span class="item-name">Kindle, 6" Glare-Free To...</span>
              <span class="item-price">$129.99</span>
              <span class="item-quantity">Quantity: 01</span>
            </li>
          </ul>
      
          <a href="#" class="button-2">Checkout</a>
        </div> <!--end shopping-cart -->
      </div> <!--end container -->
    </div>
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

  <nav role="navigation" class="primary-navigation">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Kids &dtrif;</a>
        <ul class="dropdown">
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Illustration</a></li>
          <li><a href="#">Iconography</a></li>
        </ul>
      </li>
      <li><a href="#">Adults &dtrif;</a>
        <ul class="dropdown">
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Illustration</a></li>
          <li><a href="#">Iconography</a></li>
        </ul>
      </li>
      <li><a href="#">Tricycle</a></li>
      <li><a href="#">Accessories &dtrif;</a>
        <ul class="dropdown">
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Illustration</a></li>
          <li><a href="#">Iconography</a></li>
        </ul>
      </li>
      <li><a href="#">Spare Parts &dtrif;</a>
        <ul class="dropdown">
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Illustration</a></li>
          <li><a href="#">Iconography</a></li>
        </ul>
      </li>
      <li><a href="#">Cycling Event</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
  @endsection
