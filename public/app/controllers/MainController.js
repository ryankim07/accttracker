angular.module('MainController', [])
    .controller('MainController', function($http, $auth, $rootScope, $state) {

     var vm = this;
        
     vm.logout = function() {

        alert('hello');
     }
});