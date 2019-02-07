<div class="card" id="card1">

	<!-- CARD HEADER -->
	<div class="card-header">
		Application Form for Enrollment
	</div>

	<!-- CARD BODY -->
	<div class="card-body">	

		<!-- STUDENT INFORMATION HEADER -->
		<div class="form-group">			
			<div class="col-md-6 offset-md-4 text-center font-weight-bold">Student Information</div>
		</div>

		<!-- LAST NAME -->
		<div class="form-group form-row">			
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
	
	<!-- END OF CARD BODY -->
	</div>

	<!-- CARD FOOTER -->
	<div class="card-footer d-flex justify-content-end">				
		<div class="btn btn-light" id="card1-button">Next Form <i class="fas fa-arrow-right mx-2"></i></div>
	</div>

<!-- END OF CARD -->
</div>
