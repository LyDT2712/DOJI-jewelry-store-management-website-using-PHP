var app = angular.module('myapp',['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('nhacungcapcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem="";
    $scope.serial = 1;
    $scope.itemPerPage=5;
    $scope.indexCount = function(newPageNumber){
    
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/supplier"
    }).then(function(response) {
        $scope.nhacc = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add supplier ";
            if ($scope.nhaccs){
                $scope.nhaccs.ten_ncc="";
                $scope.nhaccs.diachi_ncc="";  
                $scope.nhaccs.email="";
                $scope.nhaccs.sdt="";    
                $scope.loaisp.Delet="";
            }
           
        } else {
            $scope.modalTitle = "Edit supplier";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/supplier/" + id
            }).then(function(response) {
                $scope.nhaccs = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/supplier/" + id
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
                url: "http://localhost:8000/api/supplier",
                data: $scope.nhaccs,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/supplier/" + $scope.id,
                data: $scope.nhaccs,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});