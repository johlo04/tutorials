<h3>Forms</h3>
<div class="row">
	<div class="col-sm-6" ng-app="myApp" ng-controller="formCtrl">
		<form novalidate>
			
			<div class="row">
				<div class="form-group">
					<label class="col-md-3">First Name: </label>
					<input type="text" class="form-control input-sm" ng-model="user.firstname" />
				</div>
			</div>
			
			<div class="row">
				<div class="form-group">
					<label class="col-md-3">Last Name: </label>
					<input type="text" class="form-control input-sm" ng-model="user.lastname" />
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-12">
					<p>form = {{ user }}</p>
					<p>master = {{ master }}</p>
				</div>
			</div>
		
			<div class="row">
				<div class="form-group col-md-3">
					<button type="button" class="btn btn-default" ng-click="reset()">Reset</button>
				</div>
			</div>
		
			
		</form>
	</div>
</div>

<script type="text/javascript">
	
	var myApp = angular.module('myApp',[]);
	myApp.controller('formCtrl', function($scope) {

		$scope.master = {firstname: 'Rochelle', lastname: 'Canale'};
		
		$scope.reset = function() {
			$scope.user = angular.copy($scope.master);
		}
		
		$scope.reset();
		
	});
	
</script>