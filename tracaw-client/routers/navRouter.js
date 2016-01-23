app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
  $routeProvider 
    .when('/search', { 
      controller: 'searchController', 
      templateUrl: 'views/search.html' 
    }) 
    .when('/results/:typ/:id', { 
      controller: 'resultsController', 
      templateUrl: 'views/results.html'
    }) 
    .when('/results/:typ/', { 
      redirectTo: '/search'
    }) 
    .when('/workflow', { 
      redirectTo: '/search'
    }) 
    .when('/reports', { 
      templateUrl: 'views/report.html' 
    }) 
    .when('/about', { 
      templateUrl: 'views/about.html' 
    }) 
    .when('/signout', { 
      redirectTo: '/'
    }) 
    .when('/workflow/:tid', { 
      controller: 'workflowController',
      templateUrl: 'views/workflow.html'
    }) 
    .when('/profile', { 
      templateUrl: 'views/profile.html'
    }) 
    .when('/', { 
      controller: 'homeController', 
      templateUrl: 'views/home.html' 
    }) 
    .otherwise({ 
      redirectTo: '/'
    }); 
}]);