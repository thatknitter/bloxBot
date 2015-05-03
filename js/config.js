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
      .when('/gallery', {
        templateUrl: 'views/gallery.html'
      })
      .when('/us', {
        templateUrl: 'views/us.html'
      })
      .otherwise({redirectTo: '/'});
      
    });
  
}());
