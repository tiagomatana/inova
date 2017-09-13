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
    '$log'
  ]

  function Controller($scope, $timeout, $mdSidenav, $log) {
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
        $mdSidenav(navID)
          .toggle()
          .then(function () {
            $log.debug("toggle " + navID + " is done");
          });
      };
    }
  }
}());
