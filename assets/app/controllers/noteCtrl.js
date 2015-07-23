sampleApp.controller('NoteCtrl', function($scope, $http) {

	
	$scope.sendForm = function () {
		
		console.log($scope.note); //ajax process
		
		$http({
			url: "/tutorial/getNoteData",
			data: $scope.note,
			method: 'POST'
		})
		.success(function(data){
			
			console.log(data);
			
		})
		.error(function(){
			
		});
	}
	
	$scope.word_count = function() {
		//return 100 - $scope.note.c_message.length;
	}
	
});