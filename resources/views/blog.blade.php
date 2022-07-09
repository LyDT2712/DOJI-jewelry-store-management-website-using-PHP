<!DOCTYPE html>
<html lang="zxx"  ng-app="myapp" ng-controller="sanphamcontroller">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang sức DOJI</title>
    <link rel="icon" href="https://trangsuc.doji.vn/favicon.ico">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/Ex.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
        
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="/login"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>  
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    @include('includes.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @include('includes.menu')
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <div class="slide1">
        <div class="slideshow">
            <img id="slide" src="~/assets/images/img1.jpg" style="width: 100%;position: relative;margin: auto;height: 500px;transition: 0.5s;">
            <i class="fas fa-chevron-right" onclick="Next()" style="position: absolute;right: 0px; bottom: 100px;color: #0000003d;"></i>
            <i class="fas fa-chevron-left" onclick="Back()" style="position: absolute;left: 0px;bottom: 100px;color: #0000003d;"></i>
        </div>
    </div>
   
    <section class="newsa">
        <div class="container">
            <div class="newsa-ct">
                <div class="lstvct">
                    <h2 style="color:red; text-align:center">BLOG</h2>
                        <div class="it-vct">
                            <div class="img-itvct">
                                <a href="/gioi-thieu-chung">
                                    <img alt="Giới thiệu chung" src="/resize/medium/vct-1-dXBsb2FkaW50cm8=-medium.jpg">
                                </a>
                            </div>
                            <div class="txt-itvct" >
                                <div class="txt-jdfl">
                                    <h3><a href="/gioi-thieu-chung">Giới thiệu chung</a></h3>
                                    <p>Trang sức DOJI tự hào là thương hiệu Quốc gia Việt Nam. Với hệ thống phân phối trải dài từ Bắc vào Nam, sự đa dạng về chủng loại, độc đáo về kiểu dáng, dẫn đầu về xu hướng [...]</p>
                                </div>
                            </div>
                        </div>
                        <div class="it-vct">
                            <div class="img-itvct">
                                <a href="/cac-thuong-hieu">
                                    <img alt="Các thương hiệu" src="/resize/medium/vct-2-dXBsb2FkaW50cm8=-medium.jpg">
                                </a>
                            </div>
                            <div class="txt-itvct">
                                <div class="txt-jdfl">
                                    <h3><a href="/cac-thuong-hieu">Các thương hiệu</a></h3>
                                    <p>Trang sức DOJI luôn tạo được dấu ấn đối với đông đảo Quý khách hàng cùng đa dạng các thương hiệu: Trang sức  Kim cương Diamond House, Trang sức cưới Wedding Land, Trang sức Vàng 24K và Vàng ép vỉ Lộc Phát Tài...  [...]</p>
      
                                </div>
                            </div>
                        </div>
                        <div class="it-vct">
                            <div class="img-itvct">
                                <a href="/tai-sao-chon-trang-suc-doji">
                                    <img alt="Tại sao chọn Trang sức DOJI" src="/resize/medium/vct-3-dXBsb2FkaW50cm8=-medium.jpg">
                                </a>
                            </div>
                            <div class="txt-itvct">
                                <div class="txt-jdfl">
                                    <h3><a href="/tai-sao-chon-trang-suc-doji">Tại sao chọn Trang sức DOJI</a></h3>
                                    <p>Tập đoàn DOJI lý giải điều đó bằng việc luôn cam kết đem đến cho Quý khách hàng những sản phẩm chất lượng hàng đầu vì giá trị cá nhân và tinh hoa cuộc sống. Phương châm về [...]</p>
     
                                </div>
                            </div>
                        </div>
                        <div class="it-vct">
                            <div class="img-itvct">
                                <a href="/thanh-tich">
                                    <img alt="Thành tích" src="/resize/medium/vct-4-dXBsb2FkaW50cm8=-medium.jpg">
                                </a>
                            </div>
                            <div class="txt-itvct">
                                <div class="txt-jdfl">
                                    <h3><a href="/thanh-tich">Thành tích</a></h3>
                                    <p>Với những nỗ lực không ngừng, Tập đoàn Vàng bạc Đá quý DOJI liên tục nhận được những bằng khen, giải thưởng cao quý của Đảng, Nhà nước, Chính phủ, các Bộ [...]</p>
                
                                </div>
                            </div>
                        </div>
                        <div class="it-vct">
                            <div class="img-itvct">
                                <a href="/hoat-dong-san-xuat-kinh-doanh">
                                    <img alt="Hoạt động sản xuất, kinh doanh" src="/resize/medium/vct-5-dXBsb2FkaW50cm8=-medium.jpg">
                                </a>
                            </div>
                            <div class="txt-itvct">
                                <div class="txt-jdfl">
                                    <h3><a href="/hoat-dong-san-xuat-kinh-doanh">Hoạt động sản xuất, kinh doanh</a></h3>
                                    <p>Tập đoàn DOJI có bề dày trên 1/4 thế kỷ trong lĩnh vực Vàng bạc Đá quý trải dài từ khai thác tới chế tác cắt mài đá quý cũng như vàng, trang sức. Quy trình chế tác và sản xuất [...]</p>
            
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    @include('includes.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="/js/dirPagination.js"></script>
    <script src="js/sanpham.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {  
    $('#modelcart').modal('show');
    });
    </script>
</body>

</html>
