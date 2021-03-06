<!DOCTYPE html>
<html lang="en">
<head>
	<title>VNGYM - The World Of Gymer</title>
	<link rel="stylesheet" type="text/css" href="/css/login.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" href="‪C:\Users\Lenovo\Desktop\logo.png" type="image/x-ico"/>
<link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jockey+One|Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
</head>
<body>
	<div class="detail">
		<a href="#" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
	</div>
  <div class="login">
    <center>
      <form action="{{route('verify-user')}}" method="POST">
        @csrf
      <div  class="login-detail">
      <p style="font-family: Montserrat;font-size: 40px;color: #FFF056;text-align: center;margin-bottom: 1px" class="wow fadeInUp">Login</p>
      <p style="font-family: Montserrat;font-size: 20px;color: white;text-align: center;" class="wow fadeInUp">Welcome To<b style="color: #FFF056"> VN GYM</b></p>
       
    <div class="login-user">

      <div class="login-user-icon"><span class="glyphicon glyphicon-user" style="margin-top: 15%;"></span></div><input type="text" name="email" id="email" placeholder="Nhập email đăng nhập">
    </div>
    <div class="login-pass">
      <div class="login-pass-icon" style="float: left;"><span class="glyphicon glyphicon-lock" style="margin-top: 15%;"></span></div><input type="password" name="password" id="pass" placeholder="Nhập Password">
    </div>
    <div class="login-pass">
      <p style="font-family: Montserrat;font-size: 16px;color: white;float: left;text-align: left;" class="wow fadeInUp">Quên mật khẩu?</p>
      <a href="#" style="text-decoration: none;"><p style="font-family: Montserrat;font-size: 16px;color: white;text-align: right;margin-top: 2%;" class="wow fadeInUp">Chưa có tài khoản</p></a>
    </div>
    <div class="login-pass">
      <button class="btn-login" name="sub" id="btn-sub" type="submit">Đăng nhập</button>

    </div>
    </div>
      </form>
    
    @foreach ($errors->all() as $error)
    <ul>
    <li id="error" style="color: #fa2121;font-family: Montserrat;font-size: 15px">{{$error}}</li>
    </ul> 
    @endforeach
    
  </center>
  </div>
</body>
</html>
