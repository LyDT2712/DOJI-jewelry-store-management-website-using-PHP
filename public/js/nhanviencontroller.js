var app= angular.module ('myapp',['angularUtils.directives.dirPagination']);//tao 1 module
    app.controller('nhanviencontroller',function ($scope,$http) { //tao 1 controller
        $scope.timkiem="";
        $scope.serial = 1;
        $scope.itemPerPage=10
        $scope.indexCount = function(newPageNumber){
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
        $http({
            method:"GET",
            url:"http://localhost:8000/api/staff"
        }).then(function(response) {
            console.log(response.data);
            $scope.staff = response.data;
        });
        $scope.showmodal = function(id) {
            $scope.id = id;
            if (id == 0) {
                $scope.modalTitle = "Add new Staff";
                if($scope.nhanvien){
                    $scope.nhanvien.ten_nhanvien="";
                    $scope.nhanvien.gioitinh="";
                    $scope.nhanvien.ngaysinh="";
                    $scope.nhanvien.quequan="";
                    $scope.nhanvien.sdt="";
                    $scope.nhanvien.email="";
                    $scope.nhanvien.capbac="";

                }

            } else {
                $scope.modalTitle = "Edit staff";
                $http({
                    method: "GET",
                    url: "http://localhost:8000/api/staff/" + id
                }).then(function(response) {
                    $scope.nhanvien = response.data;
                });
            }
            $('#modelId').modal('show');
        }
        $scope.deleteClick = function(id) {
            var hoi = confirm("Ban co muon xoa that khong");
            if (hoi) {
                $http({
                    method: "DELETE",
                    url: "http://localhost:8000/api/staff/" + id
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
                    url: "http://localhost:8000/api/staff",
                    data: $scope.nhanvien,
                    "content-Type": "application/json"
                }).then(function(response) {
                    $scope.message = response.data;
                    console.log(response.data);
                    location.reload();

                });
            } else { //sua san pham
                $http({
                    method: "PUT",
                    url: "http://localhost:8000/api/staff/" + $scope.id,
                    data: $scope.nhanvien,
                    "content-Type": "application/json"
                }).then(function(response) {
                    $scope.message = response.data;
                    console.log(response.data);
                    location.reload();

                });
            }
        }
    });