var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('billsbancontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem="";
    $scope.serial = 1;
    $scope.itemPerPage=10
    $scope.indexCount = function(newPageNumber){
    
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/bills"
    }).then(function(response) {
        $scope.bills = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add bills ";
            if ($scope.bill){
                $scope.bill.id_kh="";
                $scope.bill.date_order="";  
                $scope.bill.tong_tien="";
                $scope.bill.payment=""; 
                $scope.bill.status="";
                $scope.bill.note="";
                $scope.bill.created_at="";   
                $scope.bill.updated_at="";   
            }
           
        } else {
            $scope.modalTitle = "Edit bills ";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/bills/" + id
            }).then(function(response) {
                $scope.bill = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/bills/" + id
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
                url: "http://localhost:8000/api/bills",
                data: $scope.bill,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/bills/" + $scope.id,
                data: $scope.bill,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});