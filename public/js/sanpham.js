var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('sanphamcontroller',
    function ($scope, $http, $rootScope) { //tao 1 controller


        const id = localStorage.getItem('chosenId') || 2;
        $scope.quantity = 1;
        $scope.timkiem = "";
        $scope.serial = 1;
        $scope.itemPerPage = 9
        $scope.indexCount = function (newPageNumber) {

            $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
        }


        $scope.addToCart = function () {
            let item = {};
            item.id = $scope.product.id;
            item.name = $scope.product.name;
            item.quantity = $scope.quantity;
            item.unit_price = $scope.product.unit_price;

            item.image = $scope.product.image;

            // console.log(item);

            var list = JSON.parse(localStorage.getItem('cart')) || [];
            if (list.length === 0) {
                list = [item];
            } else {
                let ok = true;
                for (let x of list) {
                    if (x.id == item.id) {
                        x.quantity += item.quantity;
                        ok = false;
                        break;
                    }
                }
                if (ok) {
                    list.push(item);
                }
            }
            localStorage.setItem('cart', JSON.stringify(list));
            alert("Đã thêm giỏ hàng thành công");
        }
        // // Change quatity
        // $scope.changeQuantity = (index) => {
        //     if(index==0) {
        //         if($scope.quantity > 1)
        //             $scope.quantity--;
        //     }
        //     else
        //         $scope.quantity++;
        // }

        $scope.products = [];
        $scope.search = {};

        $scope.resetFilters = function () {
            // needs to be a function or it won't trigger a $watch
            $scope.search = {};
        };

        // pagination controls
        $scope.currentPage = 1;
        $scope.totalItems = 0;
        $scope.entryLimit = 4; // items per page
        $scope.noOfPages = 5;

        // // $watch search to update pagination
        // $scope.$watch('search', function (newVal, oldVal) {
        // 	$scope.filtered = filterFilter($scope.products, newVal);
        // 	$scope.totalItems = $scope.filtered.length;
        // 	$scope.noOfPages = 5;
        // 	$scope.currentPage = 1;
        // }, true);

        // slide động
        var i = 1;
        var N = 6;

        function Next() {
            if (i < N) {
                i += 1;

            }
            else {
                i = 1;
            }
            document.getElementById("slide").setAttribute('src', '/assets/images/img' + i + '.jpg')
        }
        function Back() {
            if (i > 1)
                i -= 1;
            else {
                i = N;

            }
            document.getElementById("slide").setAttribute('src', '/assets/images/img' + i + '.jpg')
        }



        setInterval(Next, 3000);


        //lấy sản phẩm theo loại
        $scope.SelectCate = function (l) {
            localStorage.setItem("loaisp", l);
        }
        $scope.openDetails = (id) => {
            // console.log(id)
            localStorage.setItem('chosenId', id);
            // window.open('/detail');
        }
        //chi tiết
        if(localStorage.getItem("loaisp")) {
            $http({
                method: "get",
                url: "http://localhost:8000/api/productbycate/" + localStorage.getItem("loaisp")
            }).then(function Success(d) {
                $scope.lstcate = d.data;
                // console.log($scope.lstcate);
            }, err => console.log(err));
        }


        $http({
            method: "get",
            url: "http://localhost:8000/api/productbycate/1"
        }).then(function (response) {

            $scope.product1 = response.data;
            // console.log(response.data);
        }, err => console.log(err));

        $http({
            method: "get",
            url: "http://localhost:8000/api/productbycate/2"
        }).then(function (response) {

            $scope.product2 = response.data;
            // console.log(response.data);
        }, err => console.log(err));

        $http({
            method: "get",
            url: "http://localhost:8000/api/productbycate/3"
        }).then(function (response) {

            $scope.product3 = response.data;
            // console.log(response.data);
        }, err => console.log(err));

        $http({
            method: "get",
            url: "http://localhost:8000/api/productbycate/8"
        }).then(function (response) {

            $scope.product8 = response.data;
            // console.log(response.data);
        }, err => console.log(err));

        $http({
            method: "get",
            url: "http://localhost:8000/api/productbycate/9"
        }).then(function (response) {

            $scope.product9 = response.data;
            // console.log(response.data);
        }, err => console.log(err));
        $http({
            method: "get",
            url: "http://localhost:8000/api/productbycate/10"
        }).then(function (response) {

            $scope.product10 = response.data;
            // console.log(response.data);
        }, err => console.log(err));

        $http({
            method: "GET",
            url: "http://localhost:8000/api/products"
        }).then(function (response) {

            $scope.products = response.data;
            // console.log(response.data);
        }, err => console.log(err));

        $http({
            method: "GET",
            url: "http://localhost:8000/api/categories"
        }).then(function (response) {
            $scope.categories = response.data;
        }, err => console.log(err));



        $http({
            method: "get",
            url: "http://localhost:8000/api/products/" + id,
            params: {
                ProductName: localStorage.getItem("name")
            }
        }).then(function (response) {
            $scope.product = response.data;
            // console.log(response.data);
        }, function error(er) {
            console.log(er);
        });
        $scope.showmodal = function (id) {
            $scope.id = id;
            if (id == 0) {
                $scope.modalTitle = "Add new product";
            } else {
                $scope.modalTitle = "Edit product";
                $http({
                    method: "GET",
                    url: "http://localhost:8000/api/products/" + id
                }).then(function (response) {
                    $scope.product = response.data;
                });
            }
            $('#modelId').modal('show');
        }
        $scope.deleteClick = function (id) {
            var hoi = confirm("Ban co muon xoa that khong");
            if (hoi) {
                $http({
                    method: "DELETE",
                    url: "http://localhost:8000/api/products/" + id
                }).then(function (response) {
                    $scope.message = response.data;
                    location.reload();
                });
            }
        }
        $scope.saveData = function () {
            if ($scope.id == 0) { //dang them moi sp
                $http({
                    method: "POST",
                    url: "http://localhost:8000/api/products",
                    data: $scope.product,
                    "content-Type": "application/json"
                }).then(function (response) {
                    $scope.message = response.data;
                    // console.log(response.data);
                    location.reload();

                });
            } else { //sua san pham
                $http({
                    method: "PUT",
                    url: "http://localhost:8000/api/products/" + $scope.id,
                    data: $scope.product,
                    "content-Type": "application/json"
                }).then(function (response) {
                    $scope.message = response.data;
                    // console.log(response.data);
                    location.reload();

                });
            }
        }


        //Đăng nhập
        $scope.test = false;
        $scope.kh = "";
        if (localStorage.getItem("customer") == null) {
            $scope.dangnhap = "Đăng nhập";
        }
        else {
            $http({
                method: "GET",
                url: "http://localhost:8000/api/customer/" + localStorage.getItem("customer")
            }).then(function (response) {
                $scope.kh = response.data.ten_kh;
                console.log($scope.kh);
                $scope.dangnhap = $scope.kh;
                $scope.test = true;
            });
        }

        //Đăng xuất   
        $scope.dangxuat = function () {
            localStorage.removeItem("customer");
            location.reload();
        }

        //đặt hàng
        $rootScope.customer = null;
        $scope.id = JSON.parse(localStorage.getItem('customer'));
        // lấy thông tin khách hàng
        if ($scope.id) {
            $http({
                method: "GET",
                url: "http://localhost:8000/api/customer/" + $scope.id
            }).then(function (response) {
                $scope.customer = response.data;
                // console.log($scope.customer);
            }, err => console.log(err));
        }

        //Lấy thông tin giỏ hàng    
        $scope.cart = JSON.parse(localStorage.getItem('cart'));
        // console.log($scope.carts);
        let total1 = 0;
        if ($scope.cart) {
            $scope.cart.forEach(e => {
                total1 += e.unit_price * e.quantity
            });
        }
        $rootScope.total = total1;


        $scope.dathang = () => {
            const order = {
                id_kh: $scope.id,
                tong_tien: $rootScope.total,
                details: $scope.cart,
            };

            $http({
                method: "POST",
                url: "http://localhost:8000/api/bills/",
                data: order
            }).then(res => {  localStorage.removeItem('cart'); location.href = "/done" }, err => console.log(err));
        }
    });
app.filter('startFrom', function () {
    return function (input, start) {
        if (input) {
            start = +start;
            return input.slice(start);
        }
        return [];
    };
 
});



