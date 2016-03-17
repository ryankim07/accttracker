<!DOCTYPE html>
<html lang="en" ng-app="acctTrackerApp">
<head>
    <base href="/">
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
    {!! Html::style('css/main.css') !!}

    <!-- Scripts -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    {!! Html::script('js/app.js') !!}
    {!! Html::script('app/app.js') !!}

</head>
<body class="@yield('body-class')">

@include('layout.header')

<div class="container-fluid">
    <div class="row-fluid">
        <div ng-view></div>
    </div>
</div>

{!! Html::script('app/controllers/MainController.js') !!}
{!! Html::script('app/controllers/DepartmentsController.js') !!}
{!! Html::script('app/controllers/EmployeesController.js') !!}
{!! Html::script('app/services/DepartmentsService.js') !!}
{!! Html::script('app/services/EmployeesService.js') !!}

</body>
</html>