var app=angular.module('myapp',[]);
app.controller('mycontroller',function($scope){
    $scope.hello='My name is angular Js';
    $scope.datas = JSON.parse('[{"masv":1,"tensv":"Giang"},{"masv":2,"tensv":"Tuyet"},{"masv":3,"tensv":"Van Trang"}]');
});
