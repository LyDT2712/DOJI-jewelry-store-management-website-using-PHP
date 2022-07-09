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
                <a href="/user.login"><i class="fa fa-user"></i> Login</a>
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

    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form" >
                <h3>CHI TIẾT ĐƠN HÀNG</h3>
                <div >
                    <div class="row">
                    <div class="col-lg-8 col-md-6">
                            <div class="checkout__order">
                                <h4 style="color:red;">Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Thành tiền</span></div>
                                <ul ng-repeat ="sp in cart track by $index">
                                    
                                    <li>@{{sp.name}}<span>@{{sp.quantity * sp.unit_price | number : 0}}đ</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Tạm Tính<span>@{{total|number}}đ</span></div>
                                <div class="checkout__order__total">Tổng Tiền<span>@{{total|number}}đ</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Tạo tài khoản mới?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>  
                               
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Kiểm tra thanh toán
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn" ng-click="dathang()">
                                    XÁC NHẬN ĐẶT HÀNG
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" style="background: #f5f5f5;
    padding: 30px;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ tên<span>*</span></p>
                                        <input type="text" ng-model="customer.ten_kh">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text" ng-model="customer.sdt">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="text" ng-model="customer.email">
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" ng-model="customer.dia_chi">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Chọn địa chỉ khác
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            
                            <div class="checkout__input">
                                <p>Ghi chú<span>*</span></p>
                                <input type="text"
                                    placeholder="Notes about your order">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

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