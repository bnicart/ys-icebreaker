<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>You_Source Ice Breaker!!!</title>
  <link rel="stylesheet" href="css/materialize.css" title="materialize" charset="utf-8">
  <link rel="stylesheet" href="css/style.css" title="materialize" charset="utf-8">
</head>
<body ng-app="app" ng-controller="appCtrl">
  <div class="container">
    <div class="row">
      <div class="col s12 center-align">
        <a class="waves-effect waves-light btn-large" ng-click="showIcebreaker()" ng-class="{'disabled':btnDisabled}">
          Show Icebreaker
        </a>
        <div class="card-panel teal">
          <h1 class="white-text">
            {{ icebreaker.value }}
          </span>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js" charset="utf-8"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/angular.min.js"></script>
  <script src="js/app.js" charset="utf-8"></script>
</body>
</html>
