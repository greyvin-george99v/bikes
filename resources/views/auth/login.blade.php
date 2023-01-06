<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/login-style.css')}}">

    <!-- <link rel="stylesheet" href="login-style.css"> -->
</head>
<body>
    <style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

input:focus{
    outline: none;
}
a
{
    text-decoration: none;
}

html, body{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    background: #08070c;
    display: flex;
    align-items: center;
    justify-content: center;
}


.login-main {
    position: relative;
    z-index: 0;
    transition: width ease 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
    background: url("../img/bike71.jpg") no-repeat;
    background-repeat: no-repeat;
    background-size: cover;
    /* overflow: hidden; */


   
}

.login-container{
    position: relative;
    height: 100%;
    margin: 0 auto;
    width: 500px;
    z-index: 0;
    transition: width ease 0.3s;
}
.login-main .login-container::before{
    content:'';
    position: absolutue;
    /* left: 90px;
    bottom: 0px;
    width: 220px; */
   
    background-size: contain;
}
.login-wrapper{
    margin-top: 40px;
    /* margin-bottom: 20px; */
    width: 100%;
    padding: 18px 28px;
    /* top: 50%;
    bottom: 50%; */
    background: linear-gradient(
        122.62deg,
        rgba(196, 196, 196, 0.4) 0%
        rgba(196, 196, 196, 0) 100%
    );
    border: 1px solid #c4c4c4;
    backdrop-filter: blur(10px);
    border-radius: 20px;
   
}
.login-wrapper h1{
    font-size: 35px;
    color: #ff822f;
    font-weight:600;
    line-height: 52px;
    text-transform: capitalize;
    margin-bottom: 5px;
}

.login-wrapper p{
    font-weight: 300;
    font-size: 17px;
    line-height: 25px;
    text-transform: capitalize;
    color: #fff;    
}
form{
    margin-top: 10px;
}
.input-block{
    margin-top: 20px;
}

.input-block label{
    display: block;
    font-weight: 300;
    font-size: 14px;
    line-height: 22px;
    text-transform: capitalize;
    color: #fff;
    margin-bottom: 10px;   
}

.input-block input{
    width:100%;
    height: 55px;
    border: 1px solid #c4c4c4;
    border-radius: 10px;
    background: transparent;
    font-size: 15px;
    color: #fff;
    padding: 0 15px;
}
.input-remember-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}


.custom-checkbox{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-top: 10px;
    position: relative;
    padding-left: 30px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 300;
    line-height: 15px;
    color: #fff;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.custom-checkbox input{
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;

}
.checkmark1{
    position: absolute;
    top: 50%;
    left: 0;
    height: 17px;
    width: 17px;
    background: transparent;
    border: 1px solid #ff7518;
    border-radius: 5px;
    transform: translateY(-50%);
}

.custom-checkbox input:checked ~ .checkmark1{
    background: #ff7518;
    border-color: transparent;
    border-radius: 5px;
}

.checkmark1:after{
    content: '';
    position: absolute;
    display: none;
}
.custom-checkbox input:checked ~ .checkmark1:after{
    display: block;
}

.custom-checkbox .checkmark1::after{
    left: 0;
    right: 0;
    top: 2px;
    bottom: 0;
    margin: auto;
    width: 12px;
    height:12px;
    background: url("../img/checkbox.svg")no-repeat;
    background-size: contain;

}

.forgot-password a{
    font-size: 14px;
    color: #fff;
    font-weight: 500;
    text-decoration: none;
    text-transform: capitalize;

}
.login-btn{
    margin: 20px 0 15px;
}
.login-btn{
    width: 100%;
    height: 55px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #ff7518;
    font-size: 20px;
    font-weight: 500;
    color: #fff;
    border-radius: 10px;
    border: none;
    text-transform: capitalize;

}

.signup-content{
    width: 100%;
    text-align: center;
    margin-bottom: 1px;
}
.signup-content p{
    font-size: 14px;
}

.signup-content p a{
    font-weight: 500;
    font-size: 16px;
    margin-left: 5px;
    color: #ff7518;
}

@media(max-width:768px) {
    .login-container{
        width: 90%;
        margin: 0 auto;    
    }
    .login-main .login-container::before{
        left: 0;
        top: auto;
        bottom: 0;
        width: 150px;
        height: 150px;
    }
    .login-main .login-wrapper{
        width: auto ;
        padding: 30px 30px;
        border-radius: 10px;
        overflow: hidden;
    }
} 
        /* Session Status  */
        <x-auth-session-status class="mb-4" :status="session('status')" />

       /* Validation Errors */
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

    </style>
    <div class="login-main">
        <div class="login-container">
            <div class="login-wrapper">
                <h1>Login</h1>
                <p>Welcome back please login to your account</p>
                <form method="POST" action="{{ route('login') }}">
                {{csrf_field()}}

                <div class="input-block">
                    <label for="email" value="__('Email')">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-block">
                    <label for="password" value="__('Password')">Password</label>
                    <input type="password" id="password" name="password" autocomplete="current-password" required>
                </div>
                <div class="input-remember-container">
                    <div class="remember-me">
                        <label for="remember_me"  class="custom-checkbox">{{ __('Remember me') }}
                            <input id="remember_me" type="checkbox" checked="checked" name="remember">
                            <span class="checkmark1"></span>
                        </label>
                    </div>
                    <div class="forgot-password">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                        @endif
                    </div>
                </div>
                <div>
                    <button  class="login-btn">
                     {{ __('Log in') }}
                    </button>
                    </div>
                    <div class="signup-content">
                        <p>Don't have an account?<a href="{{ route('register') }}">Sign up </a></p>
                    </div>
                
                </form>
            </div>
        </div>
    </div>

</body>
</html>