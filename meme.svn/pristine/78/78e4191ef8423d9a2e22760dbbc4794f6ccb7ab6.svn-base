<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/ngDialog-master/css/myth/ngDialog.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/ngDialog-master/css/myth/ngDialog-theme-default.css'); ?>" />
<script type="text/javascript" src="<?php echo base_url('assets/ngDialog-master/js/ngDialog.min.js'); ?>"></script>
<h3>Note List</h3>
<div ng-app="sampleApp">
	<div class="row">
		<div class="col-sm-12" ng-controller="MainCtrl">
			
			<div class="table-responsive">
				<table class="table table-bordered table-hovered table-striped">
					<thead>
						<tr>
							<td class="text-center">ID</td>
							<td class="text-center">Writer</td>
							<td class="text-center">Subject</td>
							<td class="text-center">Message</td>
							<td class="text-center">
								<button class="btn btn-primary btn-xs" ng-click="open('md')">Add Note</button>
							</td>
						</tr>
					</thead>
					<tbody>
						<?php if(count($note_list) > 0) { ?>
							
					
							<?php foreach($note_list as $list) { ?>
								<tr id="list-row-<?php echo $list['id']; ?>">
									<td class="text-center"><?php echo $list['id']; ?></td>
									<td class="text-left"><?php echo $list['writer']; ?></td>
									<td class="text-left"><?php echo $list['subject']; ?></td>
									<td class="text-left"><?php echo $list['message']; ?></td>
									<td class="text-center">
										<button type="button" class="btn btn-default btn-xs">Update</button>
										<button type="button" class="btn btn-danger btn-xs">Remove</button>
									</td>
								</tr>
							<?php } ?>
							
							
						<?php } else { ?>
							<tr>
								<td colspan="5">
									<p class="text-center text-danger">No note saved yet</p>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			
			<div class="row">
				<div ng-init="firstName='Rochelle'; lastName='Canale'">
					<p>Hello <span ng-bind="firstName"></span></p>
				</div>
			</div>
			
		</div>
		
		<script type="text/ng-template" id="myModalContent">
		
			<div ng-form="noteForm" ng-controller="NoteCtrl">
		
				<div class="modal-header">
					<h3 class="modal-title">Add New Note</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12" ng-class="{'has-error': noteForm.c_subject.$invalid && noteForm.c_subject.$touched, 'has-success': !noteForm.c_subject.$invalid }">
							<label class="control-label">Subject</label>
							<input type="text" name="c_subject" class="form-control" required ng-model="note.c_subject" ng-minlength="10" />
							<span style="color: red" ng-show="noteForm.c_subject.$dirty && noteForm.c_subject.$invalid">
								<span ng-show="noteForm.c_subject.$error.required">Subject is required!</span>
								<span ng-show="noteForm.c_subject.$error.minlength">Subject is should be less than 11 characters!</span>
							</span>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group col-md-12" ng-class="{'has-error': noteForm.c_sender.$invalid && noteForm.c_sender.$touched, 'has-success': !noteForm.c_sender.$invalid }">
							<label class="control-label">Sender</label>
							<input type="text" class="form-control" name="c_sender" ng-model="note.c_sender" ng-minlength="11" required />
							<span style="color: red" ng-show="noteForm.c_sender.$dirty && noteForm.c_sender.$invalid">
								<span ng-show="noteForm.c_sender.$error.required">Sender is required!</span>
							</span>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group col-md-12" ng-class="{'has-error': noteForm.c_message.$invalid && noteForm.c_message.$touched, 'has-success': !noteForm.c_message.$invalid }">
							<label class="control-label">Message</label>
							<textarea class="form-control" name="c_message" ng-model="note.c_message" ng-minlength="10" required></textarea>
							<span style="color: red" ng-show="noteForm.c_message.$dirty && noteForm.c_message.$invalid">
								<span ng-show="noteForm.c_message.$error.required">Message is required!</span>
								<span ng-show="noteForm.c_message.$error.minlength">Message is should be less than 10 character!</span>
							</span>
							<p class="text-left">Number of characters left: <span ng-bind="word_count()">100</span></p>
						</div>
					</div>
				   
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary btn-sm" ng-disabled="noteForm.$invalid" ng-click="sendForm()">OK</button>
					<button class="btn btn-warning btn-sm" ng-click="cancel()">Close</button>
				</div>
			
			</div>
			
		</script>
		
	</div>	
	
</div>

<div class="notification"></div>

<script type="text/javascript" src="<?php echo base_url('assets/app/controllers/modalCtrl.js'); ?>"></script>
<script type="text/javascript">

	sampleApp.controller('NoteCtrl', function($scope, $http) {
		
		$scope.sendForm = function () {
			
			//console.log($scope.note); //ajax process
			var note_data = $.param({
				'subject': $scope.note.c_subject,
				'message': $scope.note.c_message,
				'sender': $scope.note.c_sender
			});
			
			$http.post("<?php echo base_url('index.php/tutorial/getNoteData'); ?>", note_data, {headers : {'Content-Type': 'application/x-www-form-urlencoded'}})
			.success(function(data, response){
				//location.reload();
				
				$('.notification').text('hello');
				
			})
			.error(function(){
				alert('error');
			});
			
			
			/*
			$http({
				url: "<?php echo base_url('index.php/tutorial/getNoteData'); ?>",
				data: {
					firstname: 'rochelle'
				},
				method: 'POST',
				headers: {'Content-Type':'application/x-www-form-urlencoded'} // set the headers so angular passing info as form data (not request payload)
			})
			.then(function(response){
				console.log(response);
			}),
			(function(response){
				alert('oops error!');
			});
			*/
			
		}
		
	});
	
</script>