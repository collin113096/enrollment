<div class="card collapse" id="card2">

	<!-- CARD HEADER -->
	<div class="card-header">
		Application Form for Enrollment
	</div>

	<!-- CARD BODY -->
	<div class="card-body">	

		<!-- FATHER INFORMATION HEADER -->
		<div class="form-group">			
			<div class="col-md-6 offset-md-4 text-center font-weight-bold">Parent Information</div>
		</div>

		<!-- FATHER NAME -->
		<div class="form-group form-row">			
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
		<hr>
		<!-- MOTHER NAME -->
		<div class="form-group form-row">			
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

	<!-- END OF CARD BODY -->
	</div>

	<!-- CARD FOOTER -->
	<div class="card-footer d-flex justify-content-between">
		<div class="btn btn-light" id="card2-button"><i class="fas fa-arrow-left mx-2"></i> Back to Form 1</div>
		@component('form_for_edit')
			@section('form')
			/applicants/{{ $student->id }}
			@endsection

			@section('form_body')
			<button class="btn btn-success">Admit Applicant</button>
			@endsection
		@endcomponent			
	</div>

<!-- END OF CARD -->
</div>