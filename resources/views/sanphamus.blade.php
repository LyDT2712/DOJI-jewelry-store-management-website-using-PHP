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
   
    <div id="main">

		<div class="tskc">
			<h2>TRANG SỨC KIM CƯƠNG</h2>
			<div class="thanhngang">
				<div id="thanh"></div>
			</div>
			
			<div class="row">
            <div class="spnoibat col-6 col-m-6 col-s-12">
				<!-- <img src="assets/images/img3.jpg" alt="" style="width:650px; height: 325px"> -->
                <iframe width="100%" height="318"  src="https://www.youtube.com/embed/JlIZSXTby-0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			</div>
            <div class="spnoibat col-3 col-m-3 col-s-6" dir-paginate="sp in product3|orderBy:sortBy:isASC|filter:timkiem|itemsPerPage:itemPerPage">
			  	<img class="product-img" src="/upload/sanpham/@{{sp.image}}" alt=""><br />
			  	<a ng-click="openDetails(sp.id)" href="/detail"><lable class="product-name">@{{sp.name}}</a></h6>
                <h5>@{{sp.unit_price | number:0}}đ</h5>
				<!-- <input  type="button" class="btn_buy"  value="CHỌN MUA"></input> -->
			</div>		  
			</div>
		</div>
		<div class="tsc">
			<h2>TRANG SỨC CƯỚI</h2>
			<div class="thanhngang">
				<div id="thanh"></div>
			</div>
			<div class="row">
                <div class="spnoibat col-6 col-m-6 col-s-12">
				  	<img class="tsc-img" src="assets/images/tsc.jpg" alt=""><br />
                </div>
                <div class="spnoibat col-3 col-m-3 col-s-6" dir-paginate="sp in product2|orderBy:sortBy:isASC|filter:timkiem|itemsPerPage:itemPerPage">
			  	<img class="product-img" src="/upload/sanpham/@{{sp.image}}" alt=""><br />
			  	<a ng-click="openDetails(sp.id)" href="/detail"><lable class="product-name">@{{sp.name}}</a></h6>
                <h5>@{{sp.unit_price | number:0}}đ</h5>
				<!-- <input type="button" class="btn_buy" value="CHỌN MUA"></input> -->
			</div>		  
				  

			</div>
		</div>
		<div class="tsv_24K">
			<h2>TRANG SỨC VÀNG 24K</h2>
			<div class="thanhngang">
				<div id="thanh"></div>
			</div>
			<div class="anhqc">
				<img src="assets/images/tsvang.jpg" alt="">
			</div>
			<div class="row">
            <div class="spnoibat col-3 col-m-3 col-s-6" dir-paginate="sp in product9|orderBy:sortBy:isASC|filter:timkiem|itemsPerPage:itemPerPage">
			  	<img class="product-img" src="/upload/sanpham/@{{sp.image}}" alt=""><br />
			  	<a ng-click="openDetails(sp.id)" href="/detail"><lable class="product-name">@{{sp.name}}</a></h6>
                <h5>@{{sp.unit_price | number:0}}đ</h5>
				<!-- <input type="button" class="btn_buy" value="CHỌN MUA"></input> -->
			</div>
				
			</div>
		</div>
		<div class="dongho" >
			<h2>ĐỒNG HỒ - DOJI WATCH</h2>
			<div class="thanhngang">
				<div id="thanh"></div>
			</div>
			<div class="row" >
			  <div class="spnoibat col-6 col-m-6 col-s-12">
			  	<img class="tsc-img" src="/assets/images/anhdh.png" alt=""><br />
			</div>
			<div class="spnoibat col-3 col-m-3 col-s-6" dir-paginate="sp in product1|orderBy:sortBy:isASC|filter:timkiem|itemsPerPage:itemPerPage">
			  	<img class="product-img" src="/upload/sanpham/@{{sp.image}}" alt=""><br />
			  	<a ng-click="openDetails(sp.id)" href="/detail"><lable class="product-name">@{{sp.name}}</a></h6>
                <h5>@{{sp.unit_price | number:0}}đ</h5>
				<!-- <input type="button" class="btn_buy" value="CHỌN MUA"></input> -->
			</div>		  
		</div>
		<div class="quatang">
			<h2>QUÀ TẶNG</h2>
			<div class="thanhngang">
				<div id="thanh"></div>
			</div>
			<div class="anhqc">
            <img src="assets/images/quatang.jpg" alt="">
        			</div>
			<div class="row">
            <div class="spnoibat col-3 col-m-3 col-s-6" dir-paginate="sp in product8|orderBy:sortBy:isASC|filter:timkiem|itemsPerPage:itemPerPage">
			  	<img class="product-img" src="/upload/sanpham/@{{sp.image}}" alt=""><br />
			  	<a ng-click="openDetails(sp.id)" href="/detail"><lable class="product-name">@{{sp.name}}</a></h6>
                <h5>@{{sp.unit_price | number:0}}đ</h5>
				<!-- <input type="button" class="btn_buy" value="CHỌN MUA"></input> -->
			</div>		  
			</div>
			
		</div>
    </div>

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