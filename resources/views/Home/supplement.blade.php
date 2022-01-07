<!DOCTYPE html>
<html lang="en">

<head>
    <title>VNGYM - The World Of Gymer</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gym.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/hinhhover.js"></script>
    <script type="text/javascript" src="/js/nav.js"></script>
    <script type="text/javascript" src="/js/addCart.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="‪C:\Users\Lenovo\Desktop\logo.png" type="image/x-ico" />
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jockey+One|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
    
    <style type="text/css">
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            z-index: 2;
            background-color: black;
            min-width: 200px;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: Montserrat;

        }

        .dropdown-content a:hover {
            background-color: #FFF056;
            color: black;
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .use {
            color: #FFF056;
        }

        .dropdown-submenu {
            position: relative;
            background-color: #FFF056 !important;
            font-family: Montserrat;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;

            background-color: #FFF056 !important;
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block;
            background-color: #FFF056 !important;
        }

        .dropdown-submenu>a:after {

            background-color: #FFF056 !important;
            margin-top: 5px;
            margin-right: -10px;
        }

        .dropdown-submenu:hover>a:after {
            background-color: #FFF056 !important;
        }

        .dropdown-submenu.pull-left {

            background-color: #FFF056 !important;
        }

        .dropdown-submenu.pull-left>.dropdown-menu {

            background-color: #FFF056 !important;
        }

        .dropdown-submenu:hover {
            background-color: #FFF056 !important;
        }

        .dropdown-menu>li>a:hover {
            background-color: #FFF056 !important;
            filter: brightness(98%);
            color: red !important;
        }

    </style>
</head>

<body>
    
    <div class="TPBS-login">
        <div class="TPBS-login1">
            <p style="float: left;margin-right: 2%" class="hovertext"><span class="glyphicon glyphicon-bell"
                    style="color: #FFF056"></span>Thông báo</p>
            <p style="float: left;margin-right: 4%" class="hovertext"><span
                    class="glyphicon glyphicon-exclamation-sign" style="color: #FFF056"></span>Thắc mắc</p>
        </div>
        <div class="TPBS-login2">

            @if (Auth::check())
            <p style='float: left;margin-right: 4%;margin-left: 10%'><span class='glyphicon glyphicon-phone-alt'
                style='color: #FFF056'></span>Hotline: +2 392 3929 210</p>
        <li class="dropdown">
            <a href="#" style="font-size: 15px;font-family: Montserrat;text-decoration: none;outline: none;"
                class="hovertext">
                <span class="glyphicon glyphicon-user use"></span>{{ session('name') }}<i
                    class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-user"
                        style="margin-right: 3%"></span>Thông Tin Cá Nhân</a>
                <a href="" style="text-decoration: none;"><span class="glyphicon glyphicon-shopping-cart"
                        style="margin-right: 3%"></span>Giỏ Hàng Của Tôi</a>
                <a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-heart"
                        style="margin-right: 3%"></span>Sản Phẩm Yêu Thích</a>
                <a href="" style="text-decoration: none;"><i class="fas fa-truck"
                        style="margin-right: 3%"></i>Đơn Hàng Của Tôi</a>
                <a href="" style="text-decoration: none;"><span class="glyphicon glyphicon-log-out"
                        style="margin-right: 3%"></span>Đăng Xuất</a>
            </div>
        </li>
                

            @else
            <p style='float: left;margin-right: 4%;'><span class='glyphicon glyphicon-phone-alt'
                style='color: #FFF056'></span>Hotline: +2 392 3929 210</p>
        <a href='login' style='text-decoration: none;'>
            <p style='float: left;margin-right: 4%' class='hovertext'><span class='glyphicon glyphicon-user'
                    style='color: #FFF056'></span>Đăng nhập</p>
        </a>
        <a href=''>
            <p style='float: left;margin-right: 4%' class='hovertext'><span class='glyphicon glyphicon-log-out'
                    style='color: #FFF056'></span>Đăng ký</p>
        </a>
            @endif

        </div>
    </div>
    <div class="TPBS-title">
        <div class="TPBS-title-logo">
            <a href="/" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b
                    style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b
                    style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b
                    style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b
                    style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
        </div>
        <div class="TPBS-title-search">
            <form action="">
                <input type="text" name="key" placeholder="Nhập sản phẩm cần tìm......"
                    style="font-family: Montserrat;font-size: 16px">
                <button type="submit"><span class="glyphicon glyphicon-search" style="font-size: 20px;"></span></button>
            </form>
        </div>
        <div class="TPBS-title-cart">

            @if (Auth::check())
                <a href='/view_cart/{{session('id')}}'><button><span class='glyphicon glyphicon-shopping-cart'></span><b
                            style='font-family: Montserrat;margin-left: 3%;text-decoration: none;'>Giỏ
                            hàng</b></button></a>

            @else
                <a href='{{route('login')}}'><button><span class='glyphicon glyphicon-shopping-cart'></span><b
                            style='font-family: Montserrat;margin-left: 3%;text-decoration: none;'>Giỏ
                            hàng</b></button></a>
            @endif

        </div>
    </div>
    <div class="TPBS-list">
        <div class="TPBS-list-product1">
            <p><span class="glyphicon glyphicon-th-list" style="margin-right: 3%"></span><b
                    style="font-family: Montserrat">DANH MỤC SẢN PHẨM</b></p>
        </div>
        <div class="TPBS-list-product2">
            <p><span class="glyphicon glyphicon-earphone" style="margin-right: 3%"></span><b
                    style="font-family: Montserrat">Liên hệ đặt hàng ngay</b></p>
        </div>
        <div class="TPBS-list-product3">
            <p><span class="glyphicon glyphicon-thumbs-up" style="margin-right: 3%"></span><b
                    style="font-family: Montserrat">Sản phẩm 100% chính hãng</b></p>
        </div>
        <div class="TPBS-list-product3">
            <p><span class="glyphicon glyphicon-plane" style="margin-right: 3%"></span><b
                    style="font-family: Montserrat">Giao hàng nhanh nhất</b></p>
        </div>
        <div class="TPBS-list-product3">
            <p><span class="glyphicon glyphicon-sort" style="margin-right: 3%"></span><b
                    style="font-family: Montserrat">7 ngày đổi trả dễ dàng</b></p>
        </div>
    </div>
    <div class="TPBS-menu">
        <div class="TPBS-menu-list">
            <div class="TPBS-menu-list1">
                <img src="/svg/arm-dumbbell.svg">
                <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Tăng Cơ, Giảm Mỡ</b></p>
            </div>

            <div class="TPBS-menu-list1">
                <img src="/svg/body-weight-scales.svg">
                <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Tăng Cân</b></p>
            </div>
            <div class="TPBS-menu-list1">
                <img src="/svg/robust-strong.svg">
                <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Tăng Sức Mạnh</b></p>
            </div>

            <div class="TPBS-menu-list1 dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
                style="display: block; position: static;width: 100%;background-color: transparent;border: 0px;box-shadow: 0px 0px;">

                <li class="dropdown-submenu">
                    <a class="dropdown-toggle topLevel" data-toggle="dropdown" href="#"
                        style="padding-left: 0px;padding-right: 0px">
                        <img src="/svg/gym-workout-treadmill.svg">
                        <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat;float: left;"><b
                                style="margin-right: 63px">Năng lượng</b></p><i class='fas fa-caret-right'
                            style="float: left;padding-top: 4%;margin-left: 1px"></i>

                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#"><b style="font-size: 16px">Năng lượng GYM</b><i class='fas fa-caret-right'
                                    style="padding-top: 4%;margin-left: 125px"></i></a>

                            <ul class="dropdown-menu">
                                <li><a href="#"><b>Pre-workout</b></a></li>
                                <li><a href="#"><b>Intra-workout</b></a></li>
                                <li><a href="#"><b>Thời điểm khác</b></a></li>

                            </ul>

                        </li>
                        <li class="dropdown-submenu">

                            <a href="#"><b style="font-size: 16px">Phục hồi cơ thể</b><i class='fas fa-caret-right'
                                    style="padding-top: 4%;margin-left: 150px"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><b>BCAA</b></a></li>
                                <li><a href="#"><b>Amino Acids</b></a></li>
                                <li><a href="#"><b>Hỗ trợ sức khỏe khác</b></a></li>

                            </ul>

                        </li>

                    </ul>
                </li>

            </div>

            <div class="TPBS-menu-list1 dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
                style="display: block; position: static;width: 100%;background-color: transparent;border: 0px;box-shadow: 0px 0px;">

                <li class="dropdown-submenu">
                    <a class="dropdown-toggle topLevel" data-toggle="dropdown" href="#"
                        style="padding-left: 0px;padding-right: 0px">
                        <img src="/svg/weight-loss.svg">
                        <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat;float: left;"><b
                                style="margin-right: 80px">Giảm Cân</b></p><i class='fas fa-caret-right'
                            style="float: left;padding-top: 4%;margin-left: 3px"></i>

                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#"><b style="font-size: 16px">Protein hỗ trợ</b><i class='fas fa-caret-right'
                                    style="padding-top: 4%;margin-left: 125px"></i></a>

                            <ul class="dropdown-menu">
                                <li><a href="#"><b>Whey thấp năng lượng</b></a></li>
                                <li><a href="#"><b>Bữa ăn thông minh</b></a></li>

                            </ul>

                        </li>
                        <li class="dropdown-submenu">

                            <a href="#"><b style="font-size: 16px">Fat-burner</b><i class='fas fa-caret-right'
                                    style="padding-top: 4%;margin-left: 150px"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><b>Mạnh - Hiệu quả nhanh</b></a></li>
                                <li><a href="#"><b>Vừa - Duy trì vóc dáng</b></a></li>

                            </ul>

                        </li>

                    </ul>
                </li>

            </div>

            <div class="TPBS-menu-list1 dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
                style="display: block; position: static;width: 100%;background-color: transparent;border: 0px;box-shadow: 0px 0px;">

                <li class="dropdown-submenu">
                    <a class="dropdown-toggle topLevel" data-toggle="dropdown" href="#"
                        style="padding-left: 0px;padding-right: 0px">
                        <img src="/svg/healthy-diet.svg">
                        <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat;float: left;"><b
                                style="margin-right: 19px">Vitamin, Khoáng</b></p><i class='fas fa-caret-right'
                            style="float: left;padding-top: 4%;margin-left: 3px"></i>

                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#"><b style="font-size: 16px">Bổ sung vitamin</b></a>
                            <a href="#"><b style="font-size: 16px">Tăng hóc môn nam</b></a>
                            <a href="#"><b style="font-size: 16px">Bổ sung dầu cá</b></a>
                        </li>


                    </ul>
                </li>

            </div>

            <div class="TPBS-menu-list1">
                <img src="/svg/fitness.svg">
                <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat"><b>Fitness</b></p>
            </div>

            <div class="TPBS-menu-list1 dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
                style="display: block; position: static;width: 100%;background-color: transparent;border: 0px;box-shadow: 0px 0px;">

                <li class="dropdown-submenu">
                    <a class="dropdown-toggle topLevel" data-toggle="dropdown" href="#"
                        style="padding-left: 0px;padding-right: 0px">
                        <img src="/svg/healthy.svg">
                        <p style="font-size: 18px;margin-top: 1.5%;font-family: Montserrat;float: left;"><b
                                style="margin-right: 48px">Whey Protein</b></p><i class='fas fa-caret-right'
                            style="float: left;padding-top: 4%;margin-left: 3px"></i>

                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#"><b style="font-size: 16px">Protein hoàn chỉnh</b><i class='fas fa-caret-right'
                                    style="padding-top: 4%;margin-left: 125px"></i></a>

                            <ul class="dropdown-menu">
                                <li><a href="#"><b>Mass cao Calories</b></a></li>
                                <li><a href="#"><b>Mass trung Calories</b></a></li>
                                <li><a href="#"><b>Bữa ăn thay thế</b></a></li>
                                <li><a href="#"><b>TPBS tiết kiệm</b></a></li>
                            </ul>

                        </li>
                        <li class="dropdown-submenu">

                            <a href="#"><b style="font-size: 16px">Whey - Casein protein</b><i
                                    class='fas fa-caret-right' style="padding-top: 4%;margin-left: 100px"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><b>Whey isolate protein</b></a></li>
                                <li><a href="#"><b>Whey blend</b></a></li>
                                <li><a href="#"><b>Casein</b></a></li>
                            </ul>

                        </li>

                    </ul>
                </li>

            </div>
        </div>
        <div class="TPBS-menu-img">
            <div class="TPBS-menu-img-carosel">
                <div class="TPBS-menu-img-carosel1">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"
                                style="border: 2px solid black;background-color: #FFF056"></li>
                            <li data-target="#myCarousel" data-slide-to="1"
                                style="border: 2px solid black;background-color: #FFF056"></li>
                            <li data-target="#myCarousel" data-slide-to="2"
                                style="border: 2px solid black;background-color: #FFF056"></li>
                            <li data-target="#myCarousel" data-slide-to="3"
                                style="border: 2px solid black;background-color: #FFF056"></li>
                            <li data-target="#myCarousel" data-slide-to="4"
                                style="border: 2px solid black;background-color: #FFF056"></li>
                            <li data-target="#myCarousel" data-slide-to="5"
                                style="border: 2px solid black;background-color: #FFF056"></li>
                            <li data-target="#myCarousel" data-slide-to="6"
                                style="border: 2px solid black;background-color: #FFF056"></li>
                            <li data-target="#myCarousel" data-slide-to="7"
                                style="border: 2px solid black;background-color: #FFF056"></li>
                            '<li data-target="#myCarousel" data-slide-to="8"
                                style="border: 2px solid black;background-color: #FFF056"></li>
                            '<li data-target="#myCarousel" data-slide-to="9"
                                style="border: 2px solid black;background-color: #FFF056"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">

                                <img src="{{config('constants.url.image-page').'imgPage1.jpg'}}" alt="Los Angeles"
                                    style="width:100%;height: 428px">
                            </div>

                            <div class="item">
                                <img src="{{config('constants.url.image-page').'imgPage2.jpg'}}" alt="Chicago"
                                    style="width:100%;height: 428px">
                            </div>

                            <div class="item">
                                <img src="{{config('constants.url.image-page').'imgPage3.jpg'}}" alt="New york"
                                    style="width:100%;height: 428px">
                            </div>
                            <div class="item">
                                <img src="{{config('constants.url.image-page').'imgPage4.jpg'}}" alt="New york"
                                    style="width:100%;height: 428px">
                            </div>
                            <div class="item">
                                <img src="{{config('constants.url.image-page').'imgPage5.jpg'}}" alt="New york"
                                    style="width:100%;height: 428px">
                            </div>
                            <div class="item">
                                <img src="{{config('constants.url.image-page').'imgPage2.jpg'}}" alt="Chicago"
                                    style="width:100%;height: 428px">
                            </div>

                            <div class="item">
                                <img src="{{config('constants.url.image-page').'imgPage3.jpg'}}" alt="New york"
                                    style="width:100%;height: 428px">
                            </div>
                            <div class="item">
                                <img src="{{config('constants.url.image-page').'imgPage4.jpg'}}" alt="New york"
                                    style="width:100%;height: 428px">
                            </div>
                            <div class="item">
                                <img src="{{config('constants.url.image-page').'imgPage5.jpg'}}" alt="New york"
                                    style="width:100%;height: 428px">
                            </div>
                            <div class="item">
                                <img src="{{config('constants.url.image-page').'imgPage1.jpg'}}" alt="New york"
                                    style="width:100%;height: 428px">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="TPBS-menu-img2">
                <img src="{{config('constants.url.image-page').'imgSide.jpg'}}" style="height: 214px;width: 100%">

                <img src="{{config('constants.url.image-page').'imgSide1.jpg'}}" style="height: 214px;width: 100%">
            </div>
        </div>
    </div>
    <div class="TPBS-undermenu-img">
        <div class="TPBS-undermenu-img1">
            <img src="{{config('constants.url.image-page').'imgPageBe1.jpg'}}" style="height: 300px;width: 95%;">
        </div>
        <div class="TPBS-undermenu-img2">
            <img src="{{config('constants.url.image-page').'imgPageBe.jpg'}}" style="height: 300px;width: 100%">
        </div>
    </div>
    <div class="TPBS-detail">
        <div class="TPBS-detail1"></div>
        <div class="TPBS-detail2">
            <p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px"
                class="hovertext" id="whey">WHEY PROTEIN</p>
        </div>
        <div class="TPBS-detail3"></div>

        <div class="TPBS-detail-product">

            @forelse ($productListWhey->take(4) as $productWhey)

                <div class="TPBS-detail-product1">
                    <img src="{{ config('constants.url.image-product') . $productWhey->image }}"
                        style="height: 270px;width: 100%" class="image">
                    <div class="TPBS-middle-image">
                        @if(Auth::check())
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button id="btn-addCart{{$productWhey->id}}" onclick="addCart({{$productWhey->id}},{{session('id')}})"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @else
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button onclick="alert('You need to login')"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @endif
                    </div>
                    <div class="TPBS-detail-product1-text">
                        <a href="{{config('constants.url.detail-product-page').$productWhey->slug}}" style="text-decoration: none"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;" class="hovertext">
                            <b>{{ $productWhey->limit_name }}</b></p></a>
                        <p style="font-family: Montserrat;font-size: 18px;color: white">5lbs (2.27kg)</p>
                        
                        <p class="description_summary" align="justify">{{ $productWhey->limit_description }}</p>
                        <div class="TPBS-detail-product1-price">
                            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $productWhey->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $productWhey->price_vnd }}</b></p>
                        </div>
                    </div>
                </div>
                
            @empty
                <p>Empty</p>
            @endforelse
        </div>
        <div class="TPBS-detail-product">
            @forelse ($productListWhey1->take(4) as $productWhey)

                <div class="TPBS-detail-product1">
                    <img src="{{ config('constants.url.image-product') . $productWhey->image }}"
                        style="height: 270px;width: 100%" class="image">
                    <div class="TPBS-middle-image">
                        @if(Auth::check())
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button id="btn-addCart{{$productWhey->id}}" onclick="addCart({{$productWhey->id}},{{session('id')}})"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @else
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button onclick="alert('You need to login')"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @endif
                    </div>
                    <div class="TPBS-detail-product1-text">
                        <a href="{{config('constants.url.detail-product-page').$productWhey->slug}}" style="text-decoration: none"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;" class="hovertext">
                            <b>{{ $productWhey->limit_name }}</b></p></a>
                        <p style="font-family: Montserrat;font-size: 18px;color: white">5lbs (2.27kg)</p>
                        <p class="description_summary" align="justify">{{ $productWhey->limit_description }}</p>
                        <div class="TPBS-detail-product1-price">
                            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $productWhey->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $productWhey->price_vnd }}</b></p>
                        </div>
                    </div>
                </div>

            @empty
                <p>Empty</p>
            @endforelse

        </div>
        <div class="TPBS-detail-product">
            @forelse ($productListWhey2->take(4) as $productWhey)

                <div class="TPBS-detail-product1">
                    <img src="{{ config('constants.url.image-product') . $productWhey->image }}"
                        style="height: 270px;width: 100%" class="image">
                    <div class="TPBS-middle-image">
                        @if(Auth::check())
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button id="btn-addCart{{$productWhey->id}}" onclick="addCart({{$productWhey->id}},{{session('id')}})"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @else
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button onclick="alert('You need to login')"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @endif
                    </div>
                    <div class="TPBS-detail-product1-text">
                        <a href="{{config('constants.url.detail-product-page').$productWhey->slug}}" style="text-decoration: none"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;" class="hovertext">
                            <b>{{ $productWhey->limit_name }}</b></p></a>
                        <p style="font-family: Montserrat;font-size: 18px;color: white">5lbs (2.27kg)</p>
                        <p class="description_summary" align="justify">{{ $productWhey->limit_description }}</p>
                        <div class="TPBS-detail-product1-price">
                            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $productWhey->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $productWhey->price_vnd }}</b></p>
                        </div>
                    </div>
                </div>

            @empty
                <p>Empty</p>
            @endforelse

        </div>
        <center><button class="TPBS-btnxemthem"><b>Xem Thêm</b></button></center>
    </div>
    <div class="TPBS-detail">
        <div class="TPBS-detail1"></div>
        <div class="TPBS-detail2">
            <p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px"
                class="hovertext">BCAA</p>
        </div>
        <div class="TPBS-detail3"></div>

        <div class="TPBS-detail-product">
            @forelse ($productListBcaa->take(4) as $productBcaa)

                <div class="TPBS-detail-product1">
                    <img src="{{ config('constants.url.image-product') . $productBcaa->image }}"
                        style="height: 270px;width: 100%" class="image">
                    <div class="TPBS-middle-image">
                        @if(Auth::check())
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button id="btn-addCart{{$productBcaa->id}}" onclick="addCart({{$productBcaa->id}},{{session('id')}})"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @else
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button onclick="alert('You need to login')"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @endif
                    </div>
                    <div class="TPBS-detail-product1-text">
                        <a href="{{config('constants.url.detail-product-page').$productBcaa->slug}}" style="text-decoration: none"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white">
                            <b>{{ $productBcaa->limit_name }}</b></p></a>
                        <p style="font-family: Montserrat;font-size: 18px;color: white">90 servings</p>
                        <p class="description_summary" align="justify">{{ $productBcaa->limit_description }}</p>
                        <div class="TPBS-detail-product1-price">
                            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $productBcaa->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $productBcaa->price_vnd }}</b></p>
                        </div>
                    </div>
                </div>

            @empty
                <p>Empty</p>
            @endforelse
        </div>
        <div class="TPBS-detail-product">
            @forelse ($productListBcaa1->take(4) as $productBcaa)

                <div class="TPBS-detail-product1">
                    <img src="{{ config('constants.url.image-product') . $productBcaa->image }}"
                        style="height: 270px;width: 100%" class="image">
                    <div class="TPBS-middle-image">
                        @if(Auth::check())
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button id="btn-addCart{{$productBcaa->id}}" onclick="addCart({{$productBcaa->id}},{{session('id')}})"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @else
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button onclick="alert('You need to login')"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @endif
                    </div>
                    <div class="TPBS-detail-product1-text">
                        <a href="{{config('constants.url.detail-product-page').$productBcaa->slug}}" style="text-decoration: none"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white">
                            <b>{{ $productBcaa->limit_name }}</b></p></a>
                        <p style="font-family: Montserrat;font-size: 18px;color: white">90 servings</p>
                        <p class="description_summary" align="justify">{{ $productBcaa->limit_description }}</p>
                        <div class="TPBS-detail-product1-price">
                            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $productBcaa->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $productBcaa->price_vnd }}</b></p>
                        </div>
                    </div>
                </div>

            @empty
                <p>Empty</p>
            @endforelse

        </div>
        <center><button class="TPBS-btnxemthem"><b>Xem Thêm</b></button></center>
    </div>
    <div class="TPBS-detail">
        <div class="TPBS-detail1"></div>
        <div class="TPBS-detail2">
            <p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px"
                class="hovertext">SỮA TĂNG CÂN</p>
        </div>
        <div class="TPBS-detail3"></div>

        <div class="TPBS-detail-product">

            @forelse ($productListWeight->take(4) as $productWeight)
                <div class="TPBS-detail-product1">
                    <img src="{{ config('constants.url.image-product') . $productWeight->image }}"
                        style="height: 270px;width: 100%" class="image">
                    <div class="TPBS-middle-image">
                        @if(Auth::check())
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button id="btn-addCart{{$productWeight->id}}" onclick="addCart({{$productWeight->id}},{{session('id')}})"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @else
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button onclick="alert('You need to login')"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @endif
                    </div>
                    <div class="TPBS-detail-product1-text">
                        <a href="{{config('constants.url.detail-product-page').$productWeight->slug}}" style="text-decoration: none"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white">
                            <b>{{ $productWeight->limit_name }}</b></p></a>
                        <p style="font-family: Montserrat;font-size: 18px;color: white"> 12lbs (5.45kg)</p>
                        <p class="description_summary" align="justify">{{ $productWeight->limit_description }}</p>
                        <div class="TPBS-detail-product1-price">
                            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $productWeight->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $productWeight->price_vnd }}</b></p>
                        </div>
                    </div>
                </div>
            @empty
                <p>Empty</p>
            @endforelse

        </div>
        <div class="TPBS-detail-product">

            @forelse ($productListWeight1->take(4) as $productWeight)
                <div class="TPBS-detail-product1">
                    <img src="{{ config('constants.url.image-product') . $productWeight->image }}"
                        style="height: 270px;width: 100%" class="image">
                    <div class="TPBS-middle-image">
                        @if(Auth::check())
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button id="btn-addCart{{$productWeight->id}}" onclick="addCart({{$productWeight->id}},{{session('id')}})"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @else
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button onclick="alert('You need to login')"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @endif
                    </div>
                    <div class="TPBS-detail-product1-text">
                        <a href="{{config('constants.url.detail-product-page').$productWeight->slug}}" style="text-decoration: none"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white">
                            <b>{{ $productWeight->limit_name }}</b></p></a>
                        <p style="font-family: Montserrat;font-size: 18px;color: white"> 12lbs (5.45kg)</p>
                        <p class="description_summary" align="justify">{{ $productWeight->limit_description }}</p>
                        <div class="TPBS-detail-product1-price">
                            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $productWeight->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $productWeight->price_vnd }}</b></p>
                        </div>
                    </div>
                </div>
            @empty
                <p>Empty</p>
            @endforelse

        </div>
        <div class="TPBS-detail-product">

            @forelse ($productListWeight2->take(4) as $productWeight)
                <div class="TPBS-detail-product1">
                    <img src="{{ config('constants.url.image-product') . $productWeight->image }}"
                        style="height: 270px;width: 100%" class="image">
                    <div class="TPBS-middle-image">
                        @if(Auth::check())
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button id="btn-addCart{{$productWeight->id}}" onclick="addCart({{$productWeight->id}},{{session('id')}})"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @else
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button onclick="alert('You need to login')"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @endif
                    </div>
                    <div class="TPBS-detail-product1-text">
                        <a href="{{config('constants.url.detail-product-page').$productWeight->slug}}" style="text-decoration: none"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white">
                            <b>{{ $productWeight->limit_name }}</b></p></a>
                        <p style="font-family: Montserrat;font-size: 18px;color: white"> 12lbs (5.45kg)</p>
                        <p class="description_summary" align="justify">{{ $productWeight->limit_description }}</p>
                        <div class="TPBS-detail-product1-price">
                            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $productWeight->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $productWeight->price_vnd }}</b></p>
                        </div>
                    </div>
                </div>
            @empty
                <p>Empty</p>
            @endforelse

        </div>
        <center><button class="TPBS-btnxemthem"><b>Xem Thêm</b></button></center>
    </div>
    <div class="TPBS-detail">
        <div class="TPBS-detail1"></div>
        <div class="TPBS-detail2">
            <p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px"
                class="hovertext">VITAMIN KHOÁNG</p>
        </div>
        <div class="TPBS-detail3"></div>

        <div class="TPBS-detail-product">

            @forelse ($productListVitamin->take(4) as $productVitamin)
                <div class="TPBS-detail-product1">
                    <img src="{{ config('constants.url.image-product') . $productVitamin->image }}"
                        style="height: 270px;width: 100%" class="image">
                    <div class="TPBS-middle-image">
                        @if(Auth::check())
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button id="btn-addCart{{$productVitamin->id}}" onclick="addCart({{$productVitamin->id}},{{session('id')}})"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @else
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button onclick="alert('You need to login')"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @endif
                    </div>
                    <div class="TPBS-detail-product1-text">
                        <a href="{{config('constants.url.detail-product-page').$productVitamin->slug}}" style="text-decoration: none"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white">
                            <b>{{ $productVitamin->limit_name }}</b></p></a>
                        <p style="font-family: Montserrat;font-size: 18px;color: white">90 Viên</p>
                        <p class="description_summary" align="justify">{{ $productVitamin->limit_description }}</p>
                        <div class="TPBS-detail-product1-price">
                            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $productVitamin->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $productVitamin->price_vnd }}</b></p>
                        </div>
                    </div>
                </div>
            @empty
                <p>Empty</p>
            @endforelse

        </div>
        <div class="TPBS-detail-product">
            @forelse ($productListVitamin1->take(4) as $productVitamin)
                <div class="TPBS-detail-product1">
                    <img src="{{ config('constants.url.image-product') . $productVitamin->image }}"
                        style="height: 270px;width: 100%" class="image">
                    <div class="TPBS-middle-image">
                        @if(Auth::check())
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button id="btn-addCart{{$productVitamin->id}}" onclick="addCart({{$productVitamin->id}},{{session('id')}})"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @else
                        <button><span class="glyphicon glyphicon-search"></span></button>
                        <button onclick="alert('You need to login')"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                        <button><span class="glyphicon glyphicon-heart"></span></button>
                        @endif
                    </div>
                    <div class="TPBS-detail-product1-text">
                        <a href="{{config('constants.url.detail-product-page').$productVitamin->slug}}" style="text-decoration: none"><p style="margin-bottom: 1px;font-family: Montserrat;font-size: 23px;color: white">
                            <b>{{ $productVitamin->limit_name }}</b></p></a>
                        <p style="font-family: Montserrat;font-size: 18px;color: white">90 Viên</p>
                        <p class="description_summary" align="justify">{{ $productVitamin->limit_description }}</p>
                        <div class="TPBS-detail-product1-price">
                            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $productVitamin->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $productVitamin->price_vnd }}</b></p>
                        </div>
                    </div>
                </div>
            @empty
                <p>Empty</p>
            @endforelse

        </div>
        <center><button class="TPBS-btnxemthem"><b>Xem Thêm</b></button></center>
    </div>
    <div class="TPBS-detail">
        <div class="TPBS-detail1"></div>
        <div class="TPBS-detail2">
            <p style="text-align: center;display: block;border-bottom: 2px solid #FFF056;width: 100%;font-family: Montserrat;font-size: 25px"
                class="hovertext">BÀI VIẾT KHÁC</p>
        </div>
        <div class="TPBS-detail3"></div>
        <div class="TPBS-another">
            <div class="TPBS-another1">
                <iframe src="https://www.youtube.com/embed/SkOqEf7AiKE" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    style="width: 100%;height: 420px;"></iframe>
                <p style="font-family: Montserrat;font-size: 25px;" class="hovertext"><b>Tập ngực sao cho ngực to
                        dày rộng và hiệu quả</b></p>
            </div>
            <div class="TPBS-another2">
                <div class="TPBS-another2-detail" style="padding-top: 0%">
                    <img src="http://cdn.thehinh.com/2016/02/giao-an-tap-gym-4-buoi-cho-nu.jpg">
                    <p style="font-family: Montserrat;font-size: 20px;" class="hovertext"><b>Giáo án thể hình nữ
                            giúp giảm cân, giảm mỡ</b></p>
                    <p style="font-family: Montserrat;font-size: 15px;color: white">Phụ nữ luôn rất quan trọng trong vấn
                        đề giảm cân, các bài tập này sẽ giúp các chị em phụ nữ giảm cân hiệu quả nhất</p>
                </div>
                <div class="TPBS-another2-detail">
                    <img src="https://baogiamcan.com/wp-content/uploads/2018/12/chia-nho-bua-an.jpg">
                    <p style="font-family: Montserrat;font-size: 20px;" class="hovertext"><b>Phương pháp xây dựng
                            chế độ ăn uống hợp lý cho gymer</b></p>
                    <p style="font-family: Montserrat;font-size: 15px;color: white">Đối với các gymer thì chế độ ăn uống
                        là điều rất quan trọng và phải làm thế nào để có chế độ ăn uống hợp lý thì VN GYM sẽ giải đáp
                        cho các bạn </p>
                </div>
                <div class="TPBS-another2-detail">
                    <img
                        src="http://a9.vietbao.vn/images/vn899/181/2018/07/20180706-con-trai-david-beckham-coi-ao-khoe-bo-suu-tap-hinh-xam-khung-1.jpg">
                    <p style="font-family: Montserrat;font-size: 20px" class="hovertext"><b>Tập gym đã lâu nhưng
                            ngực vẫn lép và nhỏ</b></p>
                    <p style="font-family: Montserrat;font-size: 15px;color: white">Đối với 1 số bạn nam tuy đã tập gym
                        từ rất lâu nhưng ngực vẫn lép và nhỏ lý do tại sao vậy, chúng tôi sẽ giải đáo cho các bạn</p>
                </div>
            </div>
        </div>
        <div class="TPBS-underanother">
            <div class="TPBS-underanother-detail1 hovertext">
                <img src="https://media.ex-cdn.com/EXP/media.giadinhvietnam.com/files/content/2019/03/18/quan-he-trong-ngay-den-do-nguy-hiem-den-muc-nao-2058.jpg"
                    style="height: 180px;width: 100%;float: left;">

                <p style="font-family: Montserrat;font-size: 17px;text-align: center;">Quan hệ tình dục có ảnh hưởng đến
                    gymer</p>
            </div>
            <div class="TPBS-underanother-detail1 hovertext">
                <img src="https://www.marrybaby.vn/wp-content/uploads/2015/02/10/bai-tap-the-duc-cho-ba-bau-5.jpg"
                    style="height: 180px;width: 100%;float: left;">

                <p style="font-family: Montserrat;font-size: 17px;text-align: center;">Các bài tập dành cho các mẹ đang
                    mang thai</p>
            </div>
            <div class="TPBS-underanother-detail1 hovertext">
                <img src="http://static.khoedep.vn/2016/12/lich-tap-gym-cho-nguoi-moi-tap-6-buoi-1-tuan.jpg"
                    style="height: 180px;width: 100%;float: left;">

                <p style="font-family: Montserrat;font-size: 17px;text-align: center;">Lịch tập gym cho người mới bắt
                    đầu</p>
            </div>
            <div class="TPBS-underanother-detail2 hovertext">
                <img src="https://blog.wefit.vn/wp-content/uploads/2018/09/WB0399-facebook.jpg"
                    style="height: 180px;width: 100%;float: left;">

                <p style="font-family: Montserrat;font-size: 17px;text-align: center;">Caffeine - Gymer nên hay không
                    nên sử dụng?</p>
            </div>
        </div>
    </div>
    <div class="TPBS-img-end">
        <div class="TPBS-img-end1">
            <img src="https://www.thol.com.vn/pub/media/wysiwyg/Flash-sale/thang-co-hon-sale-het-hon.jpg"
                style="height: 500px;width: 100%;">
        </div>
        <div class="TPBS-img-end2">
            <img src="https://img.kam.vn/images/375x0/e3e82d7d33b84089a96b71777f28e52d/adayroi-com-principle-nutrition-uu-dai-den-29-qua-tang-hap-dan.jpg"
                style="height: 250px;width: 100%;">
            <img src="https://wheyshop.vn/wp-content/uploads/2018/02/thuc-pham-bo-sung-outlift-1-compressed.jpg"
                style="height: 250px;width: 100%;">
        </div>
    </div>

    @include('Home.footer')

</body>

</html>
