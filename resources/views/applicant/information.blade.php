@extends('template')
@section('title','Applicant Documents')
@section('content')
<style>
	label.col-md-4.text-md-right.col-form-label {
    font-weight: bolder;
}

input.form-control.bg-white, select.custom-select.bg-white {
    border: none;
    border-bottom: 1px solid gainsboro;
    border-radius: 0;
}

@media screen and (min-width: 576px){
	.modal-dialog {
    max-width: 800;
    margin: 1.75rem auto;
}
}

</style>

@foreach($student->documents as $document)
<div class="modal fade" id="document-{{ $loop->iteration }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<i class="fas fa-file-image"></i> {{ $document->document_type }}
			</div>
			<div class="modal-body">
				<div class="py-md-1">
					<img class="w-100" src='{{ asset("/storage/$document->url") }}' alt="">
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach

<!-- FORM -->
<form class="col-md-8" method="post" action="/application_form">@csrf

<!-- CARD -->
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
			<label class="col-md-4 text-md-right col-form-label">Applicant Name</label>			
			<div class="col-md-6">
				<input 
					class="form-control bg-white {{ $errors->has('student.last_name') ? 'is-invalid' : '' }}" 
					type="text" 
					name="student[last_name]" 
					value="{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}"
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
	
	<!-- END OF CARD BODY -->
	</div>

	<!-- CARD FOOTER -->
	<div class="card-footer d-flex justify-content-end">				
		<div class="btn btn-light" id="card1-button">Next Form <i class="fas fa-arrow-right mx-2"></i></div>
	</div>

<!-- END OF CARD -->
</div>

<!-- CARD -->
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
	<div class="card-footer d-flex justify-content-between">
		<div class="btn btn-light" id="card2-button"><i class="fas fa-arrow-left mx-2"></i> Back to Form 1</div>			
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>

<div class="col-md-4">
	<div class="card">
		<div class="card-header">
			Documents
		</div>
			<div class="card-body text-secondary">
				<ul class="list-group list-group-flush">
					@foreach($student->documents as $document)
						<li class="list-group-item text-truncate" data-target="#document-{{ $loop->iteration }}" data-toggle="modal"><i class="fas fa-file-image mx-3"></i> {{ $document->document_type }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
<form method="post" action="/applicants/{{ $student->id }}">
	@csrf
	@method('PATCH')
	<button class="btn btn-success">Admit Applicant</button>
</form>
<script src="{{ asset('js/application_form_next_and_back.js') }}"></script>
@endsection