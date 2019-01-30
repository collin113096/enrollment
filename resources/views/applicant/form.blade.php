@extends('template')
@section('title','Application Form of Applicant')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/application_form">@csrf

<!-- CARD -->
<div class="card">

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
			<label class="col-md-4 text-md-right col-form-label">Last Name</label>			
			<div class="col-md-6">
				<input 
					class="form-control bg-white {{ $errors->has('student.last_name') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[last_name]" 
					value="{{ $student->last_name }}"
					disabled="" 
				>
			</div>
		</div>

		<!-- FIRST NAME -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">First Name</label>			
			<div class="col-md-6">
				<input 
					class="form-control bg-white {{ $errors->has('student.first_name') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[first_name]" 
					value="{{ $student->first_name }}"
					disabled="" 
				>
			</div>
		</div>

		<!-- MIDDLE NAME -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Middle Name</label>			
			<div class="col-md-6">
				<input 
					class="form-control bg-white {{ $errors->has('student.middle_name') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[middle_name]" 
					value="{{ $student->middle_name }}"
					disabled="" 
				>
			</div>
		</div>

		<!-- HOME ADDRESS -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Home Address</label>			
			<div class="col-md-6">
				<input 
					class="form-control bg-white {{ $errors->has('student.home_address') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[home_address]" 
					value="{{ $student->home_address }}"
					disabled="" 
				>
			</div>
		</div>

		<!-- BIRTH DATE -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Birth Date</label>			
			<div class="col-md-6">
				<input 
					class="form-control bg-white {{ $errors->has('student.birth_date') ? 'is-invalid' : '' }}" 
					type="date" 
					name="student[birth_date]" 
					value="{{ $student->birth_date }}"
					disabled="" 
				>
			</div>
		</div>

		<!-- BIRTH PLACE -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Birth Place</label>			
			<div class="col-md-6">
				<input 
					class="form-control bg-white {{ $errors->has('student.birth_place') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[birth_place]" 
					value="{{ $student->birth_place }}"
					disabled="" 
				>
			</div>
		</div>

		<!-- RELIGION -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Religion</label>			
			<div class="col-md-6">
				<input 
					class="form-control bg-white {{ $errors->has('student.religion') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[religion]" 
					value="{{ $student->religion }}"
					disabled="" 
				>
			</div>
		</div>

		<!-- GENDER -->
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Gender</label>			
			<div class="col-md-6">
				<select 
					class="custom-select bg-white {{ $errors->has('student.gender') ? 'is-invalid' : '' }}" 
					name="student[gender]"
					disabled="" 
				>
					<option value="" hidden>Choose</option>
					<option value="male" @if($student->gender == 'male') selected @endif>Male</option>
					<option value="female" @if($student->gender == 'female') selected @endif>Female</option>
				</select>
			</div>
		</div>

		<!-- GRADE -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label ">Grade</label>			
				<div class="col-md-6">
					<select 
						class="custom-select bg-white {{ $errors->has('student.grade') ? 'is-invalid' : '' }}" 
						name="student[grade]"
						disabled="" 
					>
						<option value="" hidden>Choose</option>
						@foreach($grades as $grade)
						<option value="{{ $grade->name }}" {{ $student->grade == $grade->name ? 'selected
						':'' }}>{{ $grade->name }}</option>
						@endforeach
					</select>
				</div>
		</div>
		<hr>
		<!-- FATHER INFORMATION HEADER -->
		<div class="form-group">			
			<div class="col-md-6 offset-md-4 text-center font-weight-bold">Father Information</div>
		</div>

		<!-- FATHER NAME -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Father Name</label>			
				<div class="col-md-6">
					<input 
						class="form-control bg-white {{ $errors->has('father.name') ? 'is-invalid' : '' }}" 
						type="text" 
						name="father[name]" 
						value="{{ $student->father->name }}"
						disabled="" 
					>
				</div>
		</div>

		<!-- FATHER CONTACT -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Contact</label>			
				<div class="col-md-6">
					<input 
						class="form-control bg-white {{ $errors->has('father.contact') ? 'is-invalid' : '' }}" 
						type="number" 
						name="father[contact]" 
						value="{{ $student->father->contact }}"
						disabled="" 
					>
				</div>
		</div>

		<!-- FATHER OCCUPATION -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Occupation</label>			
				<div class="col-md-6">
					<input 
						class="form-control bg-white {{ $errors->has('father.occupation') ? 'is-invalid' : '' }}" 
						type="text" 
						name="father[occupation]" 
						value="{{ $student->father->occupation }}"
						disabled="" 
					>
				</div>
		</div>
		<hr>

		<!-- MOTHER INFORMATION HEADER -->
		<div class="form-group">			
			<div class="col-md-6 offset-md-4 text-center font-weight-bold">Mother Information</div>
		</div>

		<!-- MOTHER NAME -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Mother Name</label>			
				<div class="col-md-6">
					<input 
						class="form-control bg-white {{ $errors->has('mother.name') ? 'is-invalid' : '' }}" 
						type="text" 
						name="mother[name]" 
						value="{{ $student->mother->name }}"
						disabled="" 
					>
				</div>
		</div>

		<!-- MOTHER CONTACT -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Contact</label>			
				<div class="col-md-6">
					<input 
						class="form-control bg-white {{ $errors->has('mother.contact') ? 'is-invalid' : '' }}" 
						type="number" 
						name="mother[contact]" 
						value="{{ $student->mother->contact }}"
						disabled="" 
					>
				</div>
		</div>

		<!-- MOTHER OCCUPATION -->
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Occupation</label>			
				<div class="col-md-6">
					<input 
						class="form-control bg-white {{ $errors->has('mother.occupation') ? 'is-invalid' : '' }}" 
						type="text" 
						name="mother[occupation]" 
						value="{{ $student->mother->occupation }}"
						disabled="" 
					>
				</div>
		</div>

	<!-- END OF CARD BODY -->
	</div>

	<!-- CARD FOOTER -->
	<div class="card-footer d-flex justify-content-end">				
		<button class="btn btn-primary">Send Application Form</button>
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>

<!-- SCRIPTS -->
<script src="{{ asset('js/application_form_validation.js') }}"></script>
@endsection