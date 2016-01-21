angular
  .module('app', [])
  .controller('appCtrl', appCtrl);

appCtrl.$inject = ['$scope', '$http', '$timeout'];

function appCtrl($scope, $http, $timeout) {
  $scope.btnDisabled = false;

  $http.get("icebreaker.json").then(function(response) {
    $scope.icebreakerList = response.data;
  });

  $scope.showIcebreaker = function() {
    $scope.btnDisabled = true;
    var index = Math.floor(Math.random()*$scope.icebreakerList.length);
    $scope.icebreaker = $scope.icebreakerList[index];
    
    $(".card-panel").addClass("animated rubberBand");

    $timeout(function () {
      $(".card-panel").removeClass("animated rubberBand");
      $scope.btnDisabled = false;
    }, 1000);
  }
}
