
<style>
        .background-image-content  {
            width: 100%;
            height: 1200px;
            background-image: url('<?= APP_URL_IMG.'btc122.jpeg' ?>');
            background-size: cover;

            /* opacity: 0.6; */
            /* filter: alpha(opacity=60); */

            border: 1px solid black;
        }

        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        .d-back-grap {
            background-color: #fff;
            width: 100%;
            height: auto;
        }

        .d-content {
            backdrop-filter: blur(10px);
            border-radius: 5%;
        }

        @media (max-width: 768px) {
            .input-lossrate {
                font-size: 10px !important;
            }
        }
        
    </style>

  <div class="background-image-content" ng-app="myApp" ng-controller="myCtrl">
    <div class="col-12 text-center">
        
        <!-- <p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p> -->
        <!-- <h1>Hello {{name}}</h1> -->
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8 d-content text-dark">
                <h2 class="mt-3">คำนวณ จำนวนเงินต่อล็อต</h2>

                <form>
                    <div class="row justify-content-center mt-3">
                        <div class="form-group col-6 col-md-3">
                            <label for="inputState">สกุลเงิน</label>
                            <select id="inputState" class="form-control" ng-model="typemonney">
                                <option value="THB" selected>THB</option>
                                <option value="USD">USD</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-9 col-md-3 form-group">
                            <label for="money">จำนวนเงิน</label>
                            <input type="number" class="form-control" id="money" ng-model="monneyin" ng-change="convertMonney()" placeholder="0">
                            <!-- <p>{{moneythb}}</p> -->
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="col-9 col-md-6 form-group">
                            <label for="{{typemonney}}">แปลงเป็น {{typemonney=='THB'?'USD':'THB'}}</label>
                            <input type="number" class="btn btn-md btn-secondary form-control" id="{{typemonney}}" value="{{monney}}" placeholder="0">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-9 col-md-3 form-group">
                            <label for="leverage">Leverage {{leverage}}X</label>
                            <input type="number" class="form-control" id="leverage" ng-model="leverage" ng-change="calCulate()" placeholder="0">
                        </div>
                        <div class="col-9  col-md-3 form-group">
                            <label for="profit">กำไร %</label>
                            <input type="number" class="form-control" id="profit" ng-model="profit" ng-change="calCulate()" value="" placeholder="0%">
                        </div>
                        <div class="col-9 col-md-3 form-group">
                            <label for="loss">ขาดทุน %</label>
                            <input type="number" class="form-control" id="loss" ng-model="loss" ng-change="calCulate()" value="" placeholder="0%">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-9 col-md-3 form-group">
                            <label for="lotsize">คำนวณ ล็อต</label>
                            <input type="button" class="btn btn-md btn-secondary form-control" id="lotsize" value="{{lotsize | number:2}}" placeholder="0">
                        </div>
                        <div class="col-9 col-md-3 form-group">
                            <label for="takepofit">กำไร {{typemonney=='THB'?'USD':'THB'}} </label>
                            <input type="button" class="btn btn-md btn-secondary form-control" id="takepofit" value="{{takeprofit}}" placeholder="0">
                        </div> 
                        <div class="col-9 col-md-3 form-group">
                            <label for="stoploss">ขาดทุน {{typemonney=='THB'?'USD':'THB'}} </label>
                            <input type="button" class="btn btn-md btn-secondary form-control" id="stoploss" value="{{stoploss}}" placeholder="0">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-9 col-md-9 form-group">
                            <!-- <label for="123">คำนวณ </label> -->
                            <input type="button" class="btn btn-md btn-secondary input-lossrate form-control" id="lossrate" value="{{loss_text_f}}{{lossrate | number:2}}{{loss_text_e}}" placeholder="0">
                        </div>
                        <!-- <div class="col-3 form-group">
                            <label for="takepofit">อัตราการชนะ</label>
                            <input type="button" class="btn btn-md btn-secondary form-control" id="takepofit" value="{{winrate | number:2}}" placeholder="0">
                        </div> 
                        <div class="col-3 form-group">
                            <label for="stoploss">อัตราการแพ้</label>
                            <input type="button" class="btn btn-md btn-secondary form-control" id="stoploss" value="{{lossrate | number:2}}" placeholder="0">
                        </div> -->
                    </div>
                    <div class="row justify-content-center mt-5 mb-4">
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <div class="col-4">
                            <a href="<?= base_url()?>Home" class="btn btn-md btn-danger">Back</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
  </div>

  <!-- <p><?= base_url() ?>Home/updateToken</p>  -->
  <script>
        // AngularJS
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope, $http) {
            
            var wbnb = 0;
            $scope.num = 'DEV999';
            $scope.typemonney = 'THB';

            // $scope.monneythb = '';
            $scope.monneyin = '';
            $scope.monney = '';
            $scope.leverage = '';
            $scope.lotsize = '';

            $scope.profit = '';
            $scope.loss = '';
            $scope.takeprofit = '';
            $scope.stoploss = '';
            $scope.winrate = '';
            $scope.lossrate = '';
            $scope.loss_text_f = 'คุณมีโอกาศแพ้ติดต่อกัน ';
            $scope.loss_text_e = ' ครั้ง ถึงจะล้มละลาย';

            
            $scope.convertMonney = function () {

                if($scope.typemonney == 'THB'){
                    $scope.monney = $scope.monneyin/33;
                }else{
                    $scope.monney = $scope.monneyin*33;
                }
                $scope.monney = $scope.monney.toFixed(2)
                
            };

            $scope.calCulate = function () {
                $scope.takeprofit = ($scope.monney*$scope.profit)/100;
                $scope.winrate = $scope.monney/$scope.takeprofit;

                $scope.stoploss = ($scope.monney*$scope.loss)/100;
                $scope.lossrate = $scope.monney/$scope.stoploss;
                $scope.lotsize = ($scope.monney*$scope.takeprofit)/($scope.stoploss*$scope.leverage);
            };

            // $scope.calPercenLoss = function () {
                // $scope.money
               
                
                // console.log($scope.lotsize);
            // };

            //  const updateToken = function () {

            //  };
            

        


            
            
        



        });
        // AngularJS
    </script>

</body>





</html>