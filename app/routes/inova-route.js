(function () {

  'use strict';

angular.module('InovaApp')
  .config(function($routeProvider) {
    $routeProvider
    .when("/",{
      templateUrl: "templates/home.html"
    })
    .when("/inova", {
        templateUrl : "templates/quem-somos.html"
    });

  });




})();
