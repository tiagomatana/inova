(function() {
  angular.module('InovaApp')
  .component('menu',{
    templateUrl: 'app/components/sidenav/menu-template.html',
    controller: Controller
  });
  Controller.$inject = [
    '$scope',
    '$timeout',
    '$mdSidenav',
    '$log',
    '$window'
  ]

  function Controller($scope, $timeout, $mdSidenav, $log, $window) {
    $scope.toggleMenu = buildToggler('left');

    function debounce(func, wait, context) {
      var timer;

      return function debounced() {
        var context = $scope,
            args = Array.prototype.slice.call(arguments);
        $timeout.cancel(timer);
        timer = $timeout(function() {
          timer = undefined;
          func.apply(context, args);
        }, wait || 10);
      };
    }

    function buildToggler(navID) {
      return function() {
        // Component lookup should always be available since we are not using `ng-if`
        var windowWidth = $window.innerWidth;
        console.log(windowWidth);
        if (windowWidth < 960) {
           // Execute code
           $mdSidenav(navID)
           .toggle()
           .then(function () {
             $log.debug("toggle " + navID + " is done");
           });
        }
      };
    }
  }
}());
