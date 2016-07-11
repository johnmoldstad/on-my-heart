application.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
	$urlRouterProvider.otherwise('/home');
	
	$stateProvider
	.state("root",{
		url: "",
		abstract: true,
		views: {
			"header": {
				templateUrl: "components/header.php"
			},
			"footer":{
				templateUrl: "components/footer.php"
			}
		}
	})
	.state("root.home", {
		url: "/home",
		views: {
			"main@": {
				templateUrl: "components/home.php"
			}
		}
	})
	.state("root.what-is-it", {
		url: "/what-is-it",
		views: {
			"main@": {
				templateUrl: "components/what-is-it.php"
			}
		}
	})
	.state("root.how-does-it-work", {
		url: "/how-does-it-work",
		views: {
			"main@": {
				templateUrl: "components/how-does-it-work.php"
			}
		}
	})
	.state("root.how-do-i-get-it", {
		url: "/how-do-i-get-it",
		views: {
			"main@": {
				templateUrl: "components/how-do-i-get-it.php"
			}
		}
	})
	.state("root.how-do-i-use-it", {
		url: "/how-do-i-use-it",
		views: {
			"main@": {
				templateUrl: "components/how-do-i-use-it.php"
			}
		}
	})


}]);

application.run(['$rootScope', '$state', '$stateParams', function ($rootScope, $state, $stateParams) {
	  $rootScope.$state = $state;
	  //$rootScope.$stateParams = $stateParams;
	console.log($state);
	console.log($stateParams);
	}]);