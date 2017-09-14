(function () {

  'use strict';

angular.module('InovaApp')
  .config(function($routeProvider) {
    $routeProvider
    .when("/",{
      template: "<p>Olá</p>"
    })
    .when("/inova", {
        templateUrl : "templates/quem-somos.html"
    });

  });




})();
