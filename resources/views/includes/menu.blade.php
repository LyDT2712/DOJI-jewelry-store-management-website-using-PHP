<section class="hero hero-normal" >
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Loại Sản Phẩm</span>
                    </div>
                    <ul>
                        <li ng-repeat="l in categories"><a href="productbycate" ng-click="SelectCate(l.id)">@{{l.tenloai}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text" placeholder="What do you need?" ng-model='timkiem'>
                            <button type="submit" class="site-btn">SEARCH</button>

                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+333 460 125</h5>
                            <span>Hỗ trợ 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/angular.min.js"></script>
<script src="/js/dirPagination.js"></script>
<script src="/js/sanpham.js"></script>