<!DOCTYPE html>
<html lang="en">

<head>
    <title>VNGYM - The World Of Gymer</title>
    <link rel="stylesheet" type="text/css" href="/css/detailproduct.css">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/hinhhover.js"></script>
    <script type="text/javascript" src="/js/nav.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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


    <div class="DT-login">
        <div class="DT-login1">
            <p style="float: left;margin-right: 2%" class="hovertext"><span class="glyphicon glyphicon-bell"
                    style="color: #FFF056"></span>Thông báo</p>
            <p style="float: left;margin-right: 4%" class="hovertext"><span
                    class="glyphicon glyphicon-exclamation-sign" style="color: #FFF056"></span>Thắc mắc</p>
        </div>
        <div class="DT-login2">
            @if (Auth::check())
                <p style='float: left;margin-right: 4%;margin-left:4%'><span class='glyphicon glyphicon-phone-alt'
                        style='color: #FFF056'></span>Hotline: +2 392 3929 210</p>
                <div class='dropdown'>
                    <a href='#' style='font-size: 15px;font-family: Montserrat;text-decoration: none;outline: none;'
                        class='hovertext'>
                        <span class='glyphicon glyphicon-user use'></span>{{ session('name') }}<i
                            class='fa fa-caret-down'></i></a>
                    <div class='dropdown-content'>
                        <a href='#' style='text-decoration: none;'><span class='glyphicon glyphicon-user'
                                style='margin-right: 3%'></span>Thông Tin Cá Nhân</a>
                        <a href='' style='text-decoration: none;'><span class='glyphicon glyphicon-shopping-cart'
                                style='margin-right: 3%'></span>Giỏ Hàng Của Tôi</a>
                        <a href='#' style='text-decoration: none;'><span class='glyphicon glyphicon-heart'
                                style='margin-right: 3%'></span>Sản Phẩm Yêu Thích</a>
                        <a href='' style='text-decoration: none;'><i class='fas fa-truck'
                                style='margin-right: 3%'></i>Đơn Hàng Của Tôi</a>
                        <a href='' style='text-decoration: none;'><span class='glyphicon glyphicon-log-out'
                                style='margin-right: 3%'></span>Đăng Xuất</a>
                    </div>
                </div>


            @else
                <p style='float: left;margin-right: 4%'><span class='glyphicon glyphicon-phone-alt'
                        style='color: #FFF056'></span>Hotline: +2 392 3929 210</p>
                <a href='' style='text-decoration: none;'>
                    <p style='float: left;margin-right: 4%' class='hovertext'><span class='glyphicon glyphicon-user'
                            style='color: #FFF056'></span>Đăng nhập</p>
                </a>
                <a href=''>
                    <p style='float: left;margin-right: 4%' class='hovertext'><span class='glyphicon glyphicon-log-out'
                            style='color: #FFF056'></span>Đăng ký</p>
                </a>
            @endif

        </div>
        <div class="DT-title">
        </div>
        <div class="DT-title-logo">
            <a href="/" style="font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;"><b
                    style="font-family: Paytone One;font-size: 30px">VN GYM</b><br><b style="margin-right: 8px">F</b><b
                    style="margin-right: 8px">I</b><b style="margin-right: 8px">T</b><b
                    style="margin-right: 8px">N</b><b style="margin-right: 8px">E</b><b
                    style="margin-right: 8px">S</b><b style="margin-right: 8px">S</b></a>
        </div>
        <div class="DT-title-search">
            <form action="" method="GET">
                <input type="text" name="key" placeholder="Nhập sản phẩm cần tìm......"
                    style="font-family: Montserrat;font-size: 16px">
                <button type="submit"><span class="glyphicon glyphicon-search" style="font-size: 20px;"></span></button>
            </form>
        </div>
        <div class="DT-title-cart">
            @if (Auth::check())
                <a href=''><button><span class='glyphicon glyphicon-shopping-cart'></span><b
                            style='font-family: Montserrat;margin-left: 3%;text-decoration: none;'>Giỏ
                            hàng</b></button></a>

            @else
                <a href=""><button><span class="glyphicon glyphicon-shopping-cart"></span><b
                            style="font-family: Montserrat;margin-left: 3%;text-decoration: none;">Giỏ
                            hàng</b></button></a>
            @endif


        </div>
    </div>
    <div class="DT-content">


        <div class="DT-content-image">
            <img src="{{ config('constants.url.image-product') . $product->image }}"
                style="height: 500px;width: 100%;float: left;" id="hinhmain">
            <div class="DT-content-anotherimage">
                @forelse ($product->image()->get() as $image)
                    <img src="{{ config('constants.url.image-product') . $image->src }}"
                        style="height: 110px;width: 20%;float: left;padding-top: 5%;margin-right: 4%"
                        id="hinhdetail{{ $image->id }}">
                    <script type="text/javascript">
                        $("#hinhdetail".{{ $image->id }}.
                            "").hover(function() {
                            var img = $("#hinhdetail".{{ $image->id }}.
                                "").attr('src');
                            var imgmain = $("#hinhmain").attr('src');
                            $("#hinhmain").attr('src', img);
                            $("#hinhdetail".{{ $image->id }}.
                                "").attr('src', imgmain);
                        });
                    </script>
                @empty
                @endforelse
            </div>
        </div>

        <div class="DT-content-info">

            <div class="DT-info-name">
                <p style="font-family: Montserrat;color: white" class="name"><b>{{ $product->name }}
                        Weight</b></p>
                <div class="DT-info-nameunder">
                    <div class="DT-info-nameunder-copyright">
                        <p>Thương hiệu: <span
                                style="background-color: #FFF056;color: black;border-radius: 3px">{{ $product->brand }}</span>
                        </p>
                    </div>
                    <div class="DT-info-nameunder-star">
                        <p>Đánh giá: <span class="glyphicon glyphicon-star"></span><span
                                class="glyphicon glyphicon-star"></span><span
                                class="glyphicon glyphicon-star"></span><span
                                class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>
                        </p>
                    </div>
                    <div class="DT-info-nameunder-sold">
                        <p>Đã bán: 4,2K</p>
                    </div>
                </div>

            </div>

            <div class="DT-info-price">

                @if ($product->discount_price != 0)
                    <div class='DT-info-onsale'>
                        <p style='color: #b2b2b2'><strike>{{ $product->discount_price }}</strike></p>
                    </div>
                @endif

                <div class="DT-info-pricemain">
                    <p><b>{{ $product->price }}</b></p>
                </div>
                <p style="font-family: Montserrat;float:left" class="tin"><img
                        src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/d7cb3c110ef860cca3969ab0cd6c2ac9.png"
                        style="height: 40px;width: 50px">Chữ<b style="color: #FFF056"> TÍN</b> luôn được đặt lên hàng
                    đầu</p>
            </div>

            <div class="DT-info-delivery">

                <div class="DT-info-delivery-name">
                    <p>Vận chuyển:</p>
                </div>
                <div class="DT-info-delivery-type">
                    <div class="DT-info-delivery-type1">
                        <p><img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/9d21899f3344277e34d40bfc08f60bc7.png"
                                style="height: 20px;width: 30px">Miễn phí vận chuyển</p>
                        <p>Miễn phí vận chuyển cho những đơn hàng trong khu vực</p>
                    </div>
                    <div class="DT-info-delivery-type">
                        <p><i class='fas fa-truck' style="font-size: 20px;color: #FFF056"></i><span>Vận chuyển
                                tới</span><select>
                                <option>Hà Nội</option>
                                <option>TT Huế</option>
                                <option>Đăk Lăk</option>
                                <option>Đà Nẵng</option>
                                <option>Gia Lai</option>
                                <option>TP Hồ Chí Minh</option>
                            </select></p>
                        <p><i class='  far fa-money-bill-alt' style="font-size: 20px;color: #FFF056"></i><span>Phí vận
                                chuyển</span><select>
                                <option>27.000đ - 32.100đ</option>
                            </select></p>
                    </div>
                </div>

            </div>

            <div class="DT-info-option">
                <div class="DT-info-option-name">
                    <p>Hương vị:</p>
                </div>
                <div class="DT-info-option-choose">
                    @forelse ($product->flavor()->get() as $flavor)
                        <button class="choose" {{ $flavor->id }}"" id="huongvi" {{ $flavor->id }}""
                            onclick="huongvi1()" value="{{ $flavor->name }}">{{ $flavor->name }}</button>

                    @empty
                        <button class="choose1" id="nomal" value="Basic">Basic</button>

                    @endforelse
                </div>
            </div>

            <div class="DT-info-count">
                <div class="DT-info-count-name">
                    <p>Số lượng:</p>
                </div>
                <div class="DT-info-count-adjust">
                    <button id="giam">-</button><input type="text" name="soluong" id="soluong" value="1"><button
                        id="tang">+</button>
                </div>
            </div>

            <div class="DT-info-buy">
                <p id="loi" style="color: #FFF056;font-family: Montserrat"></p>
                <div class="DT-info-buy-cart">
                    <button><i class='fas fa-cart-plus' style="margin-right: 3%"></i>Thêm Vào Giỏ Hàng</button>
                </div>
                <div class="DT-info-buy-bought">

                    @if (Auth::check())
                        <button id='buy'>Mua Ngay</button>

                    @else
                        <a href=''><button>Mua Ngay</button></a>
                    @endif

                </div>
            </div>
            <script type="text/javascript">
                function huongvi1() {
                    var huong1 = document.getElementById("huongvi1");
                    var huong2 = document.getElementById("huongvi2");
                    if (huong2.style.color != '') {
                        huong2.style.color = '';
                        huong2.style.border = '';
                        huong1.style.border = '1px solid #FFF056';
                        huong1.style.color = '#FFF056';
                    } else {
                        huong1.style.border = '1px solid #FFF056';
                        huong1.style.color = '#FFF056';
                    }
                }

                function huongvi2() {
                    var huong1 = document.getElementById("huongvi1");
                    var huong2 = document.getElementById("huongvi2");
                    if (huong1.style.color != '') {
                        huong1.style.color = '';
                        huong1.style.border = '';
                        huong2.style.border = '1px solid #FFF056';
                        huong2.style.color = '#FFF056';
                    } else {
                        huong2.style.border = '1px solid #FFF056';
                        huong2.style.color = '#FFF056';
                    }
                }
                $("#tang").on('click', function(event) {

                    var soluong = document.getElementById("soluong");

                    if (parseInt(soluong.value) < 6) {
                        soluong.value = parseInt(soluong.value) + 1;
                    } else if ((parseInt(soluong.value) + 1) > 6) {
                        confirm("Bạn muốn đặt hàng với số lượng lớn?");
                    }

                });

                $("#giam").on('click', function(event) {
                    var soluong = document.getElementById("soluong");
                    if (parseInt(soluong.value) > 1) {
                        soluong.value = parseInt(soluong.value) - 1;
                    } else if ((parseInt(soluong.value) - 1) < 1) {
                        alert("Không giảm được nữa đâu bạn ơi");
                    }

                });
                // $("#hinhdetail").mouseover(function(){
                //       var hinhdetail=$("#hinhdetail").attr("src");
                //       $("#hinhmain").attr(hinhmain);
                // });
                $("#buy").on("click", function() {

                    var huong1 = document.getElementById("huongvi1");
                    var huong2 = document.getElementById("huongvi2");
                    var sl = $("#soluong").val();
                    if ((huong1.style.color == '') && (huong2.style.color == '')) {
                        document.getElementById('loi').innerHTML = "Vui lòng chọn hương vị";
                    } else {
                        var huong;
                        if (huong1.style.color != '') {
                            huong = huong1.value;
                        } else {
                            huong = huong2.value;
                        }

                        window.location = "";

                    }

                });
            </script>
        </div>

    </div>
    <div class="DT-detail-product">
        <div class="DT-detail-product1">

            <div class="DT-detail-product1-chitiet">

                <div class="DT-chitiet-product">
                    <p style="color: white;font-size: 23px;margin-bottom: 3%;"><b>CHI TIẾT SẢN PHẨM</b></p>
                    <div class="DT-chitiet-product-content">

                        <div class="DT-chitiet-productex">
                            <div class="DT-chitiet-product-name">
                                <p style="color: #FFF056"><b>Thương hiệu</b></p>
                            </div>
                            <div class="DT-chitiet-product-detail">
                                <p> {{ $product->brand }}</p>
                            </div>
                        </div>
                        <div class="DT-chitiet-productex">
                            <div class="DT-chitiet-product-name">
                                <p style="color: #FFF056"><b>Trọng lượng</b></p>
                            </div>
                            <div class="DT-chitiet-product-detail">
                                <p>25 LPs</p>
                            </div>
                        </div>
                        <div class="DT-chitiet-productex">
                            <div class="DT-chitiet-product-name">
                                <p style="color: #FFF056"><b>Hương vị</b></p>
                            </div>
                            <div class="DT-chitiet-product-detail">
                                <p>
                                    @forelse ($product->flavor()->get() as $flavor)
                                        <li>{{ $flavor->name }}</li>
                                    @empty
                                        <p>Empty</p>
                                    @endforelse
                                </p>
                            </div>
                        </div>
                        <div class="DT-chitiet-productex">
                            <div class="DT-chitiet-product-name">
                                <p style="color: #FFF056"><b>Kho hàng</b></p>
                            </div>
                            <div class="DT-chitiet-product-detail">
                                <p>{{ $product->sell }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="DT-chitiet-product-image">
                        <img src="{{ config('constants.url.image-product') . $product->image }}"
                            style="width: 100%;height: 250px;">
                    </div>
                </div>

                <div class="DT-chitiet-product2">
                    <p style="color: white;font-size: 23px;margin-bottom: 3%;"><b>MÔ TẢ SẢN PHẨM</b></p>
                    <div class="DT-chitiet-productex1">
                        {!! $product->discription !!}
                    </div>

                </div>
            </div>
            <div class="DT-detail-product1-lienquan">
                <p style="font-size: 18px">Có thể bạn quan tâm</p>
                @forelse ($productRelevantList as $productRelevant)
                    <div class="DT-lienquan-product1">
                        <div class="DT-lienquan-product1-image">
                            <img src="{{ config('constants.url.image-product') . $productRelevant->image }}"
                                class="imageqt" style="float: left;">
                        </div>
                        <div class="DT-lienquan-product1-name">

                            <p style="font-size: 13px;margin-bottom: 1px">{{ $productRelevant->name }}</p>
                            <p style="color: #FFF056;margin-bottom: 1px"><span
                                    class="glyphicon glyphicon-star"></span><span
                                    class="glyphicon glyphicon-star"></span><span
                                    class="glyphicon glyphicon-star"></span><span
                                    class="glyphicon glyphicon-star"></span><span
                                    class="glyphicon glyphicon-star"></span></p>
                            <p style="font-size: 13px;">{{ $productRelevant->price }}</p>
                        </div>

                    </div>
                @empty
                @endforelse
            </div>
        </div>

        <div class="DT-feedback">
            <p style="font-size: 23px"><b>Đánh giá sản phẩm</b></p>
            {{-- @foreach ($comment as $value)
     <div class='DT-feedback-content'>
     <div class='DT-feedback-content-image'>
        <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMxNTi_2F55cfe-wvlA70R8-JW-0TUmYTHhBTmM8vBwwcrsH_E&s' style='border-radius: 50%;height: 70px;width: 80%'>
         </div>
          <div class='DT-feedback-content-text'>
          <p style='margin-bottom: 1px'><b>{{$value->customer()->get()->first()->ten}} {{$value->customer()->get()->first()->ho}}</b></p>
          <p>{{$value->comment}}</p>
          <p><span style='margin-right: 3%' class='hovertext'><i class='fa fa-hand-peace-o'></i>Thích</span>
          <span style='margin-right: 3%' class='hovertext'><i class='far fa-comment-dots'></i>Bình luận</span>
          </p>
          </div>
         </div>
     @endforeach --}}

        </div>

        <div class="collap">
            <input type="text" placeholder="Comment" id="comment">
            @if (Auth::check())
                <button id='btn-comment'>Bình luận</button>

            @else
                <a href=''><button id='btn-comment'>Bình luận</button></a>
            @endif

        </div>


        <div class="DT-product-relevant">
            <center>
                <p style="border-bottom: 1px solid white;" class="titlelq">CÁC SẢN PHẨM LIÊN QUAN</p>
            </center>
            <div class="DT-product-relevant1">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">


                        <div class="item active">
                            @forelse ($productRelevantList->take(4) as $productRelevant)
                                <div class="DT-relevant1-detail">
                                    <img src="{{ config('constants.url.image-product') . $productRelevant->image }}"
                                        class="imagelq" style="float: left;margin-bottom: 2%">
                                    <center>
                                        <p style="margin-bottom: 1px" class="namelq">
                                            {{ $productRelevant->name }}</p>
                                        <p style="color: #FFF056;margin-bottom: 1px"><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span></p>
                                        <p>
                                            @if ($productRelevant->discount_price != 0)
                                                <span
                                                    style='margin-right: 6%;color:#b2b2b2'><strike>{{ $productRelevant->discount_price }}</strike></span>
                                            @endif
                                            <span> {{ $productRelevant->price }}</span>
                                        </p>
                                    </center>
                                </div>
                            @empty
                            @endforelse
                        </div>

                        <div class="item">
                            @forelse ($productRelevantList->take(4) as $productRelevant)
                                <div class="DT-relevant1-detail">
                                    <img src="{{ config('constants.url.image-product') . $productRelevant->image }}"
                                        class="imagelq" style="float: left;margin-bottom: 2%">
                                    <center>
                                        <p style="margin-bottom: 1px" class="namelq">
                                            {{ $productRelevant->name }}</p>
                                        <p style="color: #FFF056;margin-bottom: 1px"><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span></p>
                                        <p>
                                            @if ($productRelevant->discount_price != 0)
                                                <span
                                                    style='margin-right: 6%;color:#b2b2b2'><strike>{{ $productRelevant->discount_price }}</strike></span>
                                            @endif
                                            <span> {{ $productRelevant->price }}</span>
                                        </p>
                                    </center>
                                </div>
                            @empty
                            @endforelse
                        </div>

                        <div class="item">
                            @forelse ($productRelevantList->take(4) as $productRelevant)
                                <div class="DT-relevant1-detail">
                                    <img src="{{ config('constants.url.image-product') . $productRelevant->image }}"
                                        class="imagelq" style="float: left;margin-bottom: 2%">
                                    <center>
                                        <p style="margin-bottom: 1px" class="namelq">
                                            {{ $productRelevant->name }}</p>
                                        <p style="color: #FFF056;margin-bottom: 1px"><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star"></span></p>
                                        <p>
                                            @if ($productRelevant->discount_price != 0)
                                                <span
                                                    style='margin-right: 6%;color:#b2b2b2'><strike>{{ $productRelevant->discount_price }}</strike></span>
                                            @endif
                                            <span> {{ $productRelevant->price }}</span>
                                        </p>
                                    </center>
                                </div>
                            @empty
                            @endforelse
                        </div>


                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"
                            style="height: 200px;width: 50px;background-color: black;">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"
                            style="height: 200px;width: 50px;background-color: black;">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include("Home.footer")
</body>

</html>
