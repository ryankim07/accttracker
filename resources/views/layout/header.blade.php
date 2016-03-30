<nav class="navbar navbar-inverse navbar-fixed-top" ng-controller="HeaderController as header">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a ui-sref="dashboard">{!! Html::image('images/mophie-logo.png', 'mophie') !!}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown" ng-show="authenticated">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounts <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a ui-sref="accounts" class="menu-link"><i class="fa fa-television menu-link-icon"></i>View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown" ng-show="authenticated">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Users <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a ui-sref="users" class="menu-link"><i class="fa fa-users menu-link-icon"></i>View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown" ng-show="authenticated">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">System <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a ui-sref="system" class="menu-link"><i class="fa fa-cogs menu-link-icon"></i>Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li ng-if="!authenticated"><a ui-sref="auth">Login</a></li>
                <li class="dropdown" ng-show="authenticated">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ currentUser.first_name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="" class="menu-link" ng-click="header.logout()"><i class="fa fa-power-off menu-link-icon"></i>Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>