var app = angular.module('PVFM', []);

app.controller('userCtrl', ['$scope', '$http',
	function($scope, $http) {

		$scope.test = "hello";

		$scope.users = $http.get('user/getAll');

		$scope.getUsers = function() {
			console.log("hey, it's working");

			$http.get('user/getAll')
			.success(function(data){
				$scope.users = data;
				console.log(data);
				});
		};
	}
	]);