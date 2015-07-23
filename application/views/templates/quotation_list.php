<h3>Quotation List Form</h3>

<style>
	.table-nonfluid {
	   width: 60% !important;
	}
</style>

<div class="row" ng-app="quotation_list">
		
	<div class="col-md-12" ng-controller="quoteListCtrl as quotelist">
		
		<!- validate inputs w/o form tag -->
		<ng-form name="quotation_header">

			<div class="row">
				
				<div class="col-md-12">
					
						<div class="table-responsived">
							
							<p>Fields that are marked with (*) are required</p>

							<table class="table table-bordered">
								<tr>
									<td class="text-right"><label>* To: </label></td>
									<td>
										<div class="form-group" ng-class="{'has-error has-feedback': quotation_header.receiver.$invalid && quotation_header.receiver.$dirty}">
											<input type="text" name="receiver" class="form-control" ng-model="quotelist.receiver" required />
											<span ng-show="quotation_header.receiver.$dirty && quotation_header.receiver.$invalid">
												<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
												<span class="help-block error" ng-show="quotation_header.receiver.$invalid">Receiver is required</span>
											</span>
										</div>
									</td>
									<td class="text-right"><label>* Reference No: </label></td>
									<td>
										<div class="form-group" ng-class="{'has-error has-feedback': quotation_header.reference_no.$invalid && quotation_header.reference_no.$dirty}">
											<input type="text" name="reference_no" class="form-control text-right" ng-model="quotelist.reference_no" required />
											<span ng-show="quotation_header.reference_no.$dirty && quotation_header.reference_no.$invalid">
												<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
												<span class="help-block error" ng-show="quotation_header.reference_no.$invalid">Reference No. is required</span>
											</span>
										</div>
									</td>
								</tr>

								<tr>
									<td class="text-right"><label>Address: </label></td>
									<td>
										<textarea class="form-control" ng-model="quotelist.address"></textarea>
									</td>
									<td class="text-right"><label>* Date: </label></td>
									<td>
										<div class="form-group" ng-class="{'has-error has-feedback': quotation_header.date_started.$invalid && quotation_header.date_started.$dirty}">
											<p class="input-group">
												<input type="text" class="form-control" name="date_started" cs-date-to-iso datepicker-popup="yyyy-MM-dd" ng-model="quotelist.dt" is-open="opened" min-date="minDate" placeholder="yyyy-mm-dd" readonly />
												<span class="input-group-btn">
													<button type="button" class="btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
												</span>
												<div ng-show="quotation_header.date_started.$dirty && quotation_header.date_started.$invalid">
													<span class="help-block error" ng-show="quotation_header.date_started.$invalid">Project Date is required</span>
												</div>
												<!--<div class="well" ng-bind="quotelist.dt"></div>-->
											</p>
										</div>
										
									</td>
								</tr>

								<tr>
									<td class="text-right"><label>* Project Name: </label></td>
									<td colspan="4">
										<div class="form-group" ng-class="{'has-error has-feedback': quotation_header.project_name.$invalid && quotation_header.project_name.$dirty}">
											<input type="text" name="project_name" class="form-control input-sm" ng-model="quotelist.project_name" required />
											<span ng-show="quotation_header.project_name.$dirty && quotation_header.project_name.$invalid">
												<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
												<span class="help-block error" ng-show="quotation_header.project_name.$invalid">Project Name is required</span>
											</span>
										</div>
									</td>
								</tr>

							</table>

						</div>

					<p class="note">We are pleased to submit herewith our quotaion for the following:</p>
			
				</div>

			</div>
				
			<section ng-controller="PanelController as panel">

				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-pills">
							<li ng-class="{ active:panel.isSelected(1) }">
								<a href="#" ng-click="panel.selectTab(1)">Quotation Form</a>
							</li>
							<li ng-class="{ active:panel.isSelected(2) }">
								<a href="#" ng-click="panel.selectTab(2)">Terms & Condition</a>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="panel pane-default" ng-show="panel.isSelected(1)">
					
					<div class="row">
						<div class="col-md-12 text-right">
							<div class="form-group">
								<button type="button" class="btn btn-primary" ng-click="addParticularHeader()" ng-disabled="quotation_header.$invalid"><span class="fa fa-plus"></span> Add Particular Header</button>
								<button type="button" class="btn btn-success" ng-hide="!hasContent()" ng-click="saveContent()">Save Quotation</button>
							</div>
						</div>
					</div>

					<!-- quotation json viewer
					<div class="well dark">
						<json-formatter json="json_output" open="1" class="json-formatter-dark"></json-formatter>
					</div>
					
					<div class="well">{{ json_view }}</div>
					-->
					
					<div ng-repeat="item in quoteHeader.items" class="row">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="fa fa-pencil pull-left"></div> <input type="text" data-toggle="tooltip" title="Click to edit" ng-model="item.particular_name" class="pull-left quotation_header" /> <span class="pull-right btn btn-danger" ng-click="removeQuoteHeader($index)"><span class="fa fa-times"></span> Remove</span>
								<div class="clearfix"></div>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered table-hover table-striped">
										<thead>
											<tr>
												<td class="text-center"><label>No.</label></td>
												<td class="text-center"><label>Particulars</label></td>
												<td class="text-center"><label>Unit</label></td>
												<td class="text-center"><label>Unit Label</label></td>
												<td class="text-center"><label>Unit(Price)</label></td>
												<td class="text-center"><label>Unit Price(Php)</label></td>
												<td class="text-center"></td>
											</tr>
										</thead>
										<tbody ng-hide="toggleList">
											<tr ng-repeat="item in quoteHeader.items[$index].child_label.items">
												<td class="text-center">{{ $index + 1 }}</td>
												<td class="text-center">
													<input type="text" name="quotation[$parent.$index][$index][particular]" class="form-control" ng-model="item.particular" />
												</td>
												<td class="text-center">
													<input type="number" name="quotation[$parent.$index][$index][unit]" class="form-control text-center" ng-model="item.unit" ng-minlength="1" min="1" />
												</td>
												<td class="text-center">
													<select class="form-control" name="quotation[$parent.$index][$index][unit_label]" ng-model="item.unit_label">
														<option value="sqm">sqm</option>
														<option value="lot">lot</option>
														<option value="sets">sets</option>
													</select>
												</td>
												<td class="text-center">
													<input type="number" name="quotation[$parent.$index][$index][unit_price]" class="form-control text-right" ng-model="item.unit_price" />
												</td>
												<td class="text-center">
													<input type="text" class="form-control text-right" value="{{ item.unit * item.unit_price | currency: '₱ ' }}" readonly />
													<input type="hidden" name="quotation[$parent.$index][$index][subtotal]" ng-model="item.subtotal" value="{{ item.unit * item.unit_price }}" />
												</td>
												<td class="text-center">
													<!--
													<button type="button" class="btn btn-primary" ng-click="addSubLevel($parent.$index)"><span class="fa fa-plus"></span></button>
													-->
													<button type="button" class="btn btn-danger" ng-click="removeParent($parent.$index, $index)"><span class="fa fa-times"></span></button>
												</td>
											</tr>
											
											<tr>
												<td colspan="7" class="text-center" ng-show="!quoteHeader.items[$index].child_label.items.length">
													<p><i class="fa fa-exclamation-circle"></i> No list yet!</p>
												</td>
											</tr>

										</tbody>
										<tfoot>
											<tr>
												<td colspan="6" class="text-center">
													<button type="button" class="btn btn-primary" ng-click="addParent($index)"><span class="fa fa-plus"></span> Add Particular</button>
												</td>
												<td class="subtotal text-right">
													<label>Subtotal: <span>{{ subTotal($index) | currency: '₱ ' }}</span></label>
												</td>
											</tr>
											<tr>
												<td colspan="7">
													<div class="form-group">
														<label>Note:</label>
														<textarea class="form-control" ng-model="item.note" placeholder="Leave note here"></textarea>
													</div>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row text-center" ng-show="!quoteHeader.items.length">
						<div class="panel panel-default">
							<div class="panel-body">
								<p><i class="fa fa-exclamation-circle"></i> No particulars yet!</p>
							</div>
						</div>
					</div>
					
					<div class="pull-right">
						<div class="row">
							<div class="form-group">
								<label>Total Amount: </label>
								<input type="text" class="form-control text-right" value="{{ grandTotal() | currency: '₱ ' }}" readonly />
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label>Set(%): </label>
								<input type="number" class="form-control text-right" ng-model="quotelist.vat_rate" />
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label>VAT <span ng-bind="quotelist.vat_rate"></span> %: </label>
								<input type="text" class="form-control text-right" value="{{ vat_rate_amount() | currency: '₱ ' }}" readonly />
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label>TOTAL PROJECT COST (VAT INCLUSIVE): </label>
								<input type="text" class="form-control text-right" value="{{ quotelist.computePercentage() | currency: '₱ ' }}" readonly />
							</div>
						</div>
						<!-- 
						<div class="row">
							<div class="form-group">
								<button type="button" class="btn btn-default" ng-click="quotelist.computePercentage()">COMPUTE PERCENTAGE VALUE</button>
							</div>
						</div> 
						-->
					</div>

					<div class="clearfix"></div>

				</div>

				<div class="panel" ng-show="panel.isSelected(2)" style="min-height: 100px; padding: 10px;">
					<div ckeditor="options" ng-model="quotelist.content" ready="onReady()"></div>
				
					<div class="well" ng-bind="quotelist.content"></div>
					
				</div>

			</section>

		</ng-form>


	</div>
		
</div>
<script type="text/javascript">

	//CALL OUR MODULE AND LOAD SOME MODULES
	var quotationList = angular.module('quotation_list', ['jsonFormatter','ui.bootstrap','ckeditor']);

	quotationList.controller('quoteListCtrl', function($scope, $http) {

		var quoteList = this;

		$scope.quoteHeader = {};
		
		$scope.quoteHeader = {
			items: []
		}
		
		//THIS WILL DISPLAY THE ARRAYS IN JSON OBJECT FORMAT
		$scope.json_output = angular.fromJson($scope.quoteHeader); //display formatted json view
		$scope.json_view = angular.fromJson($scope.quoteHeader); //display raw json view
		
		//INITILIZE VALUE FOR PARENT PARTICULAR
		$scope.addParticularHeader = function() {
			
			$scope.quoteHeader.items.push({
				particular_name: 'SAMPLE PARTICULAR TITLE',
				child_label: {
					items: []
				}
			});
			
		}
		
		$scope.removeQuoteHeader = function($index) {
			$scope.quoteHeader.items.splice($index, 1);
		}
		
		//INITILIZE VALE AFTER APPENDING NEW ROW
		$scope.addParent = function($index) {
			
			//here we will append the new row
			
			$scope.quoteHeader.items[$index].child_label.items.push({
				particular: 'Sample Particular Name',
				unit: 1,
				unit_label: 'sqm',
				unit_price: 0.00,
				subtotal: 0.00,
				sublevel: {
					items: []
				}
			}); 
			
		}
		
		//REMOVE SUB PARENT
		$scope.removeParent = function(parent_id, $index) {
			$scope.quoteHeader.items[parent_id].child_label.items.splice($index, 1);
		}
		
		$scope.addSubLevel = function(parent_id) {
			//console.log(parent_id);
		}
		
		$scope.grand_total = [];
		
		//COMPUTE SUBTOTAL PER ARRAY
		$scope.subTotal = function($index) {
			
			var total = 0;
			
			angular.forEach($scope.quoteHeader.items[$index], function(value){
				
				angular.forEach(value.items, function(v) {
					total += v.unit * v.unit_price;
				});
				
			});
			
			$scope.grand_total[$index] = total
			
			return total;
			
		}
		
		//SUMMARIZE ALL SUBTOTAL
		function computeGrandTotal() {
			
			var total = 0;

			//console.log($scope.grand_total);
			
			angular.forEach($scope.grand_total, function(value) {
				total += value;
			});
			
			return total;
			
		}
		
		$scope.grandTotal = function() {
			return computeGrandTotal();
		}

		quoteList.vat_rate = 0;

		quoteList.computePercentage = function() {
			
			var grandtotal = 0;

			var formatPercentage = quoteList.vat_rate / 100;
			var total_amount = computeGrandTotal() * formatPercentage;
			
			grandtotal = computeGrandTotal() + total_amount;

			return grandtotal;

		}

		function computeVatRateAmount() {
			var total_amount = 0;

			var formatPercentage = quoteList.vat_rate / 100;
			var total_amount = computeGrandTotal() * formatPercentage;

			return total_amount;
		}

		$scope.vat_rate_amount = function() {

			return computeVatRateAmount();

		}

		//pass to function for saving - can't access quoteList.computePercentage
		function computePercentage() {

			var grandtotal = 0;

			var formatPercentage = quoteList.vat_rate / 100;
			var total_amount = computeGrandTotal() * formatPercentage;
			
			grandtotal = computeGrandTotal() + total_amount;

			return grandtotal;

		}
		
		$scope.toggleList = false;
		
		$scope.toggleDetail = function($index) {
			$scope.toggler = !$scope.toggler;
		}
		
		//VALIDATE IF THERE'S A VALUES
		$scope.hasContent = function() {
			
			return $scope.quoteHeader.items.length > 0 ? true : false
			
		}
		
		//SAVE OUR DATA
		$scope.saveContent = function() {

			$scope.totals = [{
				'subtotals'	: computeGrandTotal(),
				'vat_rate'	: quoteList.vat_rate,
				'grandtotal': computePercentage()
			}];

			$http({
				url: "<?php echo base_url('index.php/tutorial/submitQuotation'); ?>",
				method: 'POST',
				data: $.param({ 
						quotation: $scope.quoteHeader.items, 
						msc: quoteList, 
						totals: $scope.totals 
					}),
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			}).success(function(data){
				alert('Data successfully inserted!');
			}).error(function(){
				alert('Error Occured!');
			});

		}

		//CKEDITOR OPTIONS
		$scope.options = {
			language: 'en',
			allowedContent: true,
			entities: false,
		};

		// Called when the editor is completely ready.
		$scope.onReady = function () {
			// ... test
		};
		
  		//CKEDITOR init value sample template
  		quoteList.content = '<h4><strong><u>TERMS &amp; CONDITION</u></strong></h4> <hr /> <ol> <li>Payment: <ul> <li>50% DP Upon Confimation/Purchase Order</li> <li>40% Upon Initial presentation</li> <li>10% Upon completion of the project</li> </ul> </li> <li>Down payment is non-refundable</li> <li>All prices are subject to change without prior notice</li> <li>Area shall be turned over to us for the construction free and clear of any debris and/or builder\'s material and rubble as well as machiner and equipment and shall be generally clean.</li> <li>Water, electricityand lighting (if necessary) shall be provided to the site (areas to be painted) free of charge.</li> <li>Secure and safe warehousing for our material shall be provided at the construction free of charge.</li> <li>At our election we shall be allowed to work overtime</li> <li>We shall not be responsible and no way liable for any delays caused by the General Contstructor, any sub or other contractor and/or owner during, before and after the exceution f waterproofing and/or other unsound structures, force majeur, natural calamities, fire or other casualty or physical damage.</li> <li>Application period shall be agreed upon</li> <li>Please make all payments payable to <u><strong>FLAX INC.</strong></u></li> <li>Processing fees for <u><strong>PERMITS ARE NOT INCLUDED</strong></u></li> </ol> <p>We hope that our recommendations meet your favorable approval. If so, please affix your signature in the conforme. The Signed Conforme shall also server as out contruct for this project,</p> <p>Should you have further inquiry, please feel free to callus and we will be glad to discuss the proposals with you personally.</p> <p>&nbsp;</p> <p>Prepared By:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme:</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>EVA B. BRILLANTES</p> <p>Sr. Accounts &amp; Admin. Manager</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>Noted &amp; Approved By:</p> <p>&nbsp;</p> <p>KORO FUJIWARA</p> <p>Creative Director</p> <hr /> <p><span style="font-size:11px;"><span style="line-height: 1;">FLAX INC. (Philippines) Units 407 &amp; 409 Mile Long Building Amorsolo Street, Legaspi Village , Makati City</span></span></p> <p><span style="font-size:11px;"><span style="line-height: 1;">Tel: +632-553-3320 Fax: +632-550-1519 Email: info@flax.ph</span></span></p> <p><span style="font-size:11px;"><span style="line-height: 1;">FLAX LTD. (Hong Kong) Flat A16, 24 /F, Kwan Yick Bldg. Phase III, 271-285 Des Voeux Rd. West, Hong Kong</span></span></p> <p><span style="font-size:11px;"><span style="line-height: 1;">Tel &amp; Fax: +852 3626 2879 Email: info@flax.hk</span></span></p>';
		
  		/** DATEPICKER OPTIONS **/
		$scope.today = function() {
			quoteList.dt = '';
		};

		$scope.today();

		$scope.toggleMin = function() {
			$scope.minDate = $scope.minDate ? null : new Date();
		};

			$scope.toggleMin();

		$scope.clear = function () {
			$scope.dt = null;
		};

		$scope.open = function($event) {
			$event.preventDefault();
			$event.stopPropagation();

			$scope.opened = true;
		};
 

	});

	quotationList.directive('csDateToIso', function () {

	    var linkFunction = function (scope, element, attrs, ngModelCtrl) {

	        ngModelCtrl.$parsers.push(function (datepickerValue) {
	            return moment(datepickerValue).format('YYYY-MM-DD');
	        });
	    };

	    return {
	        restrict: 'A',
	        require: 'ngModel',
	        link: linkFunction
	    };
	});

	quotationList.controller('PanelController', function() {
		//TABS
		this.tab = 1;

		this.selectTab = function(setTab) {
			this.tab = setTab;
		}

		this.isSelected = function(checkTab) {
			//console.log(this.tab === checkTab);
			return this.tab === checkTab;
		}

	});

</script>