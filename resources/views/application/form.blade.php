@extends('template')
@section('title','Application Form for Enrollment')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/application_form">@csrf
@include('errors')

<!-- CARD -->
<div class="card" id="card1">

	<!-- CARD HEADER -->
	<div class="card-header py-4 text-center">
		<span class="h5 font-weight-bold">Pagsanjan Academy Application Form for Enrollment</span>
	</div>

	<!-- CARD BODY -->
	<div class="card-body">	

		<!-- STUDENT INFORMATION HEADER -->
		<div class="form-group">			
			<div class="col-md-6 offset-md-4 text-center font-weight-bold">Student Information</div>
		</div>

		<!-- LAST NAME -->
		<div class="form-group form-row">			
			<label class="col-md-4 font-weight-bold text-md-right col-form-label">Last Name</label>			
			<div class="col-md-6">
				<input 
					class="form-control {{ $errors->has('student.last_name') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[last_name]" 
					value="{{ old('student.last_name') }}"
				>
			</div>
		</div>

		<!-- FIRST NAME -->
		<div class="form-group form-row">			
			<label class="col-md-4 font-weight-bold text-md-right col-form-label">First Name</label>			
			<div class="col-md-6">
				<input 
					class="form-control {{ $errors->has('student.first_name') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[first_name]" 
					value="{{ old('student.first_name') }}"
				>
			</div>
		</div>

		<!-- MIDDLE NAME -->
		<div class="form-group form-row">			
			<label class="col-md-4 font-weight-bold text-md-right col-form-label">Middle Name</label>			
			<div class="col-md-6">
				<input 
					class="form-control {{ $errors->has('student.middle_name') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[middle_name]" 
					value="{{ old('student.middle_name') }}"
				>
			</div>
		</div>

		<!-- HOME ADDRESS -->
		<div class="form-group form-row">			
			<label class="col-md-4 font-weight-bold text-md-right col-form-label">Home Address</label>			
			<div class="col-md-6">
				<input 
					class="form-control {{ $errors->has('student.home_address') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[home_address]" 
					value="{{ old('student.home_address') }}"
				>
			</div>
		</div>

		<!-- BIRTH DATE -->
		<div class="form-group form-row">			
			<label class="col-md-4 font-weight-bold text-md-right col-form-label">Birth Date</label>			
			<div class="col-md-6">
				<input 
					class="form-control {{ $errors->has('student.birth_date') ? 'is-invalid' : '' }}" 
					type="date" 
					name="student[birth_date]" 
					value="{{ old('student.birth_date') }}"
				>
			</div>
		</div>

		<!-- BIRTH PLACE -->
		<div class="form-group form-row">			
			<label class="col-md-4 font-weight-bold text-md-right col-form-label">Birth Place</label>			
			<div class="col-md-6">
				<input 
					class="form-control {{ $errors->has('student.birth_place') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[birth_place]" 
					value="{{ old('student.birth_place') }}"
				>
			</div>
		</div>

		<!-- RELIGION -->
		<div class="form-group form-row">			
			<label class="col-md-4 font-weight-bold text-md-right col-form-label">Religion</label>			
			<div class="col-md-6">
				<input 
					class="form-control {{ $errors->has('student.religion') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[religion]" 
					value="{{ old('student.religion') }}"
				>
			</div>
		</div>

		<!-- GENDER -->
		<div class="form-group form-row">			
			<label class="col-md-4 font-weight-bold text-md-right col-form-label">Gender</label>			
			<div class="col-md-6">
				<select 
					class="custom-select {{ $errors->has('student.gender') ? 'is-invalid' : '' }}" 
					name="student[gender]"
				>
					<option value="" hidden>Choose</option>
					<option value="male" @if(old('student.gender') == 'male') selected @endif>Male</option>
					<option value="female" @if(old('student.gender') == 'female') selected @endif>Female</option>
				</select>
			</div>
		</div>

		<!-- GRADE -->
		<div class="form-group form-row">			
				<label class="col-md-4 font-weight-bold text-md-right col-form-label ">Grade</label>			
				<div class="col-md-6">
					<select 
						class="custom-select {{ $errors->has('student.grade_id') ? 'is-invalid' : '' }}" 
						name="student[grade_id]"
					>
						<option value="" hidden>Choose</option>
						@foreach($grades as $grade)
						<option value="{{ $grade->id }}" {{ old('student.grade_id') == $grade->id ? 'selected
						':'' }}>{{ $grade->name }}</option>
						@endforeach
					</select>
				</div>
		</div>
		

	<!-- END OF CARD BODY -->
	</div>


	<!-- CARD FOOTER -->
	<div class="card-footer d-flex justify-content-end">				
		<div class="btn btn-primary" id="card1-button">Next Form <i class="fas fa-arrow-right mx-2"></i></div>
	</div>

<!-- END OF CARD -->
</div>



	<!-- CARD -->
<div class="card collapse" id="card2">

	<!-- CARD HEADER -->
	<div class="card-header py-4 text-center">
		<span class="h5 font-weight-bold">Pagsanjan Academy Application Form for Enrollment</span>
	</div>

	<!-- CARD BODY -->
	<div class="card-body">	

		<!-- PARENT INFORMATION HEADER -->
		<div class="form-group">			
			<div class="col-md-6 offset-md-4 text-center font-weight-bold">Parent Information</div>
		</div>

		<!-- FATHER NAME -->
		<div class="form-group form-row">			
				<label class="col-md-4 font-weight-bold text-md-right col-form-label">Father Name</label>			
				<div class="col-md-6">
					<input 
						class="form-control {{ $errors->has('father.name') ? 'is-invalid' : '' }}" 
						type="text" 
						name="father[name]" 
						value="{{ old('father.name') }}"
					>
				</div>
		</div>

		<!-- FATHER CONTACT -->
		<div class="form-group form-row">			
				<label class="col-md-4 font-weight-bold text-md-right col-form-label">Contact</label>			
				<div class="col-md-6">
					<input 
						class="form-control {{ $errors->has('father.contact') ? 'is-invalid' : '' }}" 
						type="number" 
						name="father[contact]" 
						value="{{ old('father.contact') }}"
					>
				</div>
		</div>

		<!-- FATHER OCCUPATION -->
		<div class="form-group form-row">			
				<label class="col-md-4 font-weight-bold text-md-right col-form-label">Occupation</label>			
				<div class="col-md-6">
					<input 
						class="form-control {{ $errors->has('father.occupation') ? 'is-invalid' : '' }}" 
						type="text" 
						name="father[occupation]" 
						value="{{ old('father.occupation') }}"
					>
				</div>
		</div><hr>

		<!-- MOTHER NAME -->
		<div class="form-group form-row">			
				<label class="col-md-4 font-weight-bold text-md-right col-form-label">Mother Name</label>			
				<div class="col-md-6">
					<input 
						class="form-control {{ $errors->has('mother.name') ? 'is-invalid' : '' }}" 
						type="text" 
						name="mother[name]" 
						value="{{ old('mother.name') }}"
					>
				</div>
		</div>

		<!-- MOTHER CONTACT -->
		<div class="form-group form-row">			
				<label class="col-md-4 font-weight-bold text-md-right col-form-label">Contact</label>			
				<div class="col-md-6">
					<input 
						class="form-control {{ $errors->has('mother.contact') ? 'is-invalid' : '' }}" 
						type="number" 
						name="mother[contact]" 
						value="{{ old('mother.contact') }}"
					>
				</div>
		</div>

		<!-- MOTHER OCCUPATION -->
		<div class="form-group form-row">			
				<label class="col-md-4 font-weight-bold text-md-right col-form-label">Occupation</label>			
				<div class="col-md-6">
					<input 
						class="form-control {{ $errors->has('mother.occupation') ? 'is-invalid' : '' }}" 
						type="text" 
						name="mother[occupation]" 
						value="{{ old('mother.occupation') }}"
					>
				</div>
		</div>

	<!-- END OF CARD BODY -->
	</div>

	<!-- CARD FOOTER -->
	<div class="card-footer d-flex justify-content-between">
		<div class="btn btn-light" id="card2-button"><i class="fas fa-arrow-left mx-2"></i> Back to Form 1</div>			
		<button class="btn btn-primary"><i class="fas fa-check-circle mx-2"></i> Send Application Form</button>
	</div>

<!-- END OF CARD -->
</div>




<!-- END OF FORM -->
</form>



<!-- SCRIPTS -->
<script src="{{ asset('js/application_form_validation.js') }}"></script>
<script src="{{ asset('js/application_form_next_and_back.js') }}"></script>
@endsection