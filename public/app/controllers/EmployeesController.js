angular.module('EmployeesController', [])
    .controller('EmployeesController', function($scope, $http, Employees) {

    $scope.employees = {};

    Employees.get()
        .success(function(data) {
            $scope.employees = data;
    });
});