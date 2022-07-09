// var app = angular.module('myapp', []);
app.controller('mycontroller', function ($scope, $http) {
    $scope.LoadCart = function () {
        $scope.cart = JSON.parse(localStorage.getItem('cart'));
    }
    $scope.LoadCart();

    $scope.Tang = function (sp) {
        var index = $scope.cart.indexOf(sp);
        if (index >= 0) {
            $scope.cart[index].quantity += 1;
        }
        reCaculatioTotalPrice ()

        localStorage.setItem('cart', JSON.stringify($scope.cart));
    }

    $scope.total = 0;
    function reCaculatioTotalPrice () {
        let total = 0;
        if($scope.cart) {
            $scope.cart.forEach(e => {
                total += e.unit_price * e.quantity
            });
        }
        $scope.total = total;
    }
    reCaculatioTotalPrice ()

    $scope.Giam = function (sp) {
        var index = $scope.cart.indexOf(sp);
        if (index >= 0 && $scope.cart[index].quantity >= 2) {
            $scope.cart[index].quantity -= 1;
        }
        reCaculatioTotalPrice ()

        localStorage.setItem('cart', JSON.stringify($scope.cart));
    }
    
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

  

    $scope.Xoa = function (sp) {
        var index = $scope.cart.indexOf(sp);
        $scope.cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify($scope.cart));
        reCaculatioTotalPrice ()

        alert("Đã xóa sản phẩm thành công");
    }

    $scope.XoaCart = function () {
        localStorage.removeItem('cart');
        location.reload();
    }

    //Đăng nhập
    $scope.test=false;
    $scope.kh="";
    if(localStorage.getItem("customer")==null){
        $scope.dangnhap="Đăng nhập";
    }
    else{
        $http({
            method: "GET",
            url: "http://localhost:8000/api/customer/"+ localStorage.getItem("customer")
        }).then(function(response) {
            $scope.kh = response.data.ten_kh;
            console.log($scope.kh);
           $scope.dangnhap=$scope.kh;
           $scope.test=true;
        });
    }

    //Đăng xuất   
    $scope.dangxuat=function(){
        localStorage.removeItem("customer");
        location.reload();
    }
});