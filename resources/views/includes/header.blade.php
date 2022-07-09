<!-- session_start();
print_r($_SESSION('cart')) -->
<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> trangchudoji.vn.com</li>
                                <li>Miễn phí vận chuyện cho toàn bộ đơn hàng</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="/img/language.png" alt="" style="height: 14px;">
                                <div>VietNamese</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                      <li><a href="#">VietNamese</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>

                            <div class="header__top__right__language">
                               
                                <a href="/login" ng-model="dangnhap"><i class="fa fa-user" ></i> @{{dangnhap}}</a>
                                <span class="arrow_carrot-down"  ></span>
                                <ul ng-show="test">
                                    <a class="dropdown-item" href="#" ng-click="dangxuat()" >Đăng xuất</a>
                          
                                </ul>
                            </div>

                            <!-- <div class="header__top__right__auth">
                                <a href="/login" ng-model="dangnhap"><i class="fa fa-user" ></i> @{{dangnhap}}</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-item" ng-show="test">
                                   
                                    
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./">Home</a></li>
                            <li><a href="./">Cửa hàng</a></li>
                            <li><a href="#">Trang </a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./cart">Giỏ hàng</a></li>
                                    <li><a href="./blog">Chi tiết blog</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog">Blog</a></li>
                            <li><a href="./contact.html">Liên Lạc</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span></span></a></li>
                            <li><a href="cart"><i class="fa fa-shopping-bag" ></i> <span></span></a></li>
                        </ul>
                       
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>