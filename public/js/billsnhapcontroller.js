var app = angular.module('myapp', []); //tao 1 module
app.controller('billsnhapcontroller', function($scope, $http) { //tao 1 controller
    $http({
        method: "GET",
        url: "http://localhost:8000/api/bills_nhaps"
    }).then(function(response) {
        $scope.nhaps = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm ";
            if ($scope.nhap){
                $scope.nhap.id_ncc="";
                $scope.nhap.id_nhanvien="";  
                $scope.nhap.date_order="";
                $scope.nhap.tong_tien="";    
                $scope.nhap.thanh_toan="";
                $scope.nhap.note="";   
            }
           
        } else {
            $scope.modalTitle = "Sửa ";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/bills_nhaps/" + id
            }).then(function(response) {
                $scope.nhap = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/bills_nhaps/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi 
            $http({
                method: "POST",
                url: "http://localhost:8000/api/bills_nhaps",
                data: $scope.nhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/bills_nhaps/" + $scope.id,
                data: $scope.nhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});