var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('khachhangcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem="";
    $scope.serial = 1;
    $scope.itemPerPage=5;
    $scope.indexCount = function(newPageNumber){
    
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/customer"
    }).then(function(response) {
        $scope.customer = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add customer";
            if ($scope.khach){
                $scope.khach.ten_ncc="";
                $scope.khach.diachi_ncc="";  
                $scope.khach.email="";
                $scope.khach.sdt=""; 
                $scope.khach.note=""; 
            }
           
        } else {
            $scope.modalTitle = "Edit customer";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/customer/" + id
            }).then(function(response) {
                $scope.khach = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/customer/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/customer",
                data: $scope.khach,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/customer/" + $scope.id,
                data: $scope.khach,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});