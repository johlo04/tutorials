 <h1>DOM</h1>
 <div class="row" ng-app="">
	
	<div class="col-sm-6">
	
		<h4>NG-DISABLED</h4>
	
		<div class="form-group">
			<button type="button" class="btn btn-primary" ng-disabled="mySwitch">Click Me</button>
		</div>
		
		<div class="form-group">
			<label><input type="checkbox" ng-model="mySwitch" /> Button</label>
		</div>
		
		<hr />
		
		<h4>NG-VISIBLE</h4>
		
		<div class="form-group">
			<p>VISIBLE: <span ng-show="true">I am visible</span></p>
			<p>NOT VISIBLE: <span ng-show="false">I am not visible</span></p>
		</div>
		
		<hr />
		
		<h4>NG-HIDE</h4>
		
		<div class="form-group">
			<p>NOT VISIBLE: <span ng-hide="true">I am not visible</span></p>
			<p>VISIBLE: <span ng-hide="false">I am visible</span></p>
		</div>
		
		<hr />
		
		<h4>NG-CLICK</h4>
		
		<div class="form-group">
			<button type="button" class="btn btn-primary" ng-click="count = count + 1">Click Me</button>
			<p>Increments: {{ count }}</p>
		</div>
		
		<hr />
		
		<h4>NG-CLICK (event)</h4>
		
		<div class="form-group" ng-controller="miscController">
			<button type="button" class="btn btn-primary" ng-click="toggle()">Click Me</button>
			<p ng-hide="toggler">Toggle HIDE</p>
		</div>
		
		<hr />
		
		<h4>WATCH</h4>
		
		<div class="form-group" ng-controller="watchCtrl">
			<input type="text" class="form-control" ng-model="greetname" placeholder="" />
			<p>{{ greeting }}</p>
		</div>
		
		<hr />
		
		
		
	</div>
 
 </div>
 
 <script type="text/javascript">
	
	function watchCtrl($scope) {
		
		$scope.greetname = '';
		
		$scope.$watch('greetname', function(newValue, oldValue) {
			
			if($scope.greetname.length > 0) {
				$scope.greeting = 'Greetings ' + $scope.greetname;
			}
			
		})
		
	}
	
	function miscController($scope) {
		
		$scope.toggler = false;
		$scope.toggle = function() {
			$scope.toggler = !$scope.toggler;
		}
		
	}
	
 </script>