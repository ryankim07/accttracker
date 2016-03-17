angular.module('EmployeesService', [])
    .factory('Employees', function($http) {
        return {
            get : function() {
                return $http.get('/api/employees');
            }
        }
    }
);
