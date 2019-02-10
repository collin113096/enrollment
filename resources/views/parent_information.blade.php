<div class="card collapse" id="card2">

	<!-- CARD HEADER -->
	<div class="card-header">
		Parent Information
	</div>

	<!-- CARD BODY -->
	<div class="card-body">	

		<!-- FATHER NAME -->
		<div class="form-group form-row mt-5">			
				<label class="col-md-4 text-md-right"><strong>Father Name</strong></label>			
				<div class="col-md-6">
					{{ $student->father->name }}
				</div>
		</div>

		<!-- FATHER CONTACT -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right"><strong>Contact</strong></label>			
				<div class="col-md-6">
					{{ $student->father->contact }}
				</div>
		</div>

		<!-- FATHER OCCUPATION -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right"><strong>Occupation</strong></label>			
				<div class="col-md-6">
					{{ $student->father->occupation }}
				</div>
		</div>

		<!-- MOTHER NAME -->
		<div class="form-group form-row mt-5">			
				<label class="col-md-4 text-md-right"><strong>Mother Name</strong></label>			
				<div class="col-md-6">
					{{ $student->mother->name }}
				</div>
		</div>

		<!-- MOTHER CONTACT -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right"><strong>Contact</strong></label>			
				<div class="col-md-6">
					{{ $student->mother->contact }}
				</div>
		</div>

		<!-- MOTHER OCCUPATION -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right"><strong>Occupation</strong></label>			
				<div class="col-md-6">
					{{ $student->mother->occupation }}
				</div>
		</div>

		<div class="mt-5 d-flex justify-content-between">
			<div class="btn btn-light" id="card2-button-back"><i class="fas fa-arrow-left mx-2"></i>Back</div>
			<div class="btn btn-primary" id="card2-button-next">Documents <i class="fas fa-arrow-right mx-2"></i></div>
		</div>

	<!-- END OF CARD BODY -->
	</div>
	

<!-- END OF CARD -->
</div>