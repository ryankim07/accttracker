angular.module('AccountsController', [])
    .controller('AccountsController', function($http, Accounts) {

        var vm = this;

        vm.accounts;
        vm.error;
        vm.sideBar = false;

        //Grab the list of users from the API
        Accounts.get().success(function(accounts) {
            vm.accounts = accounts;
        }).error(function(error) {
            vm.error = error;
        });

        vm.showSideBar = function(obj) {
            vm.name     = obj.name;
            vm.username = obj.username;
            vm.password = obj.password;
            vm.url      = obj.url;
            vm.sideBar = true;
        }
});