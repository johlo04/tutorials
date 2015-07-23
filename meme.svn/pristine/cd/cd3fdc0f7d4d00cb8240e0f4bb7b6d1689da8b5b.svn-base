<h3>Project List</h3>
<div class="row" ng-app="projectList">
	
	<div ng-controller="projectCtrl">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<td class="text-center"><label>ID</label></td>
						<td class="text-center"><label>PROJECT NAME</label></td>
						<td class="text-center"><label>DESCRIPTION</label></td>
						<td class="text-center"><label>DATE STARTED</label></td>
						<td class="text-center"><label>DATE DELIVERED</label></td>
						<td class="text-center"><label>STATUS</label></td>
						<td class="text-center"><label>ACTION</label></td>
					</tr>
				</thead>
				<?php if(count($results) > 0) { ?>
					<tbody>
						<?php foreach($results as $result) { ?>
							<tr>
								<td class="text-center"><?php echo $result['id']; ?></td>
								<td class="text-left"><?php echo $result['project_name']; ?></td>
								<td class="text-left"><?php echo $result['description']; ?></td>
								<td class="text-center"><?php echo date('Y-m-d H:i:s A', strtotime($result['date_started'])); ?></td>
								<td class="text-center"><?php echo date('Y-m-d H:i:s A', strtotime($result['date_delivered'])); ?></td>
								<td class="text-center"><?php echo $result['status']; ?></td>
								<td class="text-center">
									<a href="<?php echo site_url('tutorial/project_list/' . $result['id']); ?>" class="btn btn-default"><span class="fa fa-eye"></span></a>
									<button type="button" class="btn btn-default"><span class="fa fa-times"></span></button>
								</td>
							</tr>
						<?php } ?>
					</tbody>	
				<?php } else { ?>
					<tbody>
						<tr>
							<td colspan="7"><p>There are no projects saved!</p></td>
						</tr>
					</tbody>
				<?php } ?>
			</table>
		</div>
		
		<?php echo $links; ?>
	</div>

</div>
<script type="text/javascript">
	
	var myProject = angular.module('projectList', []);
	
	myProject.controller('projectCtrl', function($scope) {
		$scope.name = 'rochelle';
	});

</script>
