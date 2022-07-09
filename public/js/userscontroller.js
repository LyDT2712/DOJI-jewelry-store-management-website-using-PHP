var app= angular.module ('myapp',['angularUtils.directives.dirPagination']);//tao 1 module
app.controller('userscontroller',function ($scope,$http) { //tao 1 controller
        $scope.sai="";
        $scope.serial = 1;
        $scope.itemPerPage=2;
        $scope.kh={};
        $scope.indexCount = function(newPageNumber){
        
            $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
        }
        $http({
            method:"GET",
            url:"http://localhost:8000/api/userss"
        }).then(function(response) {
            console.log(response.data);
            $scope.userss = response.data;
        });
        $scope.showmodal = function(id) {
            $scope.id = id;
            if (id == 0) {
                $scope.modalTitle = "Add new users";
                if($scope.users){
                    $scope.users.full_name="";
                    $scope.users.users_name="";
                    $scope.users.email="";
                    $scope.users.password="";
                    $scope.users.phone="";
                    $scope.users.address="";
                    $scope.users.Delet="";
                    $scope.users.remember_token="";

                }

            } else {
                $scope.modalTitle = "Edit users";
                $http({
                    method: "GET",
                    url: "http://localhost:8000/api/userss/" + id
                }).then(function(response) {
                    $scope.users = response.data;
                });
            }
            $('#modelId').modal('show');
        }
        $scope.deleteClick = function(id) {
            var hoi = confirm("Ban co muon xoa that khong");
            if (hoi) {
                $http({
                    method: "DELETE",
                    url: "http://localhost:8000/api/userss/" + id
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
                    url: "http://localhost:8000/api/userss",
                    data: $scope.users,
                    "content-Type": "application/json"
                }).then(function(response) {
                    $scope.message = response.data;
                    console.log(response.data);
                    location.reload();

                });
            } else { //sua san pham
                $http({
                    method: "PUT",
                    url: "http://localhost:8000/api/userss/" + $scope.id,
                    data: $scope.users,
                    "content-Type": "application/json"
                }).then(function(response) {
                    $scope.message = response.data;
                    console.log(response.data);
                    location.reload();

                });
            }
        }

        
    });