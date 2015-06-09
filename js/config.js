;(function(){
  'use strict';
  
  angular.module('bloxApp')
    .config(function($routeProvider){
      $routeProvider
      .when('/', {
        templateUrl: 'views/home.html'
      })
      .when('/about', {
        templateUrl: 'views/about.html'
      })
      .when('/lessons', {
        templateUrl: 'views/lessons.html'
      })
      .when('/consult', {
        templateUrl: 'views/consult.html'
      })
      .when('/code', {
        templateUrl: 'views/codeBuilder.html',
        controller: 'codeController',
        controllerAs: 'builder'
      })
      .when('/gallery', {
        templateUrl: 'views/gallery.html'
      })
      .when('/us', {
        templateUrl: 'views/us.html'
      })
      .otherwise({redirectTo: '/'});
      
    });
  
}());
