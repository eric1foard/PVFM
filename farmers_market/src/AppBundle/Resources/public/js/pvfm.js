var app = angular.module('PVFM', ["ui.bootstrap.modal"]);

app.controller('userCtrl', ['$scope', '$http',
	function($scope, $http) {

		$scope.test = "hello";
		var users = [];

		$http.get('user/getAllIDs').success(function(data){
				
				angular.forEach(data, function(value, key){
					users.push(value);
				});
				$scope.users = users;
				});

		$scope.getUserInfo = function(id){
			$http.get('user/getUserInfo/'+id).success(function(data){

				$scope.userInfo = data;

				console.log("name: "+ $scope.userInfo.username);
				$scope.showModal = true;


				});
		};

		

	}
	]);