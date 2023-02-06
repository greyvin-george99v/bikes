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


  <style>
    
}
  /* background: #6394F8; */
  .btn-1{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 10px;
  
  }

  .button {
    appearance: none;
    background: none;
    border: none;
    outline: none;
    padding: 5px 10px;
    border-radius: 20px;
    color: #212121;
    font-size: 15px;
    font-weight: 500;
    margin: 0 15px;
    cursor: pointer;
    transition: 0.4s;
    list-style: none;
    
  }
  
.button-1 {
    color: #ff822f;
    border: 1px solid #ff822f;
   
    
  }
  .primary-navigation{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 0; 
    z-index: 1000;
   
   
  }
  nav.primary-navigation ul li {
    list-style: none;
    margin: 0 auto;
    border-left: 2px solid  #ff822f;
    display: inline-block;
    padding: 0 15px;
    position: relative;
    text-decoration: none;
    text-align: center;
    font-family: arvo;
   

    
    /* font-size: 15px;
    font-weight: 700; */
  }
  nav.primary-navigation li a {
    color: black;
  }
  nav.primary-navigation li a:hover {
    color:  #ff822f;
  }
  nav.primary-navigation li:hover {
    
    cursor: pointer;
   
  }
  nav.primary-navigation ul li ul {
    visibility: hidden;
    /* position: sticky; */
    opacity: 0;
    position: absolute;
    padding-left: 0;
    display: none;
    background: white;
    cursor: pointer;
    
  
  }
  nav.primary-navigation ul li:hover > ul,
  nav.primary-navigation ul li ul:hover {
    visibility: visible;
    opacity: 1;
    display: block;
    min-width: 250px;
    text-align: left;
    padding-top: 20px;
    box-shadow: 0px 3px 5px -1px #ccc;
    z-index: 1;
  }
  nav.primary-navigation ul li ul li {
    clear: both;
    width: 100%;
    text-align: left;
    margin-bottom: 20px;
    border-style: none;
  }
  nav.primary-navigation ul li ul li a:hover {
    padding-left: 10px;
    border-left: 2px solid #955507;
    transition: all 0.3s ease;
    position: fixed;
  }
  
  a {
    text-decoration: none;
  }
  a:hover {
    color: #3CA0E7;
  }
  
  ul li ul li a {
    transition: all 0.5s ease;
    position: fixed;
  }
    a {
      text-decoration: none;
    }
    a:hover {
      color: #ff822f;
    }
    
    ul li ul li a {
      transition: all 0.5s ease;
    position: fixed;
  
    }

.container {
  position: relative;
  margin: auto;
  top: 50px;
  /* width: 80%; */
  float: right;
  
}

.badge {
  background-color: #6394F8;
  border-radius: 10px;
  color: white;
  display: inline-block;
  font-size: 12px;
  line-height: 1;
  padding: 3px 7px;
  text-align: center;
  vertical-align: middle;
  white-space: nowrap;
  z-index: 100;
}


.button-2 {
  background: #6394F8;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  display: block;
  border-radius: 3px;
  font-size: 16px;
  margin: 25px 0 15px 0;
}
.button:hover {
  background: #729ef9;
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}


.top{
  background-color: #141d2a;
}
.button-container {
    display: flex;
    justify-content: space-between;
    align-content: center;
    float: right;
    margin-left: 60%;
    /* width: 10px;
    height: 10px; */
    /* max-width: 200px; */
  }



.button-1:hover {
    color: #FFF;
    background-color: #ff822f;
  }

section
{
    position: relative;
    width: 100;
    min-height: 100vh;
    padding: 100px;
    padding-top: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-image: url('img/img4.png') repeat !important;
    background-size: cover;
    
   
}
/* header{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 20px 100px;
} */

 .logo{
    
    display: flex;
    justify-content: center;
    align-items: center;
}


.content
{
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.content .textbox
{
    position: relative;
    max-width: 600px;
    
}

.content .textbox h2
{
    font-size: 3em;
    font-size: 4em;
    line-height: 1.4em;
    font-weight: 500;
}

.content .textbox h2 span
{
    color: #ff7518;
    font-size: 1.2em;
    font-weight: 500;
    /* font-family: bikefont; */

}

.content .textbox a
{
    display: inline-block;
    margin-top: 20px;
    padding: 8px 20px;
    background-color: #ff7518;
    color: white;
    border-radius: 40px;
    font-weight: 600;
    letter-spacing: 1px;
    text-decoration: none;
}

.content .imgBox
{
    width: 500px;
    display: flex;
    justify-content: flex-end;
    padding-right: 50px;
    margin-top: 50px;
}

.content .imgBox img
{
    max-width: 500px;
}

.thumb
{
    position: absolute;
    left: 50%;
    bottom: 20px;
    transform: translatX(-50%);
    display: flex;
    justify-content: space-between;
    align-content: center;
    max-width: 100px;
    left: 350px;
    
}

.thumb li
{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    cursor: pointer;
    transition: 0.5s;

}
.thumb li:hover
{
    transform: translateY(-15px);
} 

.thumb li img
{
    max-width: 100px;
    left: 50px;
    
    
}

.sci
{
    position: relative;
    top: 30px;
    left: 90px;
    transform: translateY(-50%);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    /* filter: invert(1); */
}

.sci li
{
    list-style: none;
}

.sci li a
{
    display: inline-block;
    margin: 5px 0;
    transform: scale(0.6);
}
.circle
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color:#ff7518;
    clip-path: circle(700px at right 900px);
}

a{
    text-decoration: none;
    color : black;
}

.text-box h2{
    font-weight: 300px;
    font-size: 60px;
    line-height: 1.2;
    margin-bottom: 15px;
}
.title{
    display: grid;
    justify-content: space-between;
}

.bike{
    display: flex;
    justify-content: center;
    margin: 10px;
    padding: 10px;
    
    background-size: cover;
    
}
/* .column{
    display: inline-block;
    justify-content: center;
    align-content: center;

} */
.row{
    display: flex;
    justify-content: space-between;
    
}

.card{
    margin: 10px;
}
.allBikes-content{
    margin: 20px;
    padding: 0;
    width: 100%;
}
.allBikes{
    margin: 10px;
    overflow: hidden;
    

}

.allBikes h2{
    display: flex;
    width: 100%;
    color: #ff7518;
    justify-content: center;
    align-items:center;
    text-align: center;
    font-family: 'Lora', serif;
    font-size: 3em;
}
.allBikes p{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    font-size: medium;
}


a{
	text-decoration:none;
}


.boxed{
	width:300px;
	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
	border-radius: 10px;
	/* overflow: hidden; */
	margin: 15px;
}
.slide-img{
    margin-top: 10px;
	height: 350px;
	position:relative;
}
.slide-img img{
	width:100%;
	height: 100%;
	object-fit: cover;
	box-sizing: border-box;
}
.detail-box{
	width: 100%;
    display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 10px 20px;
	box-sizing: border-box;
	font-family: calibri;
    background-color: #fbe2d9 ;

}
.type{
	display: flex;
	flex-direction: column;
}
.type a{
	color:#222222;
	margin: 5px 0px;
	font-weight: 700;
	letter-spacing: 0.5px;
	padding-right: 8px;
}
.type span{
	color:rgba(26,26,26,0.5);
}
.price{
	color: #333333;
	font-weight: 600;
	font-size: 1.1rem;
	font-family: poppins;
	letter-spacing: 0.5px;
}
.overlay{
	position: relative;
	left: 50%;
	top: 50%;
	transform: translate(-50%,-50%);
	width:100%;
	height: 100%;
	background-color: rgba(23, 206, 238, 0.6);
	display: flex;
	justify-content: center;
	align-items: center;
}
.buy-btn{
	width:140px;
	height: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: #FFFFFF;
	color:#252525;
	font-weight: 900;
	letter-spacing: 1px;
	font-family: calibri;
	border-radius: 20px;
	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
}
.buy-btn:hover{
	color:#FFFFFF;
	background-color: #ff7518;
	transition: all ease 0.3s;
}
.overlay{
	visibility: hidden;
}
.slide-img:hover .overlay{
	visibility: visible;
	animation:fade 0.5s;
}
 
@keyframes fade{
	0%{
		opacity: 0;
	}
	100%{
		opacity: 1;
	}
}
.slider{
    height:100px;
    width:100%;
    /* margin-left: 10px;
    margin-right: 10px; */
    padding-right: var(--bs-gutter-x, 0.75rem);
    padding-left: var(--bs-gutter-x, 0.75rem);
    padding: 0;
	  display: flex;
	  justify-content: center;
	  align-items: center;
    z-index:100;
    /* max-width: 500px; */
    
}

.shopping-cart {
  margin: 20px 0;
  float: right;
  background: white;
  width: 320px;
  position: relative;
  border-radius: 3px;
  padding: 20px;
}
.shopping-cart .shopping-cart-header {
  border-bottom: 1px solid #E8E8E8;
  padding-bottom: 15px;
}
.shopping-cart .shopping-cart-header .shopping-cart-total {
  float: right;
}
.shopping-cart .shopping-cart-items {
  padding-top: 20px;
}
.shopping-cart .shopping-cart-items li {
  margin-bottom: 18px;
}
.shopping-cart .shopping-cart-items img {
  float: right;
  margin-right: 12px;
}
.shopping-cart .shopping-cart-items .item-name {
  display: block;
  padding-top: 10px;
  font-size: 16px;
}
.shopping-cart .shopping-cart-items .item-price {
  color: #6394F8;
  margin-right: 8px;
}
.shopping-cart .shopping-cart-items .item-quantity {
  color: #ABB0BE;
}

.shopping-cart:after {
  bottom: 100%;
  left: 90%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: white;
  border-width: 8px;
  margin-left: -8px;
}

.cart-icon {
  color: #515783;
  font-size: 24px;
  margin-right: 7px;
  float: left;
}

  a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    a, a:hover {
      text-decoration: none !important; }
  
  /* .content {
    padding: 7rem 0rem;
  } */
  h2 {
    font-size: 20px; }
  
  .custom-dropdown > a {
    color: #000; }
    .custom-dropdown > a .arrow {
      display: inline-block;
      position: relative;
      -webkit-transition: .3s transform ease;
      -o-transition: .3s transform ease;
      transition: .3s transform ease; }
  
  .custom-dropdown.show > a .arrow {
    -webkit-transform: rotate(-180deg);
    -ms-transform: rotate(-180deg);
    transform: rotate(-180deg); }
  
  .custom-dropdown .btn:active, .custom-dropdown .btn:focus {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline: none; }
  
  .custom-dropdown .btn.btn-custom {
    border: 1px solid #efefef; }
  
  .custom-dropdown .title-wrap {
    padding-top: 10px;
    padding-bottom: 10px; }
  
  .custom-dropdown .title {
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase; }
  
  .custom-dropdown .dropdown-link .profile-pic {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50px;
    flex: 0 0 50px; 
    
    
  }
    .custom-dropdown .dropdown-link .profile-pic img {
      width: 30px;
      border-radius: 50%; 
      
    }
  
  .custom-dropdown .dropdown-link .profile-info h3, .custom-dropdown .dropdown-link .profile-info span {
    margin: 0;
    padding: 0;
   

  }
  .custom-dropdown .dropdown-link .profile-info h3 {
    font-size: 14px; }
  
  .custom-dropdown .dropdown-link .profile-info span {
    display: inline;
    font-size: 12px; 
   
  }
  
  .custom-dropdown .dropdown-menu {
    border: 1px solid transparent !important;
    -webkit-box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
    margin-top: -10px !important;
    padding-top: 0;
    padding-bottom: 0;
    opacity: 0;
    border-radius: 0;
    background: #fff;
    right: auto !important;
    left: auto !important;
    -webkit-transition: .3s margin-top ease, .3s opacity ease, .3s visibility ease;
    -o-transition: .3s margin-top ease, .3s opacity ease, .3s visibility ease;
    transition: .3s margin-top ease, .3s opacity ease, .3s visibility ease;
    visibility: hidden; 
  }
    .custom-dropdown .dropdown-menu.active {
      opacity: 1;
      visibility: visible;
      margin-top: 0px !important; 
    }
    .custom-dropdown .dropdown-menu a {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      font-size: 14px;
      padding: 15px 15px;
      position: relative;
      color: #b2bac1; 
    }
      .custom-dropdown .dropdown-menu a:last-child {
        border-bottom: none; 
      }
      .custom-dropdown .dropdown-menu a .icon {
        margin-right: 15px;
        display: inline-block; 
      }
      .custom-dropdown .dropdown-menu a:hover, .custom-dropdown .dropdown-menu a:active, .custom-dropdown .dropdown-menu a:focus {
        background: #fff;
        color: #000;
       }
        .custom-dropdown .dropdown-menu a:hover .number, .custom-dropdown .dropdown-menu a:active .number, .custom-dropdown .dropdown-menu a:focus .number {
          color: #fff; 
        }
      .custom-dropdown .dropdown-menu a .number {
        padding: 2px 6px;
        font-size: 11px;
        background: #fd7e14;
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 15px;
        border-radius: 4px;
        color: #fff; 
      }
  
.choose{
  top: 50%;
  left: 50%;
  width: 100%;
  height: 100%;
  max-height: 400px;
  display: flex;
  justify-content: center;
  align-content: center;
}
.chooseBikes{
  text-align: center;
}
.choose, h1{
  /* color: red; */
  /* font-size: medium; */
  font-family: 'Montserrat', sans-serif;
  padding-top: 50px;
}
.chooseBikes p{
  color: black;
  font-size: 1.5em;
  font-weight: 500px;
}


h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.content {
  height: 70vh; }

.footer-20192 {
  position: relative;
  color: #fff;
  padding: 2rem 0;
  background-color: #141d2a; 
}
  .footer-20192 .container {
    position: relative; 
  }
  .footer-20192 h3 {
    font-size: 16px;
    margin-bottom: 10px;
    margin-top: 0;
    line-height: 1.5; 
  }
  .footer-20192 .links li {
    margin-bottom: 10px;
    line-height: 1.5;
    display: block; 
  }
    .footer-20192 .links li a {
      color: #666873;
  }
      .footer-20192 .links li a:hover {
        color: #ffff 
  }
  .footer-20192 .social li {
    display: inline-block;
    position: relative; 
  }
    .footer-20192 .social li a {
      position: relative;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: inline-block;
      margin: 0;
      padding: 0;
      background-color: #ff822f;
      color: #fff; 
  }
      .footer-20192 .social li a > span {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); 
  }
  .footer-20192 .footer-logo {
    color: #fff;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: .1rem; 
  }
  .footer-20192 .copyright {
    color: #666873; 
  }
  .footer-20192 .cta {
    -webkit-box-shadow: -20px -20px 0 0 rgba(52, 58, 64, 0.2);
    box-shadow: -20px -20px 0 0 rgba(52, 58, 64, 0.2);
    padding: 20px;
    background-color: #ff822f;
    top: -150px;
    position: relative; 
  }
    .footer-20192 .cta h2, .footer-20192 .cta h3 {
      line-height: 1.5; 
  }
    .footer-20192 .cta h3 {
      font-size: 20px;
  }
  </style>
/* contenti */
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
