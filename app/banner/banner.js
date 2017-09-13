(function() {
  angular.module('InovaApp', ['ngMaterial', 'jkAngularCarousel'])

    .controller('MyCtrl', function($scope, $timeout, $mdSidenav, $log) {
      $scope.dataArray = [{
          src: 'assets/images/1.jpg',
          label : 'Energia Solar Fotovoltaica- Orçamento sem compromisso.'
        },
        {
          src: 'assets/images/2.jpg',
          label: 'Elaboração de Projetos Prevenção e Proteção Contra Incêndio (PPCI).'
        },
        {
          src: 'assets/images/3.jpg',
          label: 'Laudos Técnicos- SPDA, Instalações Elétricas, Aterramento, Qualidade de Energia.'
        },
        {
          src: 'assets/images/4.jpeg',
          label: 'Correção Fator de Potência.'
        }
      ];

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
    });
}());
