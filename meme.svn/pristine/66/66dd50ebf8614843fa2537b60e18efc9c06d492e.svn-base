<h3>Form Validate</h3>

<div class="row">
	<div class="col-sm-6">
		<form ng-app="myForm" action="<?php echo base_url(); ?>" method="POST" ng-controller="validateCtrl" name="myForm" novalidate>
			
			<div class="row">
				<div class="form-group">
					<label class="col-md-3">Username: </label>
					<input type="text" class="form-control" name="username" ng-model="username" required />
					<span style="color: red" ng-show="myForm.username.$dirty && myForm.username.$invalid" class="col-md-12">
						<span ng-show="myForm.username.$error.required">Username is required!</span>
					</span>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group">
					<label class="col-md-3">Email: </label>
					<input type="email" class="form-control" name="email" ng-model="email" required />
					<span style="color: red" ng-show="myForm.email.$dirty && myForm.email.$invalid" class="col-md-12">
						<span ng-show="myForm.email.$error.required">Email is required!</span>
						<span ng-show="myForm.email.$error.email">Email is not valid!</span>
					</span>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-12">
					<input type="submit" class="btn btn-primary" value="Send" ng-disabled="myForm.username.$dirty && myForm.username.$invalid || myForm.email.$dirty && myForm.email.$invalid" />
				</div>
			</div>
			
		</form>
	</div>
</div>

<script type="text/javascript">
	
	var myApp = angular.module('myForm',[]);

	myApp.controller('validateCtrl', function($scope) {
		$scope.username = 'symfony';
		$scope.email = 'rochellecanale11@gmail.com'
	});
	
	
</script>