<!DOCTYPE html>
<html>

<head>
    <title>VNGYM - The World Of Gymer</title>
    <link rel="stylesheet" type="text/css" href="/css/gym.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/hinhhover.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="‪C:\Users\Lenovo\Desktop\logo.png" type="image/x-ico" />
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jockey+One|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
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

    </style>
</head>
<script type="text/javascript">
    new WOW().init();
</script>

<body>
    <div class="TC-banner">
    </div>
    <nav class="navbar navbar-fixed-top" style="margin-bottom: 0px;background-color: transparent;" id="navv">
        <div class="container-fluid" style="margin-top: 1.5%">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"
                    style="margin-top: 20px">
                    <span class="icon-bar" style="background-color: white"></span>
                    <span class="icon-bar" style="background-color: white"></span>
                    <span class="icon-bar" style="background-color: white"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                @if (session('name'))
                    <li class='nav navbar-nav' style='margin-right: 13%;margin-left: 6%'><a href='/'
                            style='font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;'><b
                                style='font-family: Paytone One;font-size: 30px'>VN GYM</b><br><b
                                style='margin-right: 8px'>F</b><b style='margin-right: 8px'>I</b><b
                                style='margin-right: 8px'>T</b><b style='margin-right: 8px'>N</b><b
                                style='margin-right: 8px'>E</b><b style='margin-right: 8px'>S</b><b
                                style='margin-right: 8px'>S</b></a></li>
                @else
                    <li class='nav navbar-nav' style='margin-right: 20%;margin-left: 6%'><a href='/'
                            style='font-size: 15px;font-family: Montserrat;color: white;text-decoration: none;'><b
                                style='font-family: Paytone One;font-size: 30px'>VN GYM</b><br><b
                                style='margin-right: 8px'>F</b><b style='margin-right: 8px'>I</b><b
                                style='margin-right: 8px'>T</b><b style='margin-right: 8px'>N</b><b
                                style='margin-right: 8px'>E</b><b style='margin-right: 8px'>S</b><b
                                style='margin-right: 8px'>S</b></a></li>
                @endif

                <ul class="nav navbar-nav">

                    <li><a href="/" style="font-size: 15px;font-family: Montserrat;color: #FFF056">TRANG CHỦ</a></li>
                    <li><a href="" style="font-size: 15px;font-family: Montserrat;">THIẾT BỊ GYM</a></li>
                    <li><a href="../HTML/chuacokinhnghiem.html" style="font-size: 15px;font-family: Montserrat">PHỤ KIỆN
                            GYM</a></li>
                    <li><a href="{{route('view_supplement')}}" style="font-size: 15px;font-family: Montserrat">THỰC PHẨM BỔ SUNG</a></li>
                    <li><a href="../HTML/chuacokinhnghiem.html"
                            style="font-size: 15px;font-family: Montserrat;float: left;">HƯỚNG DẪN TẬP</a></li>

                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="../HTML/chuacokinhnghiem.html"
                                style="font-size: 15px;font-family: Montserrat;text-decoration: none;outline: none;"
                                class="hovertext">
                                <span class="glyphicon glyphicon-user use"></span>{{ session('name') }}<i
                                    class="fa fa-caret-down"></i></a>
                            <div class="dropdown-content">
                                <a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-user"
                                        style="margin-right: 3%"></span>Thông Tin Cá Nhân</a>
                                <a href="" style="text-decoration: none;"><span
                                        class="glyphicon glyphicon-shopping-cart" style="margin-right: 3%"></span>Giỏ
                                    Hàng Của Tôi</a>
                                <a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-heart"
                                        style="margin-right: 3%"></span>Sản Phẩm Yêu Thích</a>
                                <a href="" style="text-decoration: none;"><i class="fas fa-truck"
                                        style="margin-right: 3%"></i>Đơn Hàng Của Tôi</a>
                                <a href="" style="text-decoration: none;"><span class="glyphicon glyphicon-log-out"
                                        style="margin-right: 3%"></span>Đăng Xuất</a>
                            </div>
                        </li>
                    @endif
                </ul>

            </div>
        </div>
        <script type="text/javascript">
            $(window).scroll(function() {
                var _scrollTop = $(window).scrollTop();
                if (_scrollTop > 100) {
                    $(".navbar").css('background-color', 'black');
                } else {
                    $(".navbar").css('background-color', 'transparent');
                }
            });
        </script>
    </nav>
    <div class="TC-bannercontent">
        <center>
            <p style="font-family: Josefin Sans"><b style="font-size: 50px">WE ARE</b><b
                    style="color: #FFF056;font-size: 80px;"> VN GYM</b></p>
            <p style="font-family: Josefin Sans;font-size: 40px;">Don't Stop When You Tired<br>Stop When You're<b
                    style="font-size: 50px;color: #FFF056"> DONE</b></p>
            @if (!session('name'))
                <a href="{{ route('login') }}" style="text-decoration: none;"><button class="TC-btn-start"><span
                            style="font-family:  Josefin Sans;font-size: 20px"><b>GET START</b></span></button></a>
            @endif
        </center>
    </div>
    <div class="TC-welcome">
        <div class="TC-welcomevideo">
            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/cKNIkRmWGVo" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                style="border-right: 4px solid #FFF056;" class="wow fadeInUp"></iframe>
        </div>
        <div class="TC-welcometext">
            <center>
                <p style="font-family: Paytone One;font-size: 45px;color: white" class="wow fadeInUp">WELCOME TO <b
                        style="color:#FFF056 ">VN GYM</b></p>
            </center>
            <p style="color: #b2b2b2;font-family: Montserrat;font-size: 18px" align="justify" class="wow fadeInUp">Khi
                bạn đến với VN GYM, đây như là ngôi nhà thứ 2 của bạn, khi bạn tìm đến chúng tôi để cần một sự thay đổi
                vậy thì để chúng tôi cho bạn thấy bạn đã lựa chọn đúng. Đừng lo lắng về ngoại hình hay bất kể vấn đề gì
                chán nản của bản thân ngay lúc này hãy tạm thời gác nó sang một bên bởi vì bạn chuẩn bị cho một quá
                trình lột xác hoàn toàn cùng chúng tôi.
        </div>
    </div>
    <div class="TC-service">
        <p style="font-family: Paytone One;font-size: 48px;color: white" class="wow fadeInUp"><b
                style="color: #FFF056">VN GYM</b> SERVICE</p>
        <div class="TC-service1 wow fadeInLeft">
            <figure class="snip1477">
                <img src="{{ config('constants.url.image-page') . 'home-thiet-bi-gym.jpg' }}" alt="sample38" />
                <div class="title">
                    <div>
                        <h2>VN GYM</h2>
                        <h4>THIẾT BỊ PHÒNG GYM</h4>
                    </div>
                </div>
                <figcaption>
                    <p align="justify">Khi bạn muốn mở một phòng tập mà việc chọn thiết bị khá đau đầu, VN GYM sẽ tư vấn
                        cho bạn những lời khuyên phù hợp nhất</p>
                </figcaption>
                <a href="#"></a>
            </figure>
        </div>
        <div class="TC-service1 wow fadeInLeft">
            <figure class="snip1477"><img src="{{ config('constants.url.image-page') . 'phu-kien-mobile.jpg' }}"
                    alt="sample35" />
                <div class="title">
                    <div>
                        <h2>VN GYM</h2>
                        <h4>PHỤ KIỆN GYM</h4>
                    </div>
                </div>
                <figcaption>
                    <p align="justify">Những chấn thương sẽ không tránh khỏi khi bạn tập gym, và những phụ kiện của VN
                        GYM là những hàng chất lượng nhất</p>
                </figcaption>
                <a href="#"></a>
            </figure>
        </div>
        <div class="TC-service1 wow fadeInRight">
            <figure class="snip1477"><img src="{{ config('constants.url.image-page') . 'bosung.jpg' }}"
                    alt="sample35" />
                <div class="title">
                    <div>
                        <h2>VN GYM</h2>
                        <h4>Thực Phẩm Bổ Sung</h4>
                    </div>
                </div>
                <figcaption>
                    <p align="justify">Để rút ngắn thời gian phát triển của cơ bắp thì thực phẩm bổ sung là sự lựa chọn
                        đúng đắn.</p>
                </figcaption>
                <a href="#"></a>
            </figure>
        </div>
        <div class="TC-service1 wow fadeInRight">
            <figure class="snip1477"><img src="{{ config('constants.url.image-page') . 'huongdantapgym.jpg' }}"
                    alt="sample35" />
                <div class="title">
                    <div>
                        <h2>VN GYM</h2>
                        <h4>Hướng Dẫn Tập</h4>
                    </div>
                </div>
                <figcaption>
                    <p align="justify">Đến với VN GYM bạn sẽ được hướng dẫn cách tập đúng, giúp tăng cơ, tăng cân hiệu
                        quả.</p>
                </figcaption>
                <a href="#"></a>
            </figure>
        </div>
    </div>
    <div class="TC-lichtap">
        <p style="color: white;font-size: 45px;font-family: Paytone One;text-align: center;" class="wow fadeInUp">ĐỂ
            CÓ THÂN HÌNH ĐẸP</p>
        <div class="TC-lichtap1">
            <img src="{{ config('constants.url.image-page') . 'lich-tap-gym-giam-can-trong-1-tuan.jpg' }}"
                style="height: 450px;width: 100%;border-right: 5px solid #FFF056" class="wow fadeInUp">
            <div class="TC-chu wow fadeInUp" style="width: 100%;">
                <p style="font-family: Montserrat;font-size: 18px;color:  #FFF056;margin-bottom: 1px;">Lịch Tập</p>
                <p style="font-family: Paytone One;font-size: 40px;color: white;">LỊCH TẬP HỢP LÝ</p>
                <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2">Để có được thân hình đẹp như mong muốn
                    điều trước hết là bạn phải có một lịch tập rõ ràng và hợp lý phù hợp với bản thân của chính bạn, khi
                    bạn đã nắm kĩ các quy tắc phân chia lịch tập bạn sẽ không còn lo lắng về việc chia lịch tập nữa.</p>
                <button class="btnlichtap">LỊCH TẬP</button>
            </div>
        </div>
        <div class="TC-lichtap2">
            <div class="TC-lichtap2detail wow fadeInUp">
                <div class="TC-lichtap2icon">
                    <img src="{{ config('constants.url.svg-page') . 'goal.svg' }}">
                </div>
                <div class="TC-lichtap2chu">
                    <p style="font-family: Montserrat;font-size: 20px;color: white"><b>Mục Tiêu Hướng Tới</b></p>
                    <p style="font-family: Montserrat;font-size: 15px;color: white" align="justify">Điều trước tiên khi
                        làm bất cứ điều gì trong cuộc sống nói chung và trong việc tập gym nói riêng là chúng ta phải có
                        mục tiêu để bản thân ta có thể hướng tới, đặt mục tiêu rõ ràng để có hướng đi hợp lý và đạt được
                        mục tiêu.</p>
                </div>
            </div>
            <div class="TC-lichtap2detail1 wow fadeInUp">
                <div class="TC-lichtap2icon">
                    <img src="{{ config('constants.url.svg-page') . 'arm-dumbbell.svg' }}">
                </div>
                <div class="TC-lichtap2chu">
                    <p style="font-family: Montserrat;font-size: 20px;color: white"><b>Tập Luyện Chăm Chỉ</b></p>
                    <p style="font-family: Montserrat;font-size: 15px;color: white" align="justify">Không có thứ gì sẵn
                        có mà không cố gắng khi bạn nhận ra rằng làm việc chăm chỉ là thực sự quan trọng, bạn sẽ cảm
                        thấy thoải mái hơn khi theo đuổi ước mơ của mình.</p>
                </div>
            </div>
            <div class="TC-lichtap2detail2 wow fadeInUp">
                <div class="TC-lichtap2icon">
                    <img src="{{ config('constants.url.svg-page') . 'fitness.svg' }}">
                </div>
                <div class="TC-lichtap2chu">
                    <p style="font-family: Montserrat;font-size: 20px;color: white"><b>Phương Pháp Tập Hiệu Quả</b></p>
                    <p style="font-family: Montserrat;font-size: 15px;color: white" align="justify">Khi bạn bước vào thế
                        giới của những gymer, để những ngày tập luyện không biết mệt mỏi của chúng ta đạt kết quả thì
                        đây chính là yếu tố tạo nên một thân hình cường tráng với những múi cơ săn chắc, vì vậy bạn cần
                        nắm rõ các quy tắc để chọn phương pháp hợp lý cho bản thân</p>
                </div>
            </div>
            <div class="TC-lichtap2detail2 wow fadeInUp">
                <div class="TC-lichtap2icon">
                    <img src="{{ config('constants.url.svg-page') . 'healthy-lifestyle.svg ' }}">
                </div>
                <div class="TC-lichtap2chu">
                    <p style="font-family: Montserrat;font-size: 20px;color: white"><b>Sắp Xếp Thời Gian, Ăn Uống Đủ
                            Chất</b></p>
                    <p style="font-family: Montserrat;font-size: 15px;color: white" align="justify">Ngoài những giờ tập
                        mệt mỏi bạn cần phải cung cấp đầy đủ chất dinh dưỡng cũng như thời gian biểu hợp lý để có thể
                        giúp các nhóm cơ phát triển toàn diện.</p>
                </div>
            </div>

        </div>
        <div class="TC-trainer">
            <p style="color: white;font-size: 45px;font-family: Paytone One;text-align: center;margin-bottom: 2px;"
                class="wow fadeInUp">KHÁCH HÀNG <b style="color: #FFF056">VN GYM</b></p>
            <p style="font-family: Montserrat;font-size: 18px;color: #b2b2b2;text-align: center;"
                class="wow fadeInUp">Dưới đây là một số khách hàng tiêu biểu đã lột xác khi tìm đến VN GYM</p>
            <div class="TC-trainer1">
                <div class="TC-trainerinfo wow fadeInLeft">
                    <div class="TC-trainerhinh">
                        <img src="/image/pt/5-1559617563153489823684.jpg"
                            style="height: 460px;width: 100%;float: left;">
                    </div>
                    <div class="TC-trainerchu">
                        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 1px">132k Người
                            Theo Dõi</p>
                        <p style="font-family: Montserrat;font-size: 32px;color: #FFF056">Trang Lê</p>
                        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 30px;"
                            align="justify">Trang Lê trước tìm đến VN GYM cô ấy là cô gái luôn tự ti về bản thân và ngại
                            ngùng khi gặp mặt mọi người vì vậy cô ấy đã tìm đến chúng tôi và bây giờ cô ấy đã trở thành
                            một trong những thiên thần phòng GYM có lượt follow khủng nhất.</p>
                        <button class="TC-btnfa"><i class="fa fa-facebook"></i></button>
                        <button class="TC-btntwit"><i class="fa fa-instagram"></i></button>
                        <button class="TC-btntwit"><i class="fa fa-twitter"></i>
                        </button>

                    </div>
                </div>
                <div class="TC-trainerinfo wow fadeInLeft">
                    <div class="TC-trainerhinh">
                        <img src="/image/pt/tr---my-1559378820-width650height812.jpg"
                            style="height: 460px;width: 100%;float: left;">
                    </div>
                    <div class="TC-trainerchu">
                        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 1px">500k Người
                            Theo Dõi</p>
                        <p style="font-family: Montserrat;font-size: 32px;color: #FFF056">Thủy Top</p>
                        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 30px;"
                            align="justify">Cuối 2014, Thủy Top trở về Việt Nam làm việc sau gần 5 năm du học tại Mỹ. Vì
                            có nhiều lời chê mũm mĩm, cựu hot girl đình đám một thời quyết định giảm cân. Cô nhịn ăn và
                            tập thể hình, Thủy đã có thời gian khó khăn để có được thân hình như ngày này khi luôn quyết
                            tâm đến cùng với VN GYM.</p>
                        <button class="TC-btnfa"><i class="fa fa-facebook"></i></button>
                        <button class="TC-btntwit"><i class="fa fa-instagram"></i></button>
                        <button class="TC-btntwit"><i class="fa fa-twitter"></i>
                        </button>

                    </div>
                </div>
            </div>
            <div class="TC-trainer2">
                <div class="TC-trainerinfo wow fadeInRight">
                    <div class="TC-trainerhinh">
                        <img src="https://2sao.vietnamnetjsc.vn/images/2019/07/17/06/49/huhu-vi-1.jpg"
                            style="height: 460px;width: 100%;float: left;">
                    </div>
                    <div class="TC-trainerchu">
                        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 1px">702k Người
                            Theo Dõi</p>
                        <p style="font-family: Montserrat;font-size: 32px;color: #FFF056">Hữu Vi</p>
                        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 30px;"
                            align="justify">Những bài tập bụng ưa thích của tôi là đu xà gập bụng, mỗi tuần, tôi thường
                            có hai buổi tập riêng bụng tập với bóng hoặc plank. Quan trọng trong tập luyện là bạn phải
                            tập gắng sức, vượt sức để kích thích các múi cơ phát triển, to ra.</p>
                        <button class="TC-btnfa"><i class="fa fa-facebook"></i></button>
                        <button class="TC-btntwit"><i class="fa fa-instagram"></i></button>
                        <button class="TC-btntwit"><i class="fa fa-twitter"></i>
                        </button>

                    </div>
                </div>
                <div class="TC-trainerinfo wow fadeInRight">
                    <div class="TC-trainerhinh">
                        <img src="https://i.pinimg.com/originals/1f/b7/bc/1fb7bcdaff452bdd185500ee95c731f1.jpg"
                            style="height: 460px;width: 100%;float: left;">
                    </div>
                    <div class="TC-trainerchu">
                        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 1px">1320k Người
                            Theo Dõi</p>
                        <p style="font-family: Montserrat;font-size: 32px;color: #FFF056">Christina Hải Âu</p>
                        <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 30px;"
                            align="justify">Hải Âu - Cô gái từng phải trải qua thời gian giảm cân khắc nghiệt, mệt nhọc
                            cùng những cách giảm cân thủ công và khi cô biết đến VN GYM việc giảm cân chưa bao giờ dễ
                            dàng đến thế, thực sự không hối hận khi biết đến VN GYM.</p>
                        <button class="TC-btnfa"><i class="fa fa-facebook"></i></button>
                        <button class="TC-btntwit"><i class="fa fa-instagram"></i></button>
                        <button class="TC-btntwit"><i class="fa fa-twitter"></i>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div class="TC-feedback">
            <p style="color: white;font-size: 45px;font-family: Paytone One;text-align: center;margin-bottom: 1px;margin-top: 5%;"
                class="wow fadeInUp">FEEDBACK</p>
            <p style="font-family: Montserrat;font-size: 18px;text-align: center;color: white;margin-bottom: 6%;"
                class="wow fadeInUp">Khách hàng là người đánh giá chân thực nhất về bức tranh uy tín và hiệu quả của
                chúng tôi.</p>
            <div class="TC-feedbackdetail wow fadeInLeft">
                <p style="font-family: Montserrat;font-size: 15px;color: #262626" align="justify">"Tôi đã sử dụng sản
                    phẩm của VN GYM và thấy hiệu quả thực sự, thân hình của tôi đã thay đổi rất nhiều, các múi cơ dần
                    xuất hiện, các sản phẩm của VN GYM cũng rất tốt. Cảm ơn VN GYM đã thay đổi cuộc đời tôi."</p>
                <div class="TC-tacgia">
                    <div class="TC-tacgiahinh">
                        <img src="http://quatangabc.com/images/hinhsinhnhat/avatar2.jpg"
                            style="height: 70px;width: 100%;border-radius: 50%;float: left;">
                    </div>
                    <div class="TC-tacgiachu">
                        <p style="font-family: Montserrat;font-size: 15px;color: #262626;margin-bottom: 1px;">Quỳnh Như
                        </p>
                        <p style="font-family: Montserrat;font-size: 15px;color: #262626;">Đăk Lăk</p>
                    </div>
                </div>
            </div>
            <div class="TC-feedbackdetail wow fadeInLeft" style="background-color: #e5ce48">
                <p style="font-family: Montserrat;font-size: 15px;color: #262626" align="justify">"Cuộc đời tôi lúc
                    trước là chuỗi ngày buồn tủi, thất vọng và tự ti về bản thân mình, rồi một ngày tôi đang rong chơi
                    trên mạng thì thấy VN GYM thay đổi cuộc đời số phận nhanh chóng, đến với VN GYM tuy tôi đã có thời
                    gian khó khăn để thích nghi và thay đổi nhưng nhận thấy sự hiệu quả tôi rất vui, VN GYM đã thay đổi
                    cuộc sống và suy nghĩ của tôi, mọi người đã rất trầm trồ khi thấy đã thay đổi, chỉ biết cảm ơn VN
                    GYM rất nhiều."</p>
                <div class="TC-tacgia">
                    <div class="TC-tacgiahinh">
                        <img src="https://media-spiceee.net/uploads/content/image/1305088/large_1aad01f25432c445e040c0aed53221ea.jpg"
                            style="height: 70px;width: 100%;border-radius: 50%;float: left;">
                    </div>
                    <div class="TC-tacgiachu">
                        <p style="font-family: Montserrat;font-size: 15px;color: #262626;margin-bottom: 1px;">Bảo Ngọc
                        </p>
                        <p style="font-family: Montserrat;font-size: 15px;color: #262626;">Đà Nẵng</p>
                    </div>
                </div>
            </div>
            <div class="TC-feedbackdetail wow fadeInLeft">
                <p style="font-family: Montserrat;font-size: 15px;color: #262626" align="justify">"GYM - trước giờ từ
                    khóa này chưa bao giờ hiện hữu trong đầu tôi và tui cũng chưa bao giờ từng nghĩ sẽ quan tâm đến nó
                    nhưng rồi một ngày bỗng chợt từ khóa VN GYM xuất hiện trên trang facebook, tôi cũng tò mò xem một số
                    video bài tập cũng như một số tấm gương lột xác bỗng tôi cảm thấy cực kì thích thú gym và hiện tại
                    tôi vẫn đang duy trì cùng với VN GYM."</p>
                <div class="TC-tacgia">
                    <div class="TC-tacgiahinh">
                        <img src="https://scontent.fdad3-1.fna.fbcdn.net/v/t1.0-9/51704647_767425606972309_5979043600762142720_n.jpg?_nc_cat=103&_nc_oc=AQmBpAUjQQ1aY8yNSBlu151ddlnClwRciiWaiKeZFZ994CGPWCnb1nXHtFS9r5iO6HCasAVgmapPq8u87G-McBBE&_nc_ht=scontent.fdad3-1.fna&oh=c510b14654c5fbbc14ec19516481ead7&oe=5D81F7FA"
                            style="height: 70px;width: 100%;border-radius: 50%;float: left;">
                    </div>
                    <div class="TC-tacgiachu">
                        <p style="font-family: Montserrat;font-size: 15px;color: #262626;margin-bottom: 1px;">Huyền
                            Nguyễn</p>
                        <p style="font-family: Montserrat;font-size: 15px;color: #262626;">Quảng Nam</p>
                    </div>
                </div>
            </div>
            <div class="TC-feedbackdetail wow fadeInLeft" style="background-color: #e5ce48">
                <p style="font-family: Montserrat;font-size: 15px;color: #262626" align="justify">"GYMER một từ mà tôi
                    luôn mong ước mọi người có thể gán cho mình, tôi đã tìm tòi rất nhiều video hướng dẫn các bài tập
                    nhưng chúng quá sơ xài và khó hiểu, những tư vấn về lịch tập ,bài tập, ăn uống, giờ giấc đều quá
                    ngắn gọn, nhưng với VN GYM thì không một mục nào là sơ xài, một thế giới dành cho gym đích thực, một
                    thế giới mà các gymer trước giờ đang phải tìm kiếm, và nó như một ngôi nhà kiến thức về gym thực sự
                    cho các bạn đam mê về gym."</p>
                <div class="TC-tacgia">
                    <div class="TC-tacgiahinh">
                        <img src="https://scontent.fdad3-3.fna.fbcdn.net/v/t1.0-9/61814634_2309408946046268_4105118999803592704_n.jpg?_nc_cat=111&_nc_oc=AQmBq5WZ7I4tTngzBHrIdxxWPlhJPer6F4cjw_oHzWfGxQCnz6eIDg6ILzL7TCNXPIYXUbxGbj3f1PCRAJwTb4_n&_nc_ht=scontent.fdad3-3.fna&oh=e6c5bac7d35d8935d2d0ee6debe368ac&oe=5D984372"
                            style="height: 70px;width: 100%;border-radius: 50%;float: left;">
                    </div>
                    <div class="TC-tacgiachu">
                        <p style="font-family: Montserrat;font-size: 15px;color: #262626;margin-bottom: 1px;">Viết Nam
                        </p>
                        <p style="font-family: Montserrat;font-size: 15px;color: #262626;">Đăk Lăk</p>
                    </div>
                </div>
            </div>
            <div class="TC-feedbackdetail wow fadeInLeft">
                <p style="font-family: Montserrat;font-size: 15px;color: #262626" align="justify">"Bạn là người đam mê
                    gym nhưng bạn không biết mình phải bắt đầu từ đâu và phải làm như thế nào, đừng lo lắng, hãy lên
                    google ngay và gõ từ khóa VN GYM để trải nghiệm một thế giới thay đổi bản thân cho chính bạn, tôi đã
                    trải nghiệm và đã thành công trong việc lột xác bản thân mình."</p>
                <div class="TC-tacgia">
                    <div class="TC-tacgiahinh">
                        <img src="https://hinhanhdep.org/wp-content/uploads/2016/07/anh-avatar-dep-trai.jpg"
                            style="height: 70px;width: 100%;border-radius: 50%;float: left;">
                    </div>
                    <div class="TC-tacgiachu">
                        <p style="font-family: Montserrat;font-size: 15px;color: #262626;margin-bottom: 1px;">Hữu Bộ</p>
                        <p style="font-family: Montserrat;font-size: 15px;color: #262626;">Hồ Chí Minh</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="TC-sanpham">
            <p style="color: white;font-size: 45px;font-family: Paytone One;text-align: center;margin-bottom: 1px;margin-top: 5%;"
                class="wow fadeInUp">THỰC PHẨM BỔ SUNG <b style="color:#FFF056 ">VN GYM</b></p>
            <p style="font-family: Montserrat;font-size: 18px;text-align: center;color: #b2b2b2;margin-bottom: 5%;"
                class="wow fadeInUp">Thực phẩm chức năng cũng là yếu tố quan trọng giúp tăng cân tăng cơ hiệu quả</p>
            @foreach ($productList->take(3) as $product)
                <div class="TC-sanphamdetail wow fadeInUp">
                    <img src="{{ config('constants.url.image-product') . $product->image }}"
                        style="height: 300px;width: 100%;float: left;">
                    <p style="margin-bottom: 1px;font-family: Montserrat;font-size: 25px;color: white">
                        <b>{{ $product->limit_name }}</b></p>
                    <p class="description_summary" style="font-family: Montserrat;font-size: 18px;color: white">{{$product->limit_description}}</p>
                    <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;">{{ $product->limit_name }}</p>
                    <div class="TC-giasanpham">
                        <div class="TC-giasanpham1">
                            <p style="font-family: Montserrat;font-size: 15px;color: #b2b2b2;margin-bottom: 2px">
                                <strike>{{ $product->discount_price_vnd }}</strike></p>
                            <p style="font-family: Montserrat;font-size: 25px;color: #FFF056">
                                <b>{{ $product->price_vnd }}</b></p>
                        </div>
                        <div class="TC-giasanpham2">
                            <button class="TC-muasanpham">Mua ngay</button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="TC-baitaphd">
            <p style="color: white;font-size: 45px;font-family: Paytone One;text-align: center;margin-bottom: 1px;margin-top: 2%"
                class="wow fadeInUp">BÀI TẬP HƯỚNG DẪN</p>
            <p style="font-family: Montserrat;font-size: 18px;text-align: center;color: #b2b2b2;margin-bottom: 5%;"
                class="wow fadeInUp">Các bài tập của<b style="color: #FFF056"> VN GYM </b>sẽ giúp bạn biết được cách
                tập đúng và hiệu quả nhất</p>
            <div class="TC-baitaphd1 wow fadeInUp">
                <div class="page__container">
                    <div class="photobox photobox_type23">
                        <div class="photobox__previewbox">
                            <img src="https://drfitness.vn/wp-content/uploads/2017/10/5-nguyen-nhan-ban-nen-tap-xa-kep-tu-hom-nay-3.jpg"
                                style="height: 450px;width: 100%" class="photobox__preview" alt="Ngực trên">
                            <span class="photobox__label"
                                style="color: white;font-family: Montserrat;font-size: 18px;margin-bottom: 5%;">NGỰC
                                TRÊN</span>
                            <button class="photobox__label TC-more" style="margin-top: 50px;width: 40%">Show
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TC-baitaphd1 wow fadeInUp">
                <div class="page__container">
                    <div class="photobox photobox_type23">
                        <div class="photobox__previewbox">
                            <img src="https://drfitness.vn/wp-content/uploads/2017/10/5-nguyen-nhan-ban-nen-tap-xa-kep-tu-hom-nay-3.jpg"
                                style="height: 450px;width: 100%" class="photobox__preview" alt="Vai">
                            <span class="photobox__label"
                                style="color: white;font-family: Montserrat;font-size: 18px;margin-bottom: 5%;">VAI</span>
                            <button class="photobox__label TC-more" style="margin-top: 50px;width: 40%">Show
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TC-baitaphd1 wow fadeInUp">
                <div class="page__container">
                    <div class="photobox photobox_type23">
                        <div class="photobox__previewbox">
                            <img src="https://drfitness.vn/wp-content/uploads/2017/10/5-nguyen-nhan-ban-nen-tap-xa-kep-tu-hom-nay-3.jpg"
                                class="photobox__preview" style="height: 450px;width: 100%" alt="Tay trước">
                            <span class="photobox__label"
                                style="color: white;font-family: Montserrat;font-size: 18px;margin-bottom: 5%;">TAY
                                TRƯỚC</span>
                            <button class="photobox__label TC-more" style="margin-top: 50px;width: 40%">Show
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="TC-contact">
            <div class="TC-contactmap wow fadeInUp">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.685313543291!2d108.23965431430567!3d15.97780174612694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421084250439e9%3A0x9b8e9f1a0f1a0ea0!2zTmFtIEvhu7MgS2jhu59pIE5naMSpYSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1560872013150!5m2!1svi!2s"
                    width="100%" height="475" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="TC-contactus">
                <form method="POST" action="#">
                    @csrf
                    <p style="color: white;font-family: Montserrat;font-size: 38px;" class="wow fadeInUp">Phản Hồi
                    </p>
                    <div class="TC-input wow fadeInUp">
                        <input type="text" name="name" class="TC-inputname" placeholder="Họ Tên">
                    </div>
                    <div class="TC-input wow fadeInUp">
                        <input type="text" name="tinh" class="TC-inputname" placeholder="Địa chỉ: VD: Đăk Lăk">
                    </div>
                    <div class="TC-inputem" wow fadeInUp>
                        <input type="text" name="email" class="TC-inputemail" placeholder="Email">

                    </div>
                    <div class="TC-inputsdt wow fadeInUp">
                        <input type="text" name="sdt" class="TC-inputSDT" placeholder="SĐT">
                    </div>
                    <div class="TC-gopy wow fadeInUp">
                        <input type="textarea" name="gopy" class="TC-inputgopy" placeholder="Phản hồi với chúng tôi">
                    </div>
                    <div class="TC-guidi wow fadeInUp" align="center">
                        <button class="TC-butguidi"><span class="glyphicon glyphicon-send"
                                style="margin-right: 5%"></span>Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('Home.footer')
</body>

</html>
