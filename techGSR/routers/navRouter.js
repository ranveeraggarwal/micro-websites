app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
  $routeProvider 
    .when('/about', { 
      controller: 'aboutController', 
      templateUrl: 'views/about.html'
    }) 
    .when('/projects', { 
      controller: 'projectController', 
      templateUrl: 'views/projects.html'
    }) 
    .when('/sap', { 
      controller: 'sapController', 
      templateUrl: 'views/sap.html'
    }) 
    .when('/events', { 
      controller: 'eventsController', 
      templateUrl: 'views/events.html'
    }) 
    .when('/assoc', { 
      controller: 'assocController', 
      templateUrl: 'views/assoc.html'
    }) 
    .when('/recog', { 
      controller: 'recogController', 
      templateUrl: 'views/recog.html'
    }) 
    .when('/team', { 
      controller: 'teamController', 
      templateUrl: 'views/team.html'
    }) 
    .when('/contact', { 
      controller: 'contactController', 
      templateUrl: 'views/contact.html'
    }) 
    .when('/', { 
      controller: 'homeController', 
      templateUrl: 'views/home.html' 
    }) 
    .otherwise({ 
      redirectTo: '/'
    }); 
}]);