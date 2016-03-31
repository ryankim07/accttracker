angular.module('AccountsController', [])
    .controller('AccountsController', function($http, $stateParams, Accounts) {

        var vm = this;

        vm.accounts;
        vm.error;
        vm.sideBar = false;

        //Grab the list of users from the API
        Accounts.get($stateParams.userId).success(function(response) {
            vm.accounts = response;
        }).error(function(error) {
            vm.error = error;
        });

        vm.showSideBar = function(obj) {
            var mainTableEl = angular.element('#main-table');
            var mainTableClass = mainTableEl[0].className;
            var mainViewerEl = angular.element('#main-viewer');
            
            if (mainTableClass != 'col-xs-12 col-md-8') {
                // Control width of both columns
                mainTableEl.toggleClass('col-md-12 col-md-8');
                mainViewerEl.toggleClass('col-md-0 col-md-4');
            }

            // Selecting rows on mobile
            /*if (currentClass == 'col-xs-12 col-md-12') {
                $('#view-all-users-main').css({'z-index': '1000'});
            }*/

            vm.sideBar = true;
            vm.name     = obj.name;
            vm.username = obj.username;
            vm.password = obj.password;
            vm.url      = obj.url;
        }
});