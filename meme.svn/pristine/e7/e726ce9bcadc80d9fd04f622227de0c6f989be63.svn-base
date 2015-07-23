<h2>Trigger Request</h2>
<div class="row" ng-app="myApp" ng-controller="articleCtrl">
	<div class="col-sm-12">
		<input type="text" class="form-control" ng-model="firstname" /><br />
		<input type="text" class="form-control" ng-model="lastname" /><br />
		<button type="button" class="btn btn-primary" ng-click="makeRequest()">Request</button>
		<br />
	</div>
	
	<div class="col-md-12">
		<p>Hello {{ firstname + ', ' + lastname }} </p>
	</div>
	
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<table class="table table-bordered" >
					<thead>
						<tr>
							<td>ID</td>
							<td>Title</td>
							<td>Body</td>
							<td>Created At</td>
							<td>Updated At</td>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="value in articles | orderBy: 'title'">
							<td>{{ value.id }}</td>
							<td>{{ value.title | uppercase }}</td>
							<td>{{ value.body }}</td>
							<td>{{ value.created_at }}</td>
							<td>{{ value.updated_at }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="well col-md-12">
			<json-formatter json="listView" open="0"></json-formatter>
		</div>
	</div>
</div>

<script type="text/javascript">
	
	var myRequest = angular.module('myApp', ['jsonFormatter']);
	
	myRequest.controller('articleCtrl', function($scope, $http) {
		$scope.firstname = 'Rochelle';
		$scope.lastname = 'Canale';
		
		$scope.makeRequest = function() {
			

			$http.get("<?php echo base_url('index.php/tutorial/getAjaxData'); ?>")
			.success(function(response) {		
				$scope.articles = response.article_data;
				$scope.listView = JSON.stringify(response.article_data);
			})
			.error(function(){
				alert('Error Occured!');
			});
			
			/*** PROMISE EXAMPLE ***/
			/*
			var promise = $http.get("<?php echo base_url('index.php/tutorial/getAjaxData'); ?>");
			
			promise.then(
				function(payload) {
					//console.log(payload.data.article_data);
					$scope.articles = payload.data.article_data;
					$scope.listView = JSON.stringify(payload.data.article_data);
				}
			);
			*/
			
		}
	});
	
</script>