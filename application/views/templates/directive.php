<h3>Directive</h3>

<div class="row" ng-app="myApp">
	<div class="col-sm-6" ng-controller="MyCtrl">
		
		<div class="row">
			<h4>Sample directive</h4>
			<div data-hello-world></div>
		</div>
		
		<div class="row">
			<h4>Sample directive with link</h4>
			<p>Type color name: </p>
			<input type="text" class="form-control" ng-model="color" />
			<div data-input-test></div>
		</div>
		
	</div>
</div>

<script type="text/javascript">
	
	var myApp = angular.module('myApp',[]);
	
	myApp.controller('MyCtrl', function($scope) {
		$scope.name = 'World'; 
	});
	
	myApp.directive('helloWorld', function() {
		return {
			replace: true,
			restrice: 'AE',
			template: '<h5>HELLO WORLD</h5>'
		}
	});
	
	myApp.directive('inputTest', function() {
		return {
			restrict: 'AE',
			replace: true,
			template: '<p style="background-color: {{ color }}; margin-top: 10px">TEST</p>',
			link: function(scope, elem, attrs) {
				
				elem.bind('click', function() {
					elem.css('background-color: ', '#ffffff');
					scope.$apply(function(){
						scope.color = '#ffffff';
					});
				});
				
				elem.bind('mouseover', function() {
					elem.css('cursor', 'pointer');
				});
				
			}
		}
	})
	
</script>
