quotationList.controller('quoteList', function($scope) {

	//DATEPICKER FUNCTION
	$scope.today = function() {
		$scope.dt = new Date();
		};

		$scope.today();

	$scope.toggleMin = function() {
		$scope.minDate = $scope.minDate ? null : new Date();
	};

		$scope.toggleMin();

	$scope.clear = function () {
		$scope.dt = null;
	};

	$scope.open = function($event) {
		$event.preventDefault();
		$event.stopPropagation();

		$scope.opened = true;
	};

	$scope.dateOptions = {
		formatYear: 'yy',
		startingDay: 1
	};

	$scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'yyyy-MM-dd','MM/dd/yyyy','shortDate'];
	$scope.format = $scope.formats[4];

	$scope.getDayClass = function(date, mode) {

		if (mode === 'day') {

			var dayToCheck = new Date(date).setHours(0,0,0,0);

			for (var i=0;i<$scope.events.length;i++){
				var currentDay = new Date($scope.events[i].date).setHours(0,0,0,0);

				if (dayToCheck === currentDay) {
					return $scope.events[i].status;
				}
			}
		}

		return '';
		};

});