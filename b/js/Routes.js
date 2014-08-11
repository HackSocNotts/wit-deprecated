angular.module('Routes', []).config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {

	$routeProvider

		// home page
		.when('/', {
			templateUrl: 'views/home.html',
			controller: 'HomeController'
		})

		.when('/tickets', {
			templateUrl: 'views/tickets.html'
			// controller: 'NerdController'
		})

		.when('/info', {
			templateUrl: 'views/info.html'
			// controller: 'NerdController'
		})

		.when('/contact', {
			templateUrl: 'views/contact.html'
			// controller: 'NerdController'
		})

		.otherwise({
			templateUrl: 'views/404.html'
		});


	$locationProvider.html5Mode(true);

}]);