var app = angular.module("app", []);
app.controller("ctrl", ['$scope', '$http', function($scope, $http){
    $scope.search = function(){
        if($scope.s != ""){
            var data = {
            hint: $scope.s
        };

        $http({
            method: "GET",
            url: "process.php",
            params: data
        }).then(function(response){
            $scope.result = response.data;
        });
        }
    }
}]);