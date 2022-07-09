var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('sanphamcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem="";
    $scope.serial = 1;
    $scope.itemPerPage=10
    $scope.indexCount = function(newPageNumber){
    
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    $scope.sort = function(keyname){
        $scope.sortKey = keyname; //the sort column name
        $scope.isASC = !$scope.isASC; // ASC/DESC sorting
        }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/products"
    }).then(function(response) {
        $scope.products = response.data;
        console.log(response.data);
    }, err => console.log(err));

    //hiện ds loại sp
    $http({
        method: "GET",
        url: "http://localhost:8000/api/categories"
    }).then(function(response) {
        $scope.categories = response.data;
        console.log(response.data);
    }, err => console.log(err));

    //hiện ds nhà cc  
    $http({
        method: "GET",
        url: "http://localhost:8000/api/supplier"
    }).then(function(response) {
        $scope.suppliers = response.data;
    }, err => console.log(err));
        

    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new product";
            if($scope.product){
                $scope.product.name="";
                $scope.product.id_loai_sp="";
                $scope.product.id_ncc="";
                $scope.product.mota_sp="";
                $scope.product.unit_price="";
                $scope.product.so_luong="";
                $scope.product.image="";
                $scope.product.kich_thuoc="";
            }
        } else {
            $scope.modalTitle = "Edit product";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/products/" + id
            }).then(function(response) {
                $scope.product = response.data; 
            });
        }
        $('#modelId').modal('show');
        
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/products/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $scope.product.image = document.getElementById("img").innerHTML;
            $http({
                method: "POST",
                url: "http://localhost:8000/api/products",
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $scope.product.image = document.getElementById("img").innerHTML;
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/products/" + $scope.id,
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {

                $scope.message = response.data;
                $scope.product.image = document.getElementById("img").innerHTML;
                console.log(response.data);
                location.reload();

            });
        }
    }
})