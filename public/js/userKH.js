var app = angular.module('myapp', []); //tao 1 module
app.controller("LoginCustomer",function($scope,$http){
    $scope.sai="";
    $scope.customer={};
    $scope.dangnhap=function(email,pass){
        $scope.email=email;
        $scope.password=pass;
        $http({
            method: "GET",
            url: "http://localhost:8000/api/login/" + $scope.email+"&"+$scope.password     
        }).then(function(response) {
            localStorage.setItem("customer",response.data.id);
            console.log(response.data);
            window.location.assign("http://127.0.0.1:8000/")
        },function(){
            $scope.sai="Sai tài khoản hoặc mật khẩu ?";
            $scope.email="";
            $scope.password="";
        });
    }
    $scope.mk1=function(mk,mk2){
        if(mk==mk2){
            $scope.kh.mk=mk;
        }
        else{
            $scope.sai="Nhập lại mật khẩu?";
        }
    }
    $scope.luu=function(customer){
        $http({
            method: "POST",
            url: "http://localhost:8000/api/kh",
            data: customer,
            "content-Type": "application/json"
        }).then(function(response) {
            $scope.message = response.data;
            alert("Đăng ký thành công");
            window.location.assign("http://127.0.0.1:8000/login")
        });
    }
    $scope.dangky=function(email){
        $scope.email=email;
        if($scope.email!=null){
        $http({
            method: "GET",
            url: "http://localhost:8000/api/kh1/get/" + $scope.email
        }).then(function(response) {
            $scope.sai="Tài khoản đã tồn tại?";
            $scope.email="";
            $scope.mk="";
        },function(){
            $scope.mk1($scope.mk,$scope.mk2);
            $scope.customer.email=$scope.email;
            $scope.customer.tenkh=$scope.ten_kh;
            $scope.customer.dia_chi=$scope.dia_chi;
            $scope.customer.sdt=$scope.sdt;
            console.log($scope.customer);
            $scope.luu($scope.customer);
         
        });}
        else{
            $scope.sai="Nhập tài khoản?";
        }
    }   
    
    $scope.sua=function(){
        $scope.sai="";
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/customer"
    }).then(function(response) {
        $scope.customers = response.data;
    }, err => console.log(err));
});
