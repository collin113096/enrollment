<div class="modal fade" id="adviser-{{ $loop->iteration }}">
	<div class="modal-dialog">
		<div class="modal-content bg-dark text-white">
			<div class="modal-header bg-dark text-white">
				<h3>Adviser Information</h3>
			</div>
			<div class="modal-body">
				@php
					$url = $adviser['photo'];
				@endphp
				<div class="form-group py-5">
					<div class="text-center">
						<img class="w-50 rounded-circle" src='{{ asset("storage/$url") }}'>
					</div>
				</div>

				<!-- ADVISER NAME -->
				<div class="form-row form-group">
					<label class="col-md-4 text-md-right col-form-label"><strong>Adviser Name</strong></label>
					<div class="col-md-6">
						<input class="bg-white form-control" type="text" name="last_name" value="{{ $adviser['last_name'] }}, {{ $adviser['first_name'] }} {{ $adviser['middle_name'] }}" disabled="">
					</div>
				</div>

				<!-- JOB TYPE -->
				<div class="form-row form-group">
					<label class="col-md-4 text-md-right col-form-label"><strong>Job Type</strong></label>
					<div class="col-md-6">
						<input class="bg-white form-control" type="text" name="job_type" value="{{ $adviser['job_type'] }}" disabled="">
					</div>
				</div>

				<!-- BIRTH DATE-->
				<div class="form-row form-group">
					<label class="col-md-4 text-md-right col-form-label"><strong>Birth Date</strong></label>
					<div class="col-md-6">
						<input class="bg-white form-control" type="date" name="birth_date" value="{{ $adviser['birth_date'] }}" disabled="">
					</div>
				</div>

				<!-- Date Registered-->
				<div class="form-row form-group">
					<label class="col-md-4 text-md-right col-form-label"><strong>Date Registered</strong></label>
					<div class="col-md-6">
						<input class="bg-white form-control" type="date" name="date_registered" value="{{ $adviser['date_registered'] }}" disabled="">
					</div>
				</div>

				<!-- Home Address-->
				<div class="form-row form-group">
					<label class="col-md-4 text-md-right col-form-label"><strong>Home Address</strong></label>
					<div class="col-md-6">
						<input class="bg-white form-control" type="text" name="home_address" value="{{ $adviser['home_address'] }}" disabled="">
					</div>
				</div>

				<!-- Email-->
				<div class="form-row form-group">
					<label class="col-md-4 text-md-right col-form-label"><strong>Email</strong></label>
					<div class="col-md-6">
						<input class="bg-white form-control" type="text" name="email" value="{{ $adviser['email'] }}" disabled="">
					</div>
				</div>

				<!-- Contact -->
				<div class="form-row form-group">
					<label class="col-md-4 text-md-right col-form-label"><strong>Contact</strong></label>
					<div class="col-md-6">
						<input class="bg-white form-control" type="number" name="contact" value="{{ $adviser['contact'] }}" disabled="">
					</div>
				</div>

			</div>

			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
