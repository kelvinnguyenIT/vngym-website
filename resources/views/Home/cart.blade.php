<!DOCTYPE html>
<html lang="en">

<head>
    <title>VNGYM - The World Of Gymer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/giohang.css">
    <script src="/js/payment-product.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="‪C:\Users\Lenovo\Desktop\logo.png" type="image/x-ico" />
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jockey+One|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
    <style>
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

    </style>
</head>

<body>

    <div class="GH-login">
        <div class="GH-login1">
            <p style="float: left;margin-right: 2%" class="hovertext"><span class="glyphicon glyphicon-bell"
                    style="color: #FFF056"></span>Thông báo</p>
            <p style="float: left;margin-right: 4%" class="hovertext"><span
                    class="glyphicon glyphicon-exclamation-sign" style="color: #FFF056"></span>Thắc mắc</p>
        </div>
        <div class="GH-login2">
            <p style="float: left;margin-right: 4%;margin-left: 14%"><span class="glyphicon glyphicon-phone-alt"
                    style="color: #FFF056"></span>Hotline: +2 392 3929 210</p>
            <div class="dropdown">
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
                    <a href="" style="text-decoration: none;"><i class='fas fa-truck' style="margin-right: 3%"></i>Đơn
                        Hàng Của Tôi</a>
                    <a href="" style="text-decoration: none;"><span class="glyphicon glyphicon-log-out"
                            style="margin-right: 3%"></span>Đăng Xuất</a>
                </div>
            </div>
        </div>
    </div>
    <div class="GH-title">
        <div class="GH-title-logo">
            <a href="/" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b
                    style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b
                    style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b
                    style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b
                    style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
        </div>
        <div class="GH-title-giohang">
            <p><b style="font-family: Montserrat">GIỎ HÀNG</b></p>
        </div>
        <div class="GH-title-search">
            <input type="text" name="tim" placeholder="Kinh doanh phải đi đôi với chữ TÍN"
                style="font-family: Montserrat;font-size: 16px">
            <button><span class="glyphicon glyphicon-search" style="font-size: 20px;"></span></button>
        </div>

    </div>
    <div class="GH-content">
        <div class="GH-detail-product">
            <div class="GH-detail-check">
                <center>
                    <input type="checkbox" name="checkbox">
                </center>
            </div>
            <div class="GH-detail-sanpham">
                <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056"
                    class="hovertext">Sản Phẩm</p>

            </div>
            <div class="GH-detail-dongia">
                <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056;text-align: center;"
                    class="hovertext">Đơn Giá</p>
            </div>
            <div class="GH-detail-soluong">
                <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056;text-align: center;"
                    class="hovertext">Số Lượng</p>
            </div>
            <div class="GH-detail-tongtien">
                <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056;text-align: center;"
                    class="hovertext">Tổng Tiền</p>
            </div>
            <div class="GH-detail-thaotac">
                <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056;text-align: center"
                    class="hovertext">Hành Động</p>
            </div>
        </div>

        @forelse ($cartList as $cart)

            <div class="GH-detail-product1">
                <div class="GH-detail-check1">
                    <center><input type="checkbox" name="check"></center>
                </div>
                <div class="GH-detail-sanpham1">
                    <div class="GH-detail-sanpham1-hinh">
                        <img src="{{ config('constants.url.image-product') . $cart->product()->first()->image }}"
                            style="height: 80px;width: 100%;">
                    </div>
                    <div class="GH-detail-sanpham1-chitiet">
                        <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 15px;color: white"
                            class="hovertext" id="name{{ $cart->product()->first()->id }}">
                            {{ $cart->product()->first()->name }}</p>
                        <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 15px;color: white"
                            class="hovertext" id="weight">50 LPs</p>
                    </div>
                    <div class="GH-detail-sanpham1-phanloai">
                        <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 18px;color: #FFF056"
                            class="hovertext">Loại</p>
                        <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 15px;color: white"
                            class="hovertext" id="type{{ $cart->product()->first()->id }}">
                            {{ $cart->product()->first()->category()->first()->name }}</p>
                    </div>

                </div>
                <div class="GH-detail-dongia1">
                    <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 15px;color: white;text-align: center;"
                        id="dongia{{ $cart->product()->first()->id }}" class="hovertext">
                        {{ $cart->product()->first()->price }}</p>
                </div>
                <div class="GH-detail-soluong1">
                    <button id="giam{{ $cart->product()->first()->id }}">-</button><input type="text" name="soluong"
                        id="soluong{{ $cart->product()->first()->id }}" value="1"><button
                        id="tang{{ $cart->product()->first()->id }}">+</button>
                </div>
                <div class="GH-detail-tongtien1">
                    <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 15px;color: white;text-align: center;"
                        id="tongtien{{ $cart->product()->first()->id }}" class="hovertext">
                        {{ $cart->product()->first()->price }}</p>
                </div>
                <div class="GH-detail-thaotac1">
                    <p><button class="btn-xoa"
                            id="but-xoa{{ $cart->product()->first()->id }}"><b>Xóa</b></button></p>
                            
                    <a  href="/{{$cart->product()->first()->id }}"><button class="btn-muahang" ><b>Mua Hàng</b></button></a>
                      </div>
            </div>

        @empty
            <p>empty</p>
        @endforelse
    </div>

    @include('Home.footer');
</body>

</html>
