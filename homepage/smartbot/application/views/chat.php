<style>
    .search {
        position: fixed;
        background-color: #fff;
        height: 460px;
        /* top: 100px; */
        
    }

    .bar-bt {
        background-color: red;
        width: 100%;
        height: 44px;
    }

</style>

<div class="justify-content-md-center background-image-content" ng-app="myApp" ng-controller="myCtrl">
    <div class="row">
        <div class="col-9 text-center">
                <h1 class="text-white">Hello {{name}}</h1>













        </div>
        <div class="col-3 search">
            <h1>HHHH</h1>
        </div>

        <div class="col-12 text-center bar-bt">
            kkkkk
        </div>

    </div>
</div>    


<script>
     // AngularJS
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
        
        $scope.name = 'Chat';

        let fnc_init = function () {

        }

        fnc_init();

    });
    // AngularJS
</script>


