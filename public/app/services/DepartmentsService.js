angular.module('DepartmentsService', [])
    .factory('Departments', function($http) {
        return {
            get : function() {
                return $http.get('/api/departments');
            }
        }
    }
);
