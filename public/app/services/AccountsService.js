angular.module('AccountsService', [])
    .factory('Accounts', function($http) {
        return {
            get : function(id) {
                return $http.get('/api/accounts/' + id);
            }
        }
    }
);