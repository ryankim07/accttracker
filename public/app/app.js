var acctTrackerApp = angular.module('acctTrackerApp', [
    'ngRoute',
    'DepartmentsController',
    'EmployeesController',
    'MainController',
    'DepartmentsService',
    'EmployeesService',
    ]);

acctTrackerApp.config(function($routeProvider, $locationProvider) {
    $routeProvider
        .when('/', {
            templateUrl: '/app/templates/dashboard.html',
            controller: 'MainController'
        })
        .when('/departments', {
            templateUrl: '/app/templates/departments.html',
            controller: 'DepartmentsController'
        })
        .when('/employees', {
            templateUrl: '/app/templates/employees.html',
            controller: 'EmployeesController'
        })

    $locationProvider.html5Mode(true);
});