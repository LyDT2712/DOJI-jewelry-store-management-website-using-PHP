var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('loaisanphamcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem="";
    $scope.serial = 1;
    $scope.itemPerPage=10;
    $scope.indexCount = function(newPageNumber){
    
        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    
    $http({
        method: "GET",
        url: "http://localhost:8000/api/categories"
    }).then(function(response) {
        $scope.categories = response.data;
    });

    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new category";
            if ($scope.loaisp){
                $scope.loaisp.tenloai="";
                $scope.loaisp.Delet="";
            }  
        }
        else {
                $scope.modalTitle = "Edit category";
                $http({
                    method: "GET",
                    url: "http://localhost:8000/api/categories/" + id
                }).then(function(response) {
                    $scope.loaisp = response.data; 
                });
            }
            $('#modelId').modal('show');
        }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/categories/" + id
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
                url: "http://localhost:8000/api/categories",
                data: $scope.loaisp,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/categories/" + $scope.id,
                data: $scope.loaisp,
                "content-Type": "application/json"
            }).then(function(response) {

                $scope.message = response.data;
          
                console.log(response.data);
                location.reload();

            });
        }
    }
});