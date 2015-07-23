sampleApp.controller('MainCtrl', function($scope, $modal, $log) {
	
	$scope.animationsEnabled = true;
	
	$scope.open = function open(size) {
		
		var modalInstance = $modal.open({
			animation: $scope.animationsEnabled,
			templateUrl: 'myModalContent',
			size: size,
			controller: 'ModalInstanceCtrl',
		});
		
	}
	
});

sampleApp.controller('ModalInstanceCtrl', function($scope, $modalInstance){
	
	/*
	$scope.ok = function () {
		alert('you clicked!');
	};
	*/
	
	$scope.cancel = function () {
		$modalInstance.dismiss('cancel');
	};
	
});

/** other way to call
var app = angular.module('exampleApp',['ngDialog']);

app.controller('MainCtrl', function($scope, ngDialog) {
	
	$scope.test = 'hello';
	
	$scope.clickToOpen = function() {
		ngDialog.open({
			template: 'myModalContent',
			scope: $scope
		});
	}
});
**/