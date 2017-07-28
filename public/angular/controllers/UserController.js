app.controller('UserController', function($scope, $http, API_URL){
	// retrive User listing from API
	$http.get(API_URL + "users").success(function(response){
		$scope.users = response;
	});
});