<!DOCTYPE html>
<html lang="zxx" ng-app="myapp" ng-controller="sanphamcontroller">

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
    <link rel="stylesheet" href="css/Chitietsp.css"type="text/css">
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

    <!-- Product Details Section Begin -->
    <h3 style="padding-left: 20px; color: red;">CHI TIẾT SẢN PHẨM</h3>
    <section class="product-details spad" style="padding-bottom: 25px;">
        <div class="container">
       
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="/upload/sanpham/@{{product.image}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg" src="/upload/sanpham/@{{product.image}}" alt="" style="width: 50px; height:50px">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg" src="/upload/sanpham/@{{product.image}}" alt="" style="width: 50px; height:50px"> 
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="/upload/sanpham/@{{product.image}}" alt="" style="width: 50px; height:50px">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="/upload/sanpham/@{{product.image}}" alt="" style="width: 50px; height:50px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>@{{product.name}}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">@{{product.unit_price |number:0}}đ</div>
                        <p>@{{product.mota_sp}}</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <span class="dec qtybtn" ng-click="changeQuantity(0)">-</span>
                                    <input type="text" ng-model="quantity">
                                    <span class="inc qtybtn" ng-click="changeQuantity(1)">+</span>
                                </div>
                            </div>
                        </div>
                        <a ng-click="addToCart(item)" href="#" class="primary-btn">ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Tình trạng</b> <span>Sẵn hàng</span></li>
                            <li><b>Giao hàng</b> <span> 01 day. <samp></samp></span></li>
                            <li><b>Kích thước</b> <span>@{{product.kich_thuoc}}</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
 
    <div class="lst-supportdtit">
			<div class="supportdtit">
				<div class="tl-h3spdtit">
					<div class="img-tlh3spdt">
						<img src="img/ic-titleh3.png"></div>
						<div class="txt-tlh3spdt">
							<h3>cam kết chất lượng</h3>
						</div>
					</div>
					<div class="txt-h3spdtit">
						<p><img src="img/icon-ct.png"> 100% Chuẩn xác về hàm lượng kim cương. Tất cả các sản phẩm trang sức của DOJI được kiểm định chặt chẽ với máy quang phổ, cam kết chuẩn xác hàm lượng kim cương.</p><p>100% chuẩn xác về trọng lượng kim cương.</p>
						<p><img src="img/icon-ct.png"> 100% sản phẩm trang sức kim cương đều có đầy đủ kiểm định uy tín.</p>
						<p><img src="img/icon-ct.png"> Mọi sản phẩm trang sức do DOJI bán ra đều có hóa đơn (đã bao gồm các loại thuế), ghi đầy đủ thông tin về hàm lượng, trọng lượng kim cương cũng như và điều kiện bảo hành trang sức và chính sách thu đổi.</p>
					</div>
				</div>
				<div class="supportdtit">
					<div class="tl-h3spdtit">
						<div class="img-tlh3spdt">
							<img src="img/ictitlth3.png">
						</div>
						<div class="txt-tlh3spdt">
							<h3>hướng dẫn mua hàng online</h3>
						</div>
					</div>
					<div class="txt-h3spdtit">
						<p><img src="img/icon-ct.png"> Lựa chọn sản phẩm tại các chuyên mục trên website</p>
						<p><img src="img/icon-ct.png"> Thêm vào giỏ hàng.</p>
						<p><img src="img/icon-ct.png"> Kiểm tra thông tin đơn hàng và đặt hàng</p>
						<p><img src="img/icon-ct.png"> Kiểm tra và xác nhận đơn hàng</p>
						<p><img src="img/icon-ct.png"> Đơn hàng thành công sẽ được gửi về email &amp; sms của quý khách</p>
						<p><img src="img/icon-ct.png"> Xem thêm chi tiết <a href="/dich-vu-khach-hang-gt/huong-dan-dat-hang">tại đây</a></p>
					</div>
				</div>
			</div>
    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm khác</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6" dir-paginate="sp in products|orderBy:sortBy:isASC|filter:timkiem|itemsPerPage:itemPerPage">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/upload/sanpham/@{{sp.image}}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a ng-click="openDetails(sp.id)" href="/detail">
                                    <lable class="product-name">@{{sp.name}}
                                </a></h6>
                            <h5>@{{sp.unit_price | number:0}}đ</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__pagination">
                <dir-pagination-controls max-size="16" on-page-change='indexCount(newPageNumber)' direction-links="true" boundary-links="true"></dir-pagination-controls>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

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