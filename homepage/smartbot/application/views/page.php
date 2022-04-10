  <div class="row justify-content-md-center background-image-content" ng-app="myApp" ng-controller="myCtrl">
    <div class="col-12 text-center">
        
        <!-- <a href="<?= base_url().'Home/logout'; ?>" class="btn btn-danger">Logout</a> -->
        <div class="row justify-content-md-center">
            <div class="col-md-8 d-back-grap mt-3">
                <!-- <canvas id="myChart"></canvas> -->
                <!-- <canvas id="myChart" style="max-width: 1024px;"></canvas> -->
                <canvas id="canvas" class="canvas"></canvas>
            </div>
            
        <!-- <canvas id="myChart" style="max-width: 500px;"></canvas> -->
        </div>
        <div class="row justify-content-md-center">
        <div class="col-4 text-danger">
                {{data}}
            </div>
        </div>
        <p>Name</p>
        <p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
        <h1 class="text-white">Hello {{name}}</h1>
    </div>
  </div>

  <!-- <p><?= base_url() ?>Home/updateToken</p>  -->



<!-- <script src="https://unpkg.com/chart.js@3"></script> -->
<!-- <script src="https://unpkg.com/@sgratzl/chartjs-chart-boxplot@3"></script> -->
<script src="<?= APP_URL_JS.'chart.min.js' ?>"></script>
<script src="<?= APP_URL_JS.'chart_index.umd.min.js' ?>"></script>

<script>
     // AngularJS
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
        
        var wbnb = 0;
        $scope.num = 'DEV999';

        //0xbb4CdB9CBd36B01bD1cBaEBF2De08d9173bc095c //BNB
        $http.get("https://api.pancakeswap.info/api/v2/tokens/")
        .then(function(res) {
            console.log(res.data.data);
            $scope.data = res.data;
            wbnb = Number(res.data.data.price).toFixed(4);
            // wbnb = wbnb;
            // wbnb = 14;
            // bnb = res.data.symbol
            // console.log(res.data.data.symbol);
            // console.log($scope.data);
            // $scope.Data(wbnb);
            updateToken($scope.data);
        }); 

        const updateToken = function (data) {
            // console.log(data);
            $http.post("<?= base_url() ?>Home/updateToken/",
                angular.toJson(data)
                ).then(function(res) {
                    $scope.list = res.data;
                    // console.log($scope.list);
                $scope.Data(wbnb);
            }); 
        };

        $scope.Data = function (bnb) {
            // console.log($scope.filter);
                window.onload = () => {
                    const ctx = document.getElementById("canvas").getContext("2d");
                    window.myBar = new Chart(ctx, {
                        type: 'boxplot',
                        data: boxplotData,
                        options: {
                            responsive: true,
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Chart.js Box Plot Chart'
                            }
                        }
                    });

                };
            
            
        };
        

        function randomValues(count, min, max) {
            const delta = max - min;
            return Array.from({length: count}).map(() => Math.random() * delta + min);
        }

        const boxplotData = {
            // define label tree
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: 'rgba(255,0,0,0.5)',
                borderColor: 'red',
                borderWidth: 1,
                outlierColor: '#999999',
                padding: 10,
                itemRadius: 0,
                data: [
                    // [max,open,close,min],
                    [68,40,20,16],
                    [68,40,20,16],
                    [68,40,20,16],
                    [68,40,20,16],
                    [68,40,20,16],

                // randomValues(100, 0, 100),
                // randomValues(100, 0, 20),
                // randomValues(100, 20, 70),
                // randomValues(100, 60, 100),
                // randomValues(40, 50, 100),
                // randomValues(100, 60, 120),
                // randomValues(100, 80, 100)
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor:  'rgba(0,0,255,0.5)',
                borderColor: 'blue',
                borderWidth: 1,
                outlierColor: '#999999',
                padding: 10,
                itemRadius: 0,
                data: [
                    
                    // [min,open,close,max],
                    [12,20,40,68],
                    [12,20,40,68],
                    [12,20,40,68],
                    [12,20,40,68],
                    [12,20,40,68],



                // randomValues(100, 60, 100),
                // randomValues(100, 0, 100),
                // randomValues(100, 0, 20),
                // randomValues(100, 20, 70),
                // randomValues(40, 60, 120),
                // randomValues(100, 20, 100),
                // randomValues(100, 80, 100)
                ]
            }]
        };

       

        let fnc_init = function () {
            boxplotData();
        }

        fnc_init();

    });
    // AngularJS
</script>


