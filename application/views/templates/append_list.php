<h3>Sample Quote</h3>

<div class="row" ng-app="product_list">
	<div class="table-responsive" ng-controller="productList">
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
					<td class="text-center">ID</td>
					<td class="text-left">Product Name</td>
					<td class="text-left">Quantity</td>
					<td class="text-left">Price</td>
					<td class="text-left">Subtotal</td>
					<td class="text-center">
						<button type="button" class="btn btn-default" ng-click="addNewRow()">Add Row</button>
						<button type="button" class="btn btn-default" ng-click="checkObject()">Check Object</button>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="item in product.items">
					<td class="text-center">{{ $index + 1 }}</td>
					<td class="text-left">
						<input type="text" ng-model="item.product_name" class="form-control" />
					</td>
					<td class="text-center">
						<input type="number" ng-model="item.quantity" class="form-control text-center" />
					</td>
					<td class="text-right">
						<input type="number" ng-model="item.price" class="form-control text-right" />
					</td>
					<td class="text-right">{{ item.price * item.quantity | currency: '₱ '}}</td>
					<td class="text-center">
						<button type="button" class="btn btn-danger" ng-click="removeRow($index)"><span class="fa fa-times"></span></button>
					</td>
				</td>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="5"></td>
					<td colspan="1" class="text-left">
						<label>Subtotal: </label>
						<input type="text" class="form-control text-right" value="{{ total() | currency: '₱ ' }}" readonly />
					</td>
				</tr>
			</tfoot>
		</table>
		
		<div class="well">
			<p>Object:</p>
			<textarea class="form-control" ng-model="json_view" readonly></textarea>
		</div>
		
	</div>
</div>

<script type="text/javascript">
	
	var appList = angular.module('product_list', []);
	
	appList.controller('productList', function($scope){
		
		$scope.product = {
			items: [
			{
				product_name: 'Test name 1',
				quantity: 5,
				price: 99.9,
			}
			]
		};
		
		$scope.addNewRow = function() {
				
			$scope.product.items.push({
				product_name: '',
				quantity: 1,
				price: 1.00
			});
			
			
		}
		
		$scope.checkObject = function() {
			$scope.json_view = JSON.stringify($scope.product.items);
		}
		
		$scope.removeRow = function(index) {
			$scope.product.items.splice(index, 1);
		}
		
		$scope.total = function() {
			
			var total = 0.00;

			angular.forEach($scope.product.items, function(item){
				total += item.quantity * item.price
			});

			return total;
			
		}
		
	});
	
</script>