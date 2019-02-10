<div class="card" id="card1">

	<!-- CARD HEADER -->
	<div class="card-header">
		Student Information
	</div>

	<!-- CARD BODY -->
	<div class="card-body">	

		<!-- LAST NAME -->
		<div class="form-group form-row mt-5">			
			<label class="col-md-4 text-md-right"><strong>Applicant Name</strong></label>			
			<div class="col-md-6">
				{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}
			</div>
		</div>

		<!-- HOME ADDRESS -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right"><strong>Home Address</strong></label>			
			<div class="col-md-6">
				{{ $student->home_address }}
			</div>
		</div>

		<!-- BIRTH DATE -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right"><strong>Birth Date</strong></label>			
			<div class="col-md-6">
				{{ $student->birth_date }}
			</div>
		</div>

		<!-- BIRTH PLACE -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right"><strong>Birth Place</strong></label>			
			<div class="col-md-6">
				{{ $student->birth_place }}
			</div>
		</div>

		<!-- RELIGION -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right"><strong>Religion</strong></label>			
			<div class="col-md-6">
				{{ $student->religion }}
			</div>
		</div>

		<!-- GENDER -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right"><strong>Gender</strong></label>			
			<div class="col-md-6">
				{{ $student->gender }}
			</div>
		</div>

		<!-- GRADE -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right "><strong>Grade</strong></label>			
				<div class="col-md-6">
					{{ $student->grade->name }}
				</div>
		</div>

		<div class="mt-5 d-flex justify-content-end">				
			<div class="btn btn-primary" id="card1-button">Parent Information <i class="fas fa-arrow-right mx-2"></i></div>
		</div>
	
	<!-- END OF CARD BODY -->
	</div>

<!-- END OF CARD -->
</div>
