angular.module('ApplicationsController', [])
    .controller('ApplicationsController', function($http, Applications) {

        var vm = this;

        vm.applications;
        vm.error;

        //Grab the list of users from the API
        Applications.get().success(function(applications) {
            vm.applications = applications;
        }).error(function(error) {
            vm.error = error;
        });
});