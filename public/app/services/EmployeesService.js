angular.module('EmployeesService', [])

    .factory('Employees', function($http) {

        return {
            // get all the comments
            get : function() {
                return $http.get('/api/employees');
            }
        }

    });
