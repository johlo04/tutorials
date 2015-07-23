<h3>Note List</h3>
<div ng-app="modalApp">
	<div class="row">
		<div class="col-sm-12" ng-controller="ModalCtrl">
			
			<div class="form-group">
				<button type="button" class="btn btn-default" ng-click="toggleModal()">Show Modal</button>
			</div>
		
			
		</div>
	</div>
</div>
<script type="text/javascript">

	var modalApp = angular.module('modalApp');
	
	modalApp.controller('ModalCtrl', function($scope) {
		
	})
	modal.directive('modalShow', function($parse) {
		
		return {
			restrict: 'A',
			link: function (scope, element, attrs) {
				
				scope.showModal = function() {
					
				}
				
			}
		}
		
	});

</script>