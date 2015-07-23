<h2>Promise Call</h2>
<div ng-app="promiseCall">
	
	<div ng-controller="promiseCtrl">
	
		<button tyle="button" class="btn btn-default" ng-click="promiseCallRequest()">Promise Call</button>
	
		<table class="table table-bordered table-hovered">
			<thead>
				<tr>
					<td class="text-center"><label>ID</label></td>
					<td class="text-center"><label>TITLE</label></td>
					<td class="text-center"><label>BODY</label></td>
					<td class="text-center"><label>CREATED AT</label></td>
					<td class="text-center"><label>UPDATED AT</label></td>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="item in noteListing" class="">
					<td>{{ item.id }}</td>
					<td>{{ item.title }}</td>
					<td>{{ item.body }}</td>
					<td>{{ item.created_at }}</td>
					<td>{{ item.updated_at }}</td>
				</tr>
			</tbody>
	
		</table>
		
		<div class="text-center" ng-show="loader">
			<span class="fa fa-spinner fa-spin fa-3x"></span>
		</div>

	</div>

</div>
<script type="text/javascript">
	
	angular.module('promiseCall',['ngResource'])
	.controller('promiseCtrl', function($scope, $log, noteData) {
		
		$scope.promiseCallRequest = function() {
			
			var getPromiseCallData = noteData.getNoteData();
			
			$scope.loader = true; //load first
					
			//other way shorter method
			getPromiseCallData.then(function(payload){
				console.log(payload);
				$scope.noteListing = payload.data.article_data;
			}).catch(function(errorPayload){
				$log.error('Failure on request note.', errorPayload);
			}).finally(function(){
				$scope.loader = false; //access whether success or failed
			});
				
		}
		
	})
	.factory('noteData', function($http, $log, $q) {
		return {
			getNoteData: function() {
				return $http.get("<?php echo site_url('tutorial/getAjaxData'); ?>");
			}
		}
	});
	
</script>