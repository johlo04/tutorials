 <h1>CONTROLLER</h1>
 <div class="row" ng-app="" ng-controller="personController">
	
	<div class="col-sm-6">
		
		<div class="form-group">
			<label class="col-md-3">First Name: </label>
			<input type="text" class="form-control" ng-model="m_firstname" />
		</div>
		
		<div class="form-group">
			<label class="col-md-3">Last Name: </label>
			<input type="text" class="form-control" ng-model="m_lastname" />
		</div>
		
		<div class="form-group">
			<p>Full Name: {{ m_firstname + ', ' + m_lastname }}
		</div>
		
	</div>
	
</div>
<script type="text/javascript">
	
	function personController($scope) {
		
		$scope.m_firstname = 'Rochelle';
		$scope.m_lastname = 'Canale';
		
	}
	
	angular.module('ng').config(function($controllerProvider){
		$controllerProvider.allowGlobals();
	});
	
	
</script>