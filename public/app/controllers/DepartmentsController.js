angular.module('DepartmentsController', [])
    .controller('DepartmentsController', function($scope, $http, Departments) {

    $scope.departments = {};

    Departments.get()
        .success(function(data) {
            $scope.departments = data;
    });
});