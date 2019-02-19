<div class="modal fade" id="adviser-{{ $loop->iteration }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Adviser Information</h3>
			</div>
			<div class="modal-body">
				<div>
					
				</div>
				<div class="form-group">
					<strong>Adviser Name</strong>
					<div class="border-bottom">
					{{ $adviser['last_name'] }},
					{{ $adviser['first_name'] }}
					{{ $adviser['middle_name'] }}
					</div>
				</div>

				<div class="form-group">
					<strong>Job Type</strong>
					<div class="border-bottom">
					{{ $adviser['job_type'] }}
					</div>
				</div>

				<div class="form-group">
					<strong>Birth Date</strong>
					<div class="border-bottom">
					{{ date('M j,Y', strtotime($adviser['birth_date'])) }}
					</div>
				</div>

				<div class="form-group">
					<strong>Date Registered</strong>
					<div class="border-bottom">
					{{ date('M j,Y', strtotime($adviser['date_registered'])) }}
					</div>
				</div>

				<div class="form-group">
					<strong>Home Address</strong>
					<div class="border-bottom">
					{{ $adviser['home_address'] }}
					</div>
				</div>

				<div class="form-group">
					<strong>Email</strong>
					<div class="border-bottom">
					{{ $adviser['email'] }}
					</div>
				</div>

				<div class="form-group">
					<strong>Contact</strong>
					<div class="border-bottom">
					{{ $adviser['contact'] }}
					</div>
				</div>

			</div>

			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
