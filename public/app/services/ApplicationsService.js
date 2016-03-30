angular.module('ApplicationsService', [])
    .factory('Applications', function($http, $rootScope) {
        return {
            get : function() {
                return $http.get('/api/applications/' + $rootScope.currentUser.id);
            }
        }
    }
);