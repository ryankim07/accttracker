angular.module('AccountsService', [])
    .factory('Accounts', function($http, $rootScope) {
        return {
            get : function() {
                return $http.get('/api/accounts/' + $rootScope.currentUser.id);
            }
        }
    }
);