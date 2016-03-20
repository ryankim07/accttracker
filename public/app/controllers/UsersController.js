angular.module('UsersController', [])
    .controller('UsersController', function($http, $auth, $rootScope, $state) {

        var vm = this;

        vm.users;
        vm.error;

        //Grab the list of users from the API
        $http.get('api/users').success(function(users) {
            vm.users = users;
        }).error(function(error) {
            vm.error = error;
        });
});