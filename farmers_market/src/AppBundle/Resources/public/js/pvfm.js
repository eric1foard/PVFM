var app = angular.module('PVFM', ['ui.bootstrap']);

app.controller('userCtrl', ['$scope', '$http', '$modal',
	function($scope, $http, $modal) {

		var users = [];
		$http.get('user/getAllIDs').success(function(data){
			angular.forEach(data, function(value, key){
				users.push(value);
			});
			$scope.users = users;
		});


		$scope.getUserInfo = function(id){
			$scope.animationsEnabled = true;
			$http.get('user/getUserInfo/'+id).success(function(data){

				$scope.userInfo = data;

				var modalInstance = $modal.open({
					animation: true,
					templateUrl: 'modal.html',
					controller: 'ModalInstanceCtrl',
					size: 'lg',
					resolve: {
						userInfo: function () {
							return $scope.userInfo;
						}
					}
				});

				
			});
		};
	}
	]);


// Please note that $modalInstance represents a modal window (instance) dependency.
// It is not the same as the $modal service used above.

app.controller('ModalInstanceCtrl', function ($scope, $modalInstance, userInfo) {

	$scope.userInfo = userInfo;

	console.log("from the ModalInstanceCtrl: "+ userInfo.username);

	$scope.cancel = function () {
		$modalInstance.dismiss('cancel');
	};
});