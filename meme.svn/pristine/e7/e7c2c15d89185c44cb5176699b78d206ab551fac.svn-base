<h3>Company List</h3>
<div ng-app="tableApp">
	<div class="row" ng-controller="TableCtrl">
		<div class="col-sm-6">
			
			<div class="well">
				
				<form ng-submit="addRow()" role="form" name="tableRow" novalidate>
					<div class="form-group">
						<label>Name: </label>
						<input type="text" name="name" ng-model="name" class="form-control" required ng-minlength="10" ng-maxlength="20" />
						<div ng-show="tableRow.name.$dirty && tableRow.name.$invalid">
							<p ng-show="tableRow.name.$error.required">Name is required</p>
						</div>
					</div>
					
					<div class="form-group">
						<label>Number of employee: </label>
						<input type="text" name="employees" ng-model="employees" class="form-control" required />
						
					</div>
					
					<div class="form-group">
						<label>Head Office: </label>
						<input type="text" name="headoffice" ng-model="headoffice" class="form-control" required />
					</div>
					
					<div class="form-group text-right">
						<input type="submit" class="btn btn-primary" value="Add Company" />
					</div>
				</form>
				
			</div>
			
		</div>
		<div class="col-sm-6">
			
			<div class="table-responsive">
				<table class="table table-bordered table-hovered table-striped">
					<thead>
						<tr>
							<td class="left">Name</td>
							<td class="left">Number of employee</td>
							<td class="left">Head Office</td>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="value in companies">
							<td>{{ value.name }}</td>
							<td>{{ value.employees }}</td>
							<td>{{ value.headoffice }}</td>	
						</tr>
					</tbody>
				</table>
			</div>
		
		</div>
	</div>
	
	<script type="text/javascript">
				
		var app = angular.module('tableApp',[]);
				
		app.controller('TableCtrl', function($scope) {
				
			$scope.companies = [
				{'name':'Infosys Technologies','employees': 125000,'headoffice': 'Bangalore'},
				{'name':'Cognizant Technologies', 'employees': 100000, 'headoffice': 'Bangalore'},
				{'name':'Wipro', 'employees': 115000, 'headoffice': 'Bangalore'},
				{'name':'Tata Consultancy Services (TCS)', 'employees': 150000, 'headoffice': 'Bangalore'},
				{'name':'HCL Technologies', 'employees': 90000, 'headoffice': 'Noida'},
			];	
				
			$scope.addRow = function() {
				$scope.companies.push({'name': $scope.name, 'employees': $scope.employees, 'headoffice': $scope.headoffice});
				$scope.name = '';
				$scope.employees = '';
				$scope.headoffice = '';
			}	
				
		});		
	
	</script>
	
</div>