
<!DOCTYPE html>
<html lang="zxx"  ng-app="myapp" ng-controller="mycontroller">

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

    <section class="shoping-cart spad">
        <div class="cart">
                    <h2>Giỏ Hàng</h2>				
                </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                    <table class="table table-border text-nowrap" >
                            <thead>
                                <tr>
                                    <th>Ảnh SP</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Đơn Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr ng-repeat="sp in cart track by $index">
                                    <td class="image-prod"><img class="img" src="/upload/sanpham/@{{sp.image}}"></img></td>					        
                                    <td class="product-name">
                                        <h5>@{{sp.name}}</h5>
                                    </td>
                                    <td class="price">@{{sp.unit_price | number : 0}}đ</td>
                                    
                                    <td class="quantity">
                                        <div class="input-group mb-3">
                                            <div ng-click="Giam(sp)" class="btn btn-sm" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius:0; height:40px; width:40px; text-align: center; padding: 9px;">-</div>               
                                            <input type="text" value="@{{sp.quantity}}"  style="width: 70px; text-align: center; font-size: 15px; font-weight: 400; height: 40px;">
                                            <div ng-click="Tang(sp)" class="btn btn-sm" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius:0; height:40px; width:40px; text-align: center; padding: 9px;">+</div>
                                        </div>
                                    </td>
                                    <td class="total">@{{sp.quantity * sp.unit_price | number : 0}}đ</td>
                                    <td class="product-remove">
                                        <a href=""><i class="fa fa-times-circle"
                                                ng-click="Xoa(sp)" aria-hidden="true"></i></a>
                                    </td>
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="/" class="primary-btn cart-btn"> <= TIẾP TỤC MUA SẮM</a>
                        <a href="" class="btn btn-primary py-3 px-4" style="float:right; margin: 5px 20px" ng-click="XoaCart(sp)">Xóa giỏ hàng</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Uư đãi giảm giá</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">Xác thực</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng đơn hàng</h5>
                        <ul>
                            <li>Thành tiền <span>@{{total |number : 0 }}đ</span></li>
                            <li>Tổng tiền (đã bao gồm VAT) <span>@{{total |number : 0 }}đ</span></li>
                        </ul>
                        <a href="/payment" class="primary-btn">ĐẶT HÀNG</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
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
    <script src="js/cart.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {  
    $('#modelcart').modal('show');
    });
    </script>
    

</body>

</html>
