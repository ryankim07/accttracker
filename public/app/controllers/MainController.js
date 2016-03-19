angular.module('MainController', [])
    .controller('MainController', function($scope, $http) {

    $scope.message = 'Test';

    Main.get().success(function(data) {
        $scope.message = data;
    });
});