var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('slidecontroller', function($scope, $http) { //tao 1 controller
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
        url: "http://localhost:8000/api/slides"
    }).then(function(response) {
        $scope.slides = response.data;
        console.log(response.data);
    }, err => console.log(err));

    $scope.showmodal = function(id_slide) {
        if (id_slide == 0) {
            $scope.modalTitle = "Add slide new";
            if ($scope.slide){
                $scope.slide.title="";
                $scope.slide.content="";    
                $scope.slide.image="";    
            }
           
        } else {
            $scope.modalTitle = "Edit slides";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/slides" + id_slide
            }).then(function(response) {
                $scope.slide = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id_slide) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/slides" + id_slide
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id_slide == 0) { //dang them moi sp
            $scope.slide.image = document.getElementById("img").innerHTML;
            $http({
                method: "POST",
                url: "http://localhost:8000/api/slides",
                data: $scope.slide,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/slides" + $scope.id_slide,
                data: $scope.slide,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});