var app = angular.module('myapp', []); //tao 1 module
app.controller("ThanhToanController",function($scope,$rootScope, $http){
    $rootScope.customer = null;
    $scope.id = JSON.parse(localStorage.getItem('customer'));

    $http({
        method: "GET",
        URL: "http://localhost:8000/api/customer"+$scope.id
    }).then(function(response){
        $scope.customer = response.data;
    }, err=>console.log(err));

    $scope.cart = JSON.parse(localStorage.getItem('cart'));
    console.log($scope.cart);
    let total1 = 0;
    $scope.cart.forEach(e => {total1+=e.unit_price*e.quantity
        
    });
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
        sessionStorage.removeItem("kh");
        location.reload();
    }
});  