<div class="row">
	<div ng-app="myApp" ng-controller="customersCtrl">
		<ul>
			<li ng-repeat="x in names">
				{{ x.Name + ', ' + x.Country }}
			</li>
		</ul>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url('/assets/common.js'); ?>"></script>