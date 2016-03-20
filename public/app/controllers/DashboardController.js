angular.module('DashboardController', [])
    .controller('DashboardController', function($http, $auth, $rootScope, $state) {
        var vm = this;

        vm.data;

        //Grab the list of users from the API
        $http.get('api/dashboard').success(function(data) {
            vm.data = data;
        }).error(function(error) {
            vm.error = error;
        });
});