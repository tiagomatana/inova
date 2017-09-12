(function() {
  angular.module('InovaApp', ['ngMaterial', 'jkAngularCarousel'])

    .controller('MyCtrl', function($scope) {
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
    });
}());
