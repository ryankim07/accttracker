<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if(!isset($page))

        <?php
            header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
            header('Pragma: no-cache'); // HTTP 1.0.
            header('Expires: 0'); // Proxies.
        ?>

    @endif

    <title>Test Planner</title>
    <link rel="icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon" />
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    {!! Html::style('css/app.css') !!}

    <!-- Scripts -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    {!! Html::script('js/app.js') !!}
    {!! Html::script('app/lib/angular/angular.min.js') !!}
    {!! Html::script('app/lib/angular/angular-route.min.js') !!}

</head>
<body class="@yield('body-class')" ng-app="acctTrackerApp">

@include('layout.header')

<div class="container-fluid" ng-controller="EmployeesController">
    <div class="row-fluid" ng-view>
        <div class="col-md-3" ng-repeat="employee in employees">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{ employee.dept_id }}</h3></div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <td>{{ employee.first_name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{!! Html::script('app/controllers/EmployeesController.js') !!}
{!! Html::script('app/services/EmployeesService.js') !!}
{!! Html::script('app/app.js') !!}

</body>
</html>